@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@section('content')
    <div class="container justify-content-center my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Upload CSV File
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row mb-3">
                                <label for="profile" class="col-3 col-form-label">CSV File: </label>
                                <div class="col-6">
                                    <input type="file" class="form-control" id="profile" name="profile">
                                </div>
                            </div>
                            <div class="form-group row mb-3 col-9 offset-3">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success text-white">Upload</button>
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
