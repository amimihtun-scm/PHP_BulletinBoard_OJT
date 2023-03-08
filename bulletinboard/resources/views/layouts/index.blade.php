<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BulletinBoard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    @yield('css')
</head>

<body>
    <nav class="container-fluid bg-light py-2">
        <div class="row text-success">
            <div class="col-6 d-flex justify-content-start align-items-center">
                <h3 class="me-3"><a href="#" class="text-decoration-none text-success">BulletinBoard</a></h3>
                <a href="#" class="text-decoration-none text-success me-3">Users</a>
                <a href="#" class="text-decoration-none text-success me-3">Posts</a>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <a href="#" class="text-decoration-none text-success me-3">Create User</a>
                <div class="dropdown">
                    <a class="btn dropdown-toggle text-success" type="button" id="dropdownMenuLink"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (Auth::check())
                            {{ Auth::user()->name }}
                        @endif
                        <i class="fa-solid fa-user ms-1"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--/.nav -->
    @yield('content')
    <footer class="container-fluid bg-light py-3 fixed-bottom">
        <div class="row text-success justify-content-between align-items-center">
            <div class="col-6">
                <h5><a href="#" class="text-decoration-none text-success">Seattle Consulting Myanmar</a></h5>
            </div>
            <div class="col-4 offset-2">
                <small>Copyright &copy; Seattle Consulting Myanmar Co., Ltd. All rights reserved.</small>
            </div>
        </div>
    </footer>
    <!--/.footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.min.js"
        integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.bundle.min.js"
        integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
