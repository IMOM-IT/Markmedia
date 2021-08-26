
<div id="wrapper">
    <header class="market-header header">
        <div class="container-fluid">
            <nav style="background:#F9CA27;" class="navbar navbar-toggleable-md navbar fixed-top ">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/version/market-logo.png')}}" alt=""></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('marketing')}}">Marketing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('technology')}}">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('news')}}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
                        </li>
                        @if(\Illuminate\Support\Facades\Auth::check()==false)
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('login')}}">Admin</a>
                        </li>
                            @endif
                    </ul>
                    @include('components.search')
@if(\Illuminate\Support\Facades\Auth::check()==true)
                        <a class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" href="{{route('dashboard')}}"   >
                            <svg class="fa-user fa-w-14 fa-fw "  focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path  d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user fa-fw"></i> Font Awesome fontawesome.com --></a>
@endif


            </nav>
        </div><!-- end container-fluid -->

    </header><!-- end market-header -->

