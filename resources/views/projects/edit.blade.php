<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Page</title>

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"> <!-- load bootstrap css -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
</head>
<body>
  

  <div class="container">
    <h1 class="title">Edit Project</h1>

  <form action="/projects/{{$project->id}}" method="POST">

      {{ @method_field('PATCH') }}
      {{ @csrf_field() }}

      <div class="form-group">
        <label for="title">Title</label>
      <input type="textarea" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Title" value="{{ $project->title }}">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
      <input type="textarea" class="form-control" name="description" placeholder="Desciption" value="{{ $project->description }}">
      </div>
      <button type="submit" class="btn btn-primary">Update Project</button>
    </form>

    <form action="/projects/{{ $project->id }}" method="POST">
        {{ @method_field('DELETE') }}
        {{ @csrf_field() }}

        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
  </div>
</body>
</html>