@extends('layouts.index')
@section('content')
    <div class="container justify-content-center my-5">
        <div class="row">
            <div class="col-10 offset-1">
                @if (session('info'))
                    <div class="alert alert-info">
                        {{ session('info') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Post List
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('post.search') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group d-flex justify-content-between col-5 align-items-center">
                                    <label for="keyword" class="form-label me-2">keyword:</label>
                                    <input class="form-control" type="search" aria-label="search" name="search"
                                        value="{{ request('search') }}">
                                </div>
                                <div class="col-6 offset-1">
                                    <button type="submit" class="btn btn-success text-white">Search</button>
                                    <a href="{{ route('post.create') }}" class="btn btn-success text-white">Create</a>
                                    <button type="submit" class="btn btn-success text-white">Upload</button>
                                    <button type="submit" class="btn btn-success text-white">Download</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead class="bg-info text-white">
                                            <tr>
                                                <th>Post Title</th>
                                                <th>Post Description</th>
                                                <th>Post User</th>
                                                <th>Post Date</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($posts) < 1)
                                                <tr>
                                                    <td colspan="5" class="text-center">No data available in table</td>
                                                </tr>
                                            @else
                                                @foreach ($posts as $post)
                                                    <tr>
                                                        <td class="col-3">
                                                            <!-- Button trigger modal -->
                                                            <a href="" class="text-decoration-none"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                                {{ $post->title }}
                                                            </a>
                                                        </td>
                                                        <td class="col-3">{{ $post->description }}</td>
                                                        @foreach ($users as $user)
                                                            @if ($user->id == $post->create_user_id)
                                                                <td>{{ $user->name }}</td>
                                                            @endif
                                                        @endforeach
                                                        <td>{{ date('Y/m/d', strtotime($post->created_at)) }}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-info">Edit</button>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-sm btn-danger"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                                Delete
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="mt-3 d-flex justify-content-end">
                                        {{ $posts->links() }}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirm</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Are you sure to delete post?</h6>
                    <div class="row mb-2">
                        <p class="col-3">ID</p>
                        <p class="col-9">1</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-3">Title</p>
                        <p class="col-9">Title0</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-3">Description</p>
                        <p class="col-9">Description0</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-3">Status</p>
                        <p class="col-9">Active</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Post Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <p class="col-4">Title</p>
                        <p class="col-8">Title1</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Description</p>
                        <p class="col-8">Description1</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Status</p>
                        <p class="col-8">Active</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Created Date</p>
                        <p class="col-8">2023/02/25</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Created User</p>
                        <p class="col-8">Admin</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Updated Date</p>
                        <p class="col-8">2023/02/25</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Updated User</p>
                        <p class="col-8">Admin</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
