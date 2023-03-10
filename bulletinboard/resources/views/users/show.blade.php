@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
    <div class="container justify-content-center my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Profile
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 offset-2">
                                <img class="user-profile mt-4" src="{{ asset('images/img_user.png') }}" alt="Profile Image">
                            </div>
                            <div class="col-7">
                                <form>
                                    <div class="form-group row my-3">
                                        <label for="name" class="col-3">Name</label>
                                        <div class="col-9">
                                            Aung Aung
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="email" class="col-3">Email</label>
                                        <div class="col-9">
                                            aungaung@gmail.com
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="type" class="col-3">Type</label>
                                        <div class="col-9">
                                            Admin
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="phone" class="col-3">Phone</label>
                                        <div class="col-9">
                                            09431238765
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="dob" class="col-3">Date of Birth</label>
                                        <div class="col-9">
                                            2002-03-07
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="address" class="col-3">Address</label>
                                        <div class="col-9">
                                            Insein
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3 col-4">
                                        <button type="submit" class="btn btn-success text-white">Edit Profile</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
