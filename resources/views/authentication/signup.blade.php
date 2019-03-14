<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome Page</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"> <!-- load bootstrap css -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:80px; }
    </style>
</head>
<body>
  <div class="container">

    <div class="col-sm-6 col-sm-offset-3">
    
        <h1><span class="fa fa-sign-in"></span> Signup</h1>
    
        <!-- show any messages that come back with authentication -->
        {{-- <% if (message.length > 0) { %>
            <div class="alert alert-danger"><%= message %></div>
        <% } %> --}}
    
        <!-- LOGIN FORM -->
        <form action="/users" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control {{ $errors->has('username') ? 'alert-danger' : ''}}" name="username" required value="{{ old('username')}}">
            </div>

            <div class="form-group has-warning has-feedback">
                <label for="email">Email</label>
                <input type="text" class="form-control {{ $errors->has('email') ? 'alert-danger' : ''}}" name="email" required value="{{ old('email')}}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'alert-danger' : ''}}" name="password" required>
            </div>
    
            <button type="submit" class="btn btn-warning btn-lg">Signup</button>
        </form>
    
        <hr>
    
        <p>Already have an account? <a href="/login">Login</a></p>
        <p>Or go <a href="/">home</a>.</p>
    

        @include('errors')
    </div>

    
    
    </div>
</body>
</html>