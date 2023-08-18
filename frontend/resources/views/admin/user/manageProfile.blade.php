@extends('layouts.master')
@section('title')
    Manage Profile - {{ env('APP_NAME') }}
@endsection
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row my-5">
                    <div class="col-md-3">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <form id="brandImportForm">
                                @csrf
                                <input type="hidden" name="_token" value="">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="" alt="User profile picture">
                                        <input type="file" name="image" id="profileimg" style="display:none">
                                    </div>
                                    <h3 class="profile-username text-center">Admin</h3>
                                    <button type="button" id="profileimgbtn" class="btn btn-primary btn-block"><b>Change image</b></button>
                                    <button type="submit" id="profileimgupdate" class="btn btn-primary btn-block"><b>Update</b></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#profile-update" data-toggle="tab">Profile Update</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#password-update" data-toggle="tab">Password Update</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile-update">
                                        <form class="user-update-form">
                                            @csrf
                                            <input type="hidden" name="_token" value="">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="name" class="form-control" id="inputName" placeholder="Name" name="name" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control emailOnly" id="inputEmail" placeholder="Email" name="email" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control numbersOnly" id="phone" placeholder="Phone number" name="phone" value="" onkeypress="if(this.value.length==10) return false;">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="password-update">
                                        <form class="user-password-update" id="kt_modal_user_update_password_form">
                                            @csrf
                                            <input type="hidden" name="_token" value="">
                                            <div class="form-group row">
                                                <label for="old_password" class="col-sm-2 col-form-label">Old password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="old_password" placeholder="Old password" name="old_password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-2 col-form-label">New password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password" placeholder="New password" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password_confirmation" class="col-sm-2 col-form-label">Confirm password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm password" name="password_confirmation">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button id="user_password_update_submit" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
<script src="{{asset('/assets/admin')}}/js/custom/manage_profile.js"></script>
@endsection
