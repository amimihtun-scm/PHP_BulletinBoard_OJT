@extends('layouts.index')
@section('content')
    <div class="container justify-content-center my-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        User List
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-2 d-flex justify-content-between align-items-center">
                                    <label for="name" class="form-label me-2">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group col-2 d-flex justify-content-between align-items-center">
                                    <label for="email" class="form-label me-2">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group col-3 d-flex justify-content-between align-items-center">
                                    <label for="from" class="form-label me-2">From:</label>
                                    <input type="date" class="form-control" id="from" name="from">
                                </div>
                                <div class="form-group col-3 d-flex justify-content-between align-items-center">
                                    <label for="to" class="form-label me-2">To:</label>
                                    <input type="date" class="form-control" id="to" name="to">
                                </div>
                                <div class="col-2">
                                    <button type="submit" class="btn btn-success text-white">Search</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 overflow-scroll">
                                    <table class="table table-striped">
                                        <thead class="bg-info text-white">
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Created User</th>
                                                <th>Type</th>
                                                <th>Phone</th>
                                                <th>Date of Birth</th>
                                                <th>Address</th>
                                                <th>Created_date</th>
                                                <th>Updated_date</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <a href="" class="text-decoration-none" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal1">
                                                        Aung Aung
                                                    </a>
                                                </td>
                                                <td>aungaung@gmail.com</td>
                                                <td>Aung Aung</td>
                                                <td>Admin</td>
                                                <td>09236152837</td>
                                                <td>2002/03/01</td>
                                                <td>Insein</td>
                                                <td>20022/03/01</td>
                                                <td>20022/05/01</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <a href="" class="text-decoration-none" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal1">
                                                        Mg Mg
                                                    </a>
                                                </td>
                                                <td>mgmg@gmail.com</td>
                                                <td>Mg Mg</td>
                                                <td>User</td>
                                                <td>09236152837</td>
                                                <td>2002/03/01</td>
                                                <td>Yangon</td>
                                                <td>20022/03/01</td>
                                                <td>20022/05/01</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <a href="" class="text-decoration-none" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal1">
                                                        Zaw Zaw
                                                    </a>
                                                </td>
                                                <td>zawzaw@gmail.com</td>
                                                <td>Zaw Zaw</td>
                                                <td>Admin</td>
                                                <td>09236152837</td>
                                                <td>2002/03/01</td>
                                                <td>Insein</td>
                                                <td>20022/03/01</td>
                                                <td>20022/05/01</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
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
                        <p class="col-3">Name</p>
                        <p class="col-9">Aung Aung</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-3">Email</p>
                        <p class="col-9">aungaung@gmail.com</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-3">Type</p>
                        <p class="col-9">Admin</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-3">Phone</p>
                        <p class="col-9">09236152837</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-3">Date of Birth</p>
                        <p class="col-9">2002/03/01</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-3">Address</p>
                        <p class="col-9">Insein</p>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">User Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-2">
                        <p class="col-4">Name</p>
                        <p class="col-8">Aung Aung</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Email</p>
                        <p class="col-8">aungaung@gmail.com</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Type</p>
                        <p class="col-8">Admin</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Phone</p>
                        <p class="col-8">09236152837</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Date of Birth</p>
                        <p class="col-8">2002/03/01</p>
                    </div>
                    <div class="row mb-2">
                        <p class="col-4">Address</p>
                        <p class="col-8">Insein</p>
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
