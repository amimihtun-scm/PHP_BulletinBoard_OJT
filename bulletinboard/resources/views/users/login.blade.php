@extends('layouts.index')
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Login
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row my-3">
                                <label for="email" class="col-3 col-form-label">Email Address:</label>
                                <div class="col-9">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="password" class="col-3 col-form-label">Password:</label>
                                <div class="col-9">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-9 offset-3 mb-3">
                                    <div class="form-check d-inline-block me-3">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <label class="form-check-label">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="#" class="text-decoration-none">Forgotten Password?</a>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-9 offset-3 d-grid">
                                    <button type="submit" class="btn btn-success text-white d-block">Login</button>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <div class="col-9 offset-3">
                                    <a href="#" class="text-decoration-none">Create Account? <i
                                            class="fa-solid fa-user-plus"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
