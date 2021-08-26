<div class="widget">
    <h2 class="widget-title">Same post </h2>
    <div class="instagram-wrapper clearfix">
        @foreach(\Illuminate\Support\Facades\DB::table('blogs')->where('c_id','=',$b->c_id)->get() as $cat)

        <a href="{{route('show',['id'=>$cat->id])}}"><img style="width: 85px;height: 82px" src="{{asset('storage/'.$cat->images)}}" alt="" class="img-fluid"></a>
        @endforeach
    </div><!-- end Instagram wrapper -->
</div><!-- end widget -->
