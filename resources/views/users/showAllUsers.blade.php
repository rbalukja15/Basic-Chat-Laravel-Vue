@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="card border-primary">
                <div class="card-header">
                  All Users <button class="btn btn-outline-success btn-sm" style="float: right;" onclick="goBack()">Back</button>
                </div>
                <div class="card-body p-0">  
                  <div class="table-responsive">
                    <table class="table table-hover table-secondary mb-0">
                      <thead>
                        <tr scope="row">
                          <th scope="col">#</th>
                          <th scope="col">Username</th>
                          <th scope="col">Email</th>
                          <th scope="col">isAdmin</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach( $users as $user)
                          <tr scope="row">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{($user->isAdmin)==1 ? 'YES' : 'NO'}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                </div>
                </div> 
            </div>
        </div>
    </div>  

    <script>
        function goBack() {
          window.history.back();
        }
    </script>
@endsection