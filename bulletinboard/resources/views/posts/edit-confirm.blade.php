@extends('layouts.index')
@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
@endsection
@section('content')
    <div class="container justify-content-center my-5">
        <div class="row">
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
                                    <input type="text" class="form-control" id="title" name="title" value="Title0-edited" disabled>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="description" class="col-3 col-form-label">Description <span class="asterisk">*</span></label>
                                <div class="col-9">
                                    <textarea class="form-control" id="description" name="description" disabled>Description0-edited</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label class="col-3" for="flexSwitchCheckDefault">Status</label>
                                <div class="form-check form-switch col-9">
                                    <input class="form-check-input ms-1" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked disabled>
                                </div>
                            </div>
                            <div class="form-group row mb-3 col-9 offset-3">
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success text-white">Confirm</button>
                                </div>
                                <div class="col-2">
                                    <a href="#" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
