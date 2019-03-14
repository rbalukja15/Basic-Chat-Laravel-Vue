@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-info">
                @if (Auth::user()->isAdmin)
                    <div class="card-header">Departments</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            @foreach($departments as $department)
                                    
                                    <li onclick="document.getElementById('users').style.display = 'block';">
                                    {{-- <a href="/departments/users/{{ $department->id }}"> 
                                        {{ $department->name }}
                                    </a> --}}
                                    {{ $department->name }}
                                    </li>
                                     <li>
                                        <a href="/departments/users/{{$department->id}}"><button class="btn btn-outline-primary btn-sm">Show Users</button>
                                        </a>
                                    </li><br>
                            @endforeach
                        </ul>
                            <a href="/departments/create">
                                <button class="btn btn-outline-success btn-sm" style="float: right;">Create New Department</button>
                            </a>
                            
                            @if(Auth::user()->isAdmin)
                                <a href="/users/showall">
                                    <button class="btn btn-outline-secondary btn-sm" style="float: right; margin-right: 10px;">Show All Users</button>
                                </a><br>
                            @endif
                    </div>

                @else
                    <div class="card-body">
                        <h1>You are a simple user</h1>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-8" id="users">
            <div class="card border-info">
                  <div class="card-header">
                      Basic Chat System
                  </div>

                  <div class="card-body">
                      {{-- <chat-message></chat-message>
                      <chat-log></chat-log>
                      <chat-composer></chat-composer> --}}
                      <label for="chat">Enter chat system</label>
                      <a href="/chat"><button class="btn btn-outline-primary btn-sm" name="chat">Enter</button></a>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
