@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Edit Post
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row my-3">
                                <label for="title" class="col-3 col-form-label">Title <span class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="title" name="title" value="Title0">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="description" class="col-3 col-form-label">Description <span class="asterisk">*</span></label>
                                <div class="col-9">
                                    <textarea class="form-control" id="description" name="description">Description0</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-3" for="flexSwitchCheckDefault">Status</label>
                                <div class="form-check form-switch col-9">
                                    <input class="form-check-input ms-1" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
                                </div>
                            </div>
                            <div class="form-group row mb-3 col-9 offset-3">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success text-white">Edit</button>
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
