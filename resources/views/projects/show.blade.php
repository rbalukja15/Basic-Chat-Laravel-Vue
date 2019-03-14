<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Show Project</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"> <!-- load bootstrap css -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->

  {{-- bulma cdn --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
  <style>
    .is-complete{
      text-decoration: line-through;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title"> {{ $project->title }}</h1>

    <div class="content">
      {{ $project->description }}
    </div>

    @if($project->tasks->count())
      <div  class="box">
        @foreach($project->tasks as $task)
          <div>
            <form action="/completed-tasks/{{ $task->id }}" method="POST">
              @if($task->completed)
                 @method('DELETE')
              @endif
              @csrf
              
              <label class="checkbox {{ $task->completed ? 'is-complete' : ''}}" for="completed">
              <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
                  {{ $task->description }}
                  {{-- <button class="btn btn-warning" type="submit">Change</button> --}}
              </label>
            </form>
          </div>
        @endforeach
      </div>
    @endif

    {{-- Add A new Task Form --}}

    <form action="/projects/{{ $project->id}}/tasks" method="post" class="box">

      @csrf

      <div class="field">
        <label for="description" class="label">New Task</label>

        <div class="control">
          <input type="text" class="input" name="description" placeholder="New Task" required>
        </div>
      </div>

      <div class="field">
        <div class="control">
          <button class="btn btn-warning">Add Task</button>
        </div>
      </div>

      @include('errors')
    </form>

    <a href="/projects/{{ $project->id }}/edit"><button class="btn btn-warning">Edit</button></a>
  </div>
</body>
</html>