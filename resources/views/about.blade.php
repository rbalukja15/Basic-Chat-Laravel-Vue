@extends('layouts/navbar')

@section('title', 'About Us')

@section('content')
    <h1>About Page</h1>
    <p>
      Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium unde inventore suscipit labore, laborum doloremque neque fugiat nesciunt, reprehenderit eos provident porro, odio quos cumque debitis pariatur. Maxime, delectus itaque?
    </p>
@endsection

<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">{{ Auth::user()->name }}s Profile</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                    <img alt="User Pic" src="https://qwilr.com/wp-content/themes/qwilr/assets/user-grey.svg" class="img-circle img-responsive">
                </div>
                <div class="col-md-9 col-lg-9 ">
                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Department:</td>
                                <td>Programming</td>
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
                                    <td>Phone Number</td>
                                    <td>Lorem</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                 </div>
                </div>
                <div class="panel-footer">
                    <div class="well text-center">
                        <button type="button" class="btn btn-warning text-uppercase btn-lg" id="edit_button_user">Edit User</button>
                    </div>
                </div>
