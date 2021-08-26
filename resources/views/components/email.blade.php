<div class="col-lg-4 col-md-12">

    <div class="newsletter-widget text-center align-self-center">

        <h3>Subscribe Today!</h3>
        @if(\Illuminate\Support\Facades\Session::has('failure'))
            <div class="alert alert-primary"> {{\Illuminate\Support\Facades\Session::get('failure')}}</div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-primary"> {{\Illuminate\Support\Facades\Session::get('success')}}</div>
        @endif
        <p>Subscribe to our weekly Newsletter and receive updates via email.</p>

        <form class="form-inline" method="post" action="{{route('subscribing')}}">
            @csrf
            <input type="text" name="email" placeholder="Add your email here.." required class="form-control" />
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
        </form>
    </div>
    <!-- end newsletter -->
</div>
