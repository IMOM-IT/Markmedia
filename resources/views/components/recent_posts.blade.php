<div class="widget">
    <h2 class="widget-title">Recent Posts</h2>
    <div class="blog-list-widget">
        <div class="list-group">
            @foreach(\Illuminate\Support\Facades\DB::table('blogs')->where('created_at','>=',$today = date("Y-m-d"))->get() as $r)


                <a href="{{route('show',['id'=>$r->id])}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="{{asset('storage/'.$r->images)}}" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">{{$r->title}}</h5>
                        <small>{{$r->created_at}}</small>
                    </div>
                </a>
            @endforeach
                @if(!isset($r))
                    <h5 class="text-gray-dark text-center">No recent posts</h5>
                @endif

            {{--                        <div id="" class="widget">--}}
            {{--                            <h2 class="widget-title">Advertising</h2>--}}
            {{--                            <div class="banner-spot clearfix">--}}
            {{--                                <div class="banner-img">--}}
            {{--                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">--}}
            {{--                                </div><!-- end banner-img -->--}}
            {{--                            </div><!-- end banner -->--}}
            {{--                        </div><!-- end widget -->--}}

            {{--                        <div class="widget">--}}
            {{--                            <h2 class="widget-title">Instagram Feed</h2>--}}
            {{--                            <div class="instagram-wrapper clearfix">--}}
            {{--                                <a class="" href="#"><img src="{{asset('upload/small_09.jpg')}}" alt="" class="img-fluid"></a>--}}
            {{--                                <a href="#"><img src="{{asset('upload/small_01.jpg')}}" alt="" class="img-fluid"></a>--}}
            {{--                                <a href="#"><img src="{{asset('upload/small_02.jpg')}}" alt="" class="img-fluid"></a>--}}
            {{--                                <a href="#"><img src="{{asset('upload/small_03.jpg')}}" alt="" class="img-fluid"></a>--}}
            {{--                                <a href="#"><img src="{{asset('upload/small_04.jpg')}}" alt="" class="img-fluid"></a>--}}
            {{--                                <a href="#"><img src="{{asset('upload/small_04.jpg')}}" alt="" class="img-fluid"></a>--}}
            {{--                                <a href="#"><img src="upload/small_06.jpg" alt="" class="img-fluid"></a>--}}
            {{--                                <a href="#"><img src="upload/small_07.jpg" alt="" class="img-fluid"></a>--}}
            {{--                                <a href="#"><img src="upload/small_08.jpg" alt="" class="img-fluid"></a>--}}
            {{--                            </div><!-- end Instagram wrapper -->--}}
            {{--                        </div><!-- end widget -->--}}

            {{--                        <div class="widget">--}}
            {{--                            <h2 class="widget-title">Popular Categories</h2>--}}
            {{--                            <div class="link-widget">--}}
            {{--                                <ul>--}}
            {{--                                    <li><a href="#">Marketing <span>(21)</span></a></li>--}}
            {{--                                    <li><a href="#">SEO Service <span>(15)</span></a></li>--}}
            {{--                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>--}}
            {{--                                    <li><a href="#">Make Money <span>(22)</span></a></li>--}}
            {{--                                    <li><a href="#">Blogging <span>(66)</span></a></li>--}}
            {{--                                    <li><a href="#">Entertaintment <span>(11)</span></a></li>--}}
            {{--                                    <li><a href="#">Video Tuts <span>(87)</span></a></li>--}}
            {{--                                </ul>--}}
            {{--                            </div><!-- end link-widget -->--}}
            {{--                        </div><!-- end widget -->--}}
        </div><!-- end sidebar -->
    </div><!-- end col -->
</div>
