<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{route('dashboard')}}">Admin Panel</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
@include('admin.components.search')
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{route('settings')}}">Settings</a></li>

                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    @include('admin.components.header')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Blogs</li>
                </ol>
                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-primary">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
                @endif
                @if(\Illuminate\Support\Facades\Session::has('delete'))
                    <div class="alert alert-primary">{{\Illuminate\Support\Facades\Session::get('delete')}}</div>
                @endif
                <div class="row">


                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Twitter</th>
                        <th scope="col">Image</th>
                        <th scope="col"><a href="{{url('/create-blog')}}" class="btn btn-primary">Add new</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                        <th scope="row">{{$blog->title}}}</th>
                        <td>{{$blog->category}}</td>
                        <td>{{$blog->facebook}}</td>
                        <td>{{$blog->twitter}}</td>
                        <td><img style="width: 100px" src="storage/{{$blog->images}}" alt="{{$blog->images}}"></td>

                        <td>
                            <a href="{{route('edit',['id'=>$blog->id])}}" ><div class="fa fa-edit"></div></a>
                            <a href="{{route('show',['id'=>$blog->id])}}" ><div class="fa fa-eye"></div></a>
                            <a href="{{route('delete',['id'=>$blog->id])}}" ><div class="fa fa-trash"></div></a>
                        </td>
                    </tr>



                    @endforeach
                    </tbody>
                </table>
            </div>
    </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
</body>
</html>
