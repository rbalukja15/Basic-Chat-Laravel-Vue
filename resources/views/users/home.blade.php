@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="card border-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ Auth::user()->name }}s Profile</h3>
                    </div>
                    <div class="card-body text-primary">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <img alt="User Pic" src="https://qwilr.com/wp-content/themes/qwilr/assets/user-grey.svg" class="img-circle img-responsive">
                            </div>
                            <div class="col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>Department:</td>
                                            <td>
                                                {{-- {{ Department::where('id', Auth::user()->department_id)->get() }} --}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hire date:</td>
                                            <td>2015-06-15</td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td>Lorem</td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>Lorem</td>
                                        </tr>
                                        <tr>
                                            <td>Birthplace</td>
                                            <td>Lorem</td>
                                        </tr>
                                        <tr>
                                            <td>Username</td>
                                            <td>{{ Auth::user()->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ Auth::user()->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone Number</td>
                                            <td>Lorem</td>
                                        </tr>
                                        <tr>
                                            {{-- <button class="btn btn-outline-success btn-sm">Back</button> --}}
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="float: right;">
                                    <button class="btn btn-outline-success btn-sm" onclick="goBack()">Back</button>
                                </div>
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
