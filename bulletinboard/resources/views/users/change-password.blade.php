@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
    <div class="container justify-content-center my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Change Password
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row mb-3">
                                <label for="password" class="col-3 col-form-label">Current Password <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="new_pwd" class="col-3 col-form-label">New Password <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="new_pwd" name="new_pwd">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="new_confirm_pwd" class="col-3 col-form-label">New Confirm Password <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="new_confirm_pwd" name="new_confirm_pwd">
                                </div>
                            </div>
                            <div class="form-group row mb-3 col-9 offset-3">
                                <div class="col-5">
                                    <button type="submit" class="btn btn-success text-white">Update Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
