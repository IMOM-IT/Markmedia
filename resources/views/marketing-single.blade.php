@extends('layot.app')

@section('content')


    @foreach(\Illuminate\Support\Facades\DB::table('blogs')->where('id','=',$id)->get() as $b)
    <section class="section lb m3rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{url('blog')}}">Blog</a></li>
                                  </ol>
@foreach(\Illuminate\Support\Facades\DB::table('category')->where('id','=',$b->c_id)->get() as $c_id)
                            <span class="color-yellow"><a href="{{url('category/'.$c_id->id)}}" title="">{{$c_id->category}}</a></span>




                        </div><!-- end title -->

                        <div class="single-post-media">
                            <img src="{{asset('storage/'.$b->images)}}" alt="" class="img-fluid">
                        </div><!-- end media -->
                        <div class="blog-title"><strong class="h3 text-wrap text-center">{{$b->title}}</strong>
                        <div class="blog-content">
                            <div class="pp">
                               <p>{{$b->description}}</p>




                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="{{$b->facebook}}" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="{{$b->twitter}}" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                      </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->



                        <hr class="invis1">





                        <hr class="invis1">




{{--                        <div class="custombox clearfix">--}}
{{--                            <h4 class="small-title">Leave a Reply</h4>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <form class="form-wrapper">--}}
{{--                                        <input type="text" class="form-control" placeholder="Your name">--}}
{{--                                        <input type="text" class="form-control" placeholder="Email address">--}}
{{--                                        <input type="text" class="form-control" placeholder="Website">--}}
{{--                                        <textarea class="form-control" placeholder="Your comment"></textarea>--}}
{{--                                        <button type="submit" class="btn btn-primary">Submit Comment</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div><!-- end page-wrapper -->--}}
{{--                </div><!-- end col -->--}}
                            </div></div></div></div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget-no-style">
                            <div class="newsletter-widget text-center align-self-center">
                                <h3>Subscribe Today!</h3>
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <form class="form-inline"  method="post">
                                    <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
                                    <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                                </form>
                            </div><!-- end newsletter -->
                        </div>

                        @include('components.recent_posts')<!-- end row -->
                        @include('components.same_category')
                    </div><!-- end container -->
    </section>
    @endforeach

    @endforeach
@endsection
