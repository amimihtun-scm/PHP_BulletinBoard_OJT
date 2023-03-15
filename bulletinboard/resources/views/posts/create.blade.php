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
                        @php
                            $post = Session::get('post');
                        @endphp
                        <form action="{{ route('post.confirm') }}" method="POST">
                            @csrf
                            <div class="form-group row my-3">
                                <label for="title" class="col-3 col-form-label">
                                    Title @if ($post)
                                    @else
                                        <span class="asterisk">*</span>
                                    @endif
                                </label>
                                <div class="col-9">
                                    <input type="text"
                                        class="form-control @if ($post) disabled @endif"
                                        id="title" name="title"
                                        @if ($post) value="{{ $post['title'] }}" readonly
                                        @else
                                        value="{{ Request::old('title') }}" @endif>
                                    @if ($errors->has('title'))
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="description" class="col-3 col-form-label">
                                    Description @if ($post)
                                    @else
                                        <span class="asterisk">*</span>
                                    @endif
                                </label>
                                <div class="col-9">
                                    @if ($post)
                                        <textarea class="form-control disabled" name="description" readonly>{{ $post['description'] }}</textarea>
                                    @else
                                        <textarea class="form-control" name="description">{{ Request::old('description') }}</textarea>
                                    @endif
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3 col-9 offset-2">
                                @if ($post)
                                    <div class="col-2 me-4 ms-3">
                                        <button type="submit" name="action" value="confirm"
                                            class="btn btn-success text-white ms-5">Confirm</button>
                                    </div>
                                    <div class="col-2 me-4 ms-3">
                                        <button type="submit" name="action" value="cancel"
                                            class="btn btn-secondary">Cancel</button>
                                    </div>
                                @else
                                    <div class="col-2 me-4 ms-3">
                                        <button type="submit" name="action" value="create"
                                            class="btn btn-success text-white ms-5">Create</button>
                                    </div>
                                    <div class="col-1">
                                        <a href="{{ route('post.create') }}" class="btn btn-secondary">Clear</a>
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
