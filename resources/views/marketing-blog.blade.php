@extends('layot.app')
@section('content')
    <section class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-custom-build">
                            @foreach($db as $p)
                                <div class="blog-box wow fadeIn">

                                    <div class="post-media">
                                        <a href="{{route('show',['id'=>$p->id])}}" title="">
                                            <img src="{{asset('storage/'.$p->images)}}" alt="blog_image" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>  <!-- end post-sharing -->

                                        <h4><a href="{{route('show',['id'=>$p->id])}}" title="">{{$p->title}}</a></h4>
                                        <p>{{$p->description}}.</p>
                                        <small><a href="{{url('/category/'.$p->c_id)}}" title=""></a></small>
                                        <small><a href="{{route('show',['id'=>$p->id])}}" title="">{{$p->created_at}}</a></small>
                                    </div>
                                    <!-- end meta -->
                                </div>
                                <!-- end blog-box -->
                                <hr class="invis">
                            @endforeach
                        </div>
                    </div>
                    <hr class="invis">
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    {{ $db->links() }}
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                    @include('components.recent_posts')
                    @include('components.advertising')
                    <!-- end widget -->

                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>

        </div>
    </section>
    <div class="dmtop"></div>








@endsection
