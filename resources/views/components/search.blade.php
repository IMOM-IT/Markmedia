<form class="form-inline mr-5" method="get" action="{{route('search.post')}}">
    @csrf
    @error('query')
    <div class="alert-primary">{{$message}}</div>
    @enderror
    <input class="form-control mr-sm-2" type="text" name="query" placeholder="How may I help?">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

</form>
