@extends('layouts.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
    <div class="container justify-content-center my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Create Post
                    </div>
                    <div class="card-body">
                        @if (Session::get('description'))
                            <form action="{{ route('post.store') }}" method="POST">
                                @csrf
                            @elseif (Session::get('cancel'))
                                <form action="{{ route('post.confirm') }}" method="POST">
                                    @csrf
                                @else
                                    <form action="{{ route('post.confirm') }}" method="POST">
                                        @csrf
                        @endif
                        <div class="form-group row my-3">
                            @if (Session::get('title'))
                                <label for="title" class="col-3 col-form-label">Title</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ Session::get('title') }}" disabled>
                                </div>
                            @elseif (Session::get('cancel'))
                                <label for="title" class="col-3 col-form-label">Title <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $post['title'] }}">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            @else
                                <label for="title" class="col-3 col-form-label">Title <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ Request::old('title') }}">
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                        <div class="form-group row mb-3">
                            @if (Session::get('description'))
                                <label for="description" class="col-3 col-form-label">Description</label>
                                <div class="col-9">
                                    <textarea class="form-control" id="description" name="description" disabled>{{ Session::get('description') }}</textarea>
                                </div>
                            @elseif (Session::get('cancel'))
                                <label for="description" class="col-3 col-form-label">Description <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <textarea class="form-control" name="description">{{ $post['description'] }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            @else
                                <label for="description" class="col-3 col-form-label">Description <span
                                        class="asterisk">*</span></label>
                                <div class="col-9">
                                    <textarea class="form-control" name="description">{{ Request::old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3 col-9 offset-2">
                            @if (Session::get('description'))
                                <div class="col-2 me-5 ms-3">
                                    <button type="submit" class="btn btn-success text-white ms-5">Confirm</button>
                                </div>
                                <div class="col-1">
                                    <a href="{{ route('post.cancel') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            @elseif (Session::get('cancel'))
                                <div class="col-2 me-4 ms-3">
                                    <button type="submit" class="btn btn-success text-white ms-5">Create</button>
                                </div>
                                <div class="col-1">
                                    <button type="reset" class="btn btn-secondary">Clear</button>
                                </div>
                            @else
                                <div class="col-2 me-4 ms-3">
                                    <button type="submit" class="btn btn-success text-white ms-5">Create</button>
                                </div>
                                <div class="col-1">
                                    <button type="reset" class="btn btn-secondary">Clear</button>
                                </div>
                            @endif
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
