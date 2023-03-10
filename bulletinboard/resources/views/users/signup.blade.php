@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
    <div class="container justify-content-center my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Sign Up
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row my-3">
                                <label for="name" class="col-3 col-form-label">Name <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="email" class="col-3 col-form-label">E-Mail Address <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="password" class="col-3 col-form-label">Password <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="confirm_password" class="col-3 col-form-label">Password Confirmation <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password">
                                </div>
                            </div>
                            <div class="form-group row mb-3 col-9 offset-3">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success text-white">Create</button>
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
