<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <title>Edit Blog</title>
</head>
<body>
<div class="container ">
    <div class="row ">
        <div class="col-md-5 mx-auto">
            <div id="first">
                <div class="myform form bg" >
                    <div class="logo mb-3 bg">
                        <div class="col-md-12 text-center">

                            <h1>Edit Blog</h1>
@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
                            @endif
@foreach($db as $d)
                            <form action="{{url('edit-blog/'.$id)}}" method="post" enctype="multipart/form-data" class="d-inline mt-1">
                                @csrf

                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title"  class="form-control" id="title" aria-describedby="emailHelp" placeholder="Title" value="{{$d->title}}">
                                    @error('title')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" id="category"  class="form-select"  >
                                        <option value="{{$d->c_id}}">Default category</option>
                                        <option value="{{1}}">MARKETING</option>
                                        <option value="{{2}}">TECHNOLOGY</option>
                                        <option value="{{3}}">NEWS</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="7" class="form-control" placeholder="Description">{{$d->description}}</textarea>
                                </div>
                                @error('description')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                                <label class="d-inline float-left " for="facebook">
                                    <span class="fb-button btn btn-primary"><i class="fa fa-facebook"></i></span>
                                </label>
                                <br>
                                <input type="text" name="facebook" class="form-control mt-1" id="facebook" placeholder="Facebook" value="{{$d->facebook}}">

                                <label class="d-inline float-left" for="twitter" >
                                    <span class="tw-button btn btn-close-white" style="color: #0dcaf0"><i class="fa fa-twitter "></i></span>
                                </label>

                                <input type="text"  name="twitter" class="form-control mb-1" id="twitter" placeholder="Twitter" value="{{$d->twitter}}">
                                <br>
                                <label for="image" class="col-form-label">Image</label><br>
                                <input type="file" class="form-control-file" name="image"  id="image" ><br><br>

                                <button type="submit" class=" btn  btn-primary float-left" >Edit</button>


                            </form>
                            @endforeach

                            <a href="{{route('dashboard')}}" class="btn btn-dark float-left ml-1">Back </a>
                        </div>
                    </div>
                    <br>

                </div></div></div></div></div>
</body>
</html>
