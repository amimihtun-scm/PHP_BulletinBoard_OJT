@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
    <div class="container justify-content-center my-5 overflow-scroll">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Profile Edit
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row my-3">
                                <label for="name" class="col-3 col-form-label">Name <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="Aung Aung">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-3 col-form-label">E-Mail Address <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="aungaung@gmail.com">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="type" class="col-3 col-form-label">Type</label>
                                <div class="col-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option>Choose a Type</option>
                                        <option value="0" selected>Admin</option>
                                        <option value="1">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="phone" class="col-3 col-form-label">Phone</label>
                                <div class="col-9">
                                    <input type="number" class="form-control" id="phone" name="phone"
                                        value="09431238765">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="dob" class="col-3 col-form-label">Date of Birth</label>
                                <div class="col-9">
                                    <input type="date" class="form-control" id="dob" name="dob"
                                        value="2002-03-07">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="address" class="col-3 col-form-label">Address</label>
                                <div class="col-9">
                                    <textarea class="form-control" id="address" name="address">Insein</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="profile" class="col-3 col-form-label">Old Profile</label>
                                <div class="col-9">
                                    <img class="user-profile mt-4" src="{{ asset('images/img_user.png') }}"
                                        alt="Profile Image">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="profile" class="col-3 col-form-label">New Profile</label>
                                <div class="col-9">
                                    <input type="file" class="form-control" id="profile" name="profile">
                                </div>
                            </div>
                            <div class="form-group row mb-3 col-9 offset-3">
                                <div class="col-1 me-2">
                                    <button type="submit" class="btn btn-success text-white">Edit</button>
                                </div>
                                <div class="col-1">
                                    <button type="reset" class="btn btn-secondary">Clear</button>
                                </div>
                                <div class="col-4 mt-1 offset-1">
                                    <a href="#" class="text-decoration-none">Change Password</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
