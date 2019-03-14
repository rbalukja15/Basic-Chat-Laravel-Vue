@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Department</div>
                <div class="card-body">
                  <form action="/departments" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                          <input type="text"  class="form-control" id="staticEmail" value="" required name="name">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-success" style="float: right;">Add New Department</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection