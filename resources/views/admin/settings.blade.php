<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('admin/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/settings.css')}}">
    <title>Settings</title>
</head>
<body>
<div class="wrapper bg-white mt-sm-5">
    <h4 class="pb-4 border-bottom">Account settings</h4>
    <div class="d-flex align-items-start py-3 border-bottom">
                <div style="width: 70px">
            <svg class="fa-user fa-w-14 fa-fw "  focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path  d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg><!-- <i class="fas fa-user fa-fw"></i> Font Awesome fontawesome.com -->
                </div>
    </div>
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    <div class="py-2">
        <div class="row py-2">
            @foreach(\App\Models\User::all() as $user)
            <form action="{{route('update.profile')}}" method="post" class="form form-inline">
                @csrf
            <div class="col-md-6"> <label for="firstname">Name</label> <input type="text" class="bg-light form-control" placeholder="Name" name="name" value="{{$user->name}}"> </div>

        <div class="row py-2">
            <div class="col-md-6"> <label for="email">Email Address</label> <input type="text" class="bg-light form-control" placeholder="Email" name="email" value="{{$user->email}}"> </div>

        </div>
                <div class="row py-2">
            <div class="col-md-6 pt-md-0 pt-3"> <label for="old_password">Old Password</label>
            <input type="password" name="old_password" class="bg-light form-control" id="old_password">
           @if(\Illuminate\Support\Facades\Session::has('error'))
            <div class="alert-danger">{{session('error')}}</div>
            @endif
            </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="qwert">Password</label>
                <input type="password" name="password" class="bg-light form-control" id="qwert">

                </div> </div>
            <div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="password_confirm">Confirm Password</label>
                <input type="password" name="password_confirm" class="bg-light form-control" id="password_confirm">
                @error('password_confirm')
                    <div class="alert-danger">{{$message}}</div>
                @enderror
            </div>

                <div class="py-3 pb-4 "> <button class="btn btn-primary mr-3" type="submit">Save Changes</button> </div>
        </form><a href="{{route('dashboard')}}" ><button class="btn danger border button float-right mt-2">Cancel</button> </a>
            @endforeach

    </div>
</div>
</div></body>
</html>
