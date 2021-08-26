@extends('layot.app')
@section('content')


        <div class="page-title db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        @if(\Illuminate\Support\Facades\Session::has('success'))
                            <div class="alert alert-primary">{{\Illuminate\Support\Facades\Session::get('success')}}</div>
                        @endif
                        <h2>Contact <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb">
            <div class="container">
                <div class="row">
                   @include('components.email')

                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h4>Who we are</h4>
                                    <p>Markedia is a personal blog for handcrafted, cameramade photography content, fashion styles from independent creatives around the world.</p>
                                </div>

                                <div class="col-lg-6">
                                    <h4>How we help?</h4>
                                    <p>If you’d like to write for us, <a href="#">advertise with us</a> or just say hello, fill out the form below and we’ll get back to you as soon as possible.</p>
                                </div>
                            </div><!-- end row -->

                            <hr class="invis">

                            <div class="row">
                                <div class="col-lg-12">

                                    <form class="form-wrapper" method="post" action="{{route('contact_message')}}">
                                        @csrf
                                    <h4>Contact form</h4>
                                        <input type="text" class="form-control" placeholder="Your name" name="name">
                                        @error('name')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <input type="email" class="form-control" placeholder="Email address" name="email">
                                        @error('email')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <input type="text" class="form-control" placeholder="Phone" name="phone">
                                        @error('phone')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror

                                        <textarea class="form-control" placeholder="Your message" name="message_content"></textarea>
                                        @error('message_content')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                        <button type="submit" class="btn btn-primary">Send <i class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@endsection
