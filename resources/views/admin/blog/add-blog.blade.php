<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="{{asset('css/admin/login.css')}}">
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/admin/login.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{route('dashboard')}}">Admin Panel</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
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
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Home page</div>
                    <a class="nav-link" href="{{url('/')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Home page
                    </a>
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">

                            <a class="nav-link" href="{{route('layout-light')}}">Light Sidenav</a>
                        </nav>
                    </div>




                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Admin
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>

            <div class="container ">
                <div class="row ">
                    <div class="col-md-5 mx-auto">
                        <div id="first">
                            <div class="myform form bg" >
                                <div class="logo mb-3 bg">
                                    <div class="col-md-12 text-center">
                                        <h1>Blog</h1>
                                        @if(\Illuminate\Support\Facades\Session::has('success'))
                                     <div class="alert alert-success">  {{\Illuminate\Support\Facades\Session::get('success')}}</div>
                                        @endif
                                        <form action="{{route('blog.add')}}" method="post" enctype="multipart/form-data" class="d-inline mt-1">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" name="title"  class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" value="">
                                                @error('title')
                                                <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <select name="category" id="category"  class="form-select" >

                                                    <option value="{{1}}">MARKETING</option>
                                                    <option value="{{2}}">TECHNOLOGY</option>
                                                    <option value="{{3}}">NEWS</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder="Description"></textarea>
                                            </div>
                                            @error('description')
                                            <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                            <label class="d-inline float-left " for="facebook">
                                                <span class="fb-button btn btn-primary"><i class="fa fa-facebook"></i></span>
                                            </label>
                                            <br>
                                            <input type="text" name="facebook" class="form-control mt-1" id="facebook" placeholder="Facebook">

                                            <label class="d-inline float-left" for="twitter" >
                                                <span class="tw-button btn btn-close-white" style="color: #0dcaf0"><i class="fa fa-twitter "></i></span>
                                            </label>

                                            <input type="text"  name="twitter" class="form-control mb-1" id="twitter" placeholder="Twitter">
                                            <br>
                                            <label for="image" class="col-form-label">Image</label>
                                            <input type="file" class="form-control-file" name="image"  id="image"><br><br>

                                            <button type="submit" class=" btn  btn-primary float-left" >Create</button>


                                        </form>
                                        <a href="{{route('dashboard')}}" class="btn btn-dark float-left ml-1">Back </a>
                                    </div>
                                </div>
                                <br>

                            </div></div></div></div></div>
        </main>

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
