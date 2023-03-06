@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Register
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row my-3">
                            <label for="name" class="col-3 col-form-label">Name <span class="asterisk">*</span></label>
                            <div class="col-9">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="email" class="col-3 col-form-label">E-Mail Address <span class="asterisk">*</span></label>
                            <div class="col-9">
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="password" class="col-3 col-form-label">Password <span class="asterisk">*</span></label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="confirm_password" class="col-3 col-form-label">Password Confirmation <span class="asterisk">*</span></label>
                            <div class="col-9">
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="type" class="col-3 col-form-label">Type</label>
                            <div class="col-9">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Choose a Type</option>
                                    <option value="0">Admin</option>
                                    <option value="1">User</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="phone" class="col-3 col-form-label">Phone</label>
                            <div class="col-9">
                                <input type="number" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="dob" class="col-3 col-form-label">Date of Birth</label>
                            <div class="col-9">
                                <input type="date" class="form-control" id="dob" name="dob">
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="address" class="col-3 col-form-label">Address</label>
                            <div class="col-9">
                                <textarea class="form-control" id="address" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="profile" class="col-3 col-form-label">Profile <span class="asterisk">*</span></label>
                            <div class="col-9">
                                <input type="file" class="form-control" id="profile" name="profile">
                            </div>
                        </div>
                        <div class="form-group row mb-3 col-9 offset-3">
                            <div class="col-2">
                                <button type="submit" class="btn btn-success text-white">Register</button>
                            </div>
                            <div class="col-2">
                                <button type="reset" class="btn btn-secondary">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection