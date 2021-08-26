<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sidenav Light - SB Admin</title>
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
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
@include('admin.components.header-light')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Blogs</li>
                        </ol>

                        @if(\Illuminate\Support\Facades\Session::has('delete'))
                            <div class="alert alert-primary">{{\Illuminate\Support\Facades\Session::get('delete')}}</div>
                        @endif
                        <div class="card mb-4">

                            <div class="dataTable-container">

                                <table id="datatablesSimple" class="dataTable-table">
                                    <thead>

                                    <tr>
                                        <th  ><a href="#" class="dataTable-sorter">Position</a></th>
                                        <th  ><a href="#" class="dataTable-sorter">Office</a></th>
                                        <th ><a href="#" class="dataTable-sorter">Name</a></th>
                                        <th ><a href="#" class="dataTable-sorter">Age</a></th>
                                        <th ><a href="#" class="dataTable-sorter">Start date</a></th>
                                        <th ><a href="#" class="dataTable-sorter">Salary</a></th>
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
                        </div>
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
        <script src="js/scripts.js"></script>
    </body>
</html>
