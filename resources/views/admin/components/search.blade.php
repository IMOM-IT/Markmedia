<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="get" action="{{route('search.post')}}">
    <div class="input-group">
        @csrf
        @error('query')
        <div class="alert-primary">{{$message}}</div>
        @enderror
        <input class="form-control" type="query" name="query" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
    </div>
</form>
