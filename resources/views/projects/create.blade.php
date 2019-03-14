
@extends('layouts.navbar')

@section('title', 'Create')

@section('content')
    <div class="container">
            <h1>Create a new Project</h1>

            <form action="/projects" method="POST">
        
                @csrf
        
                
        
                <div>
                    <input type="text" class="input has-error" name="title" placeholder="Project Title" required>
                </div>
        
                <div>
                    <textarea name="description" placeholder="Project Description" required></textarea>
                </div>
        
                <div>
                    <button type="submit">Create Project</button>
                </div>

                @include('errors')

            </form>
    </div>
    

@endsection


