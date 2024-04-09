@extends('layouts.master')
@section('title')
    Admin - {{ env('APP_NAME') }}
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div class="col-12 my-4">
                    <div class="card">
                        <div class="card-header bg-primary" style="position: relative;">
                            <div class="d-flex" style="justify-content: space-between;">
                                <div class="d-flex align-items-center">Create New User</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form id="create_new_user">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="name">User Name</label>
                                            <input type="text" class="form-control" id="name" name="" placeholder="Enter Name">
                                          </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="Email">
                                          </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" id="image" placeholder="Image">
                                          </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation">
                                          </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="Phone">
                                          </div>
                                    </div>
                                    
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="role_id">User Role</label>
                                            <select class="form-control" id="role_id" name="role_id">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-4">
                                        <div class="form-group">
                                            <label for="company">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option  value="">Select Status </option>
                                                <option value="enable">Enable</option>
                                                <option value="disable ">Disable </option>
                                            </select>
                                           
                                          </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="email">Repeat Password</label>
                                            <input type="password" class="form-control" id="c_password" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    
                                    <div class="col">
                                    </div>
                                </div>
                                <button class="btn btn-primary" id="create_new_user_submit" style="float: right;">Submit</button>
                              </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="{{asset('/assets/admin')}}/js/custom/create_new_user.js"></script>
@endsection