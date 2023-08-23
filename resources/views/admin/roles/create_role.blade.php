@extends('layouts.master')
@section('title')
    Create Roles - {{ env('APP_NAME') }}
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row my-4">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create New Role</h3>
                        </div>
                        <form id="create_new_role">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="role_name">Role Name</label>
                                    <input type="text" name="name" class="form-control" id="role_name" placeholder="Enter role name">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Permissions</h3>
                        </div>
                        <div class="card-body">
                            <div class="row" id="permissions-list">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" id="create_new_roles_submit" class="btn btn-primary" style="float: right;">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('/assets/admin') }}/js/custom/create_roles.js"></script>
@endsection
