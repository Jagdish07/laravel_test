@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
             {{Session::get('message')}}
            <div class="card">
                <div class="card-header"><span style="float:left;">Films Listing</span> <span style="float:right;"><a href="{{ route('managefilms') }}">Manage Films</a></span></div>
                <div class="card-body">
                    <div class="row">     
                      @foreach($films as $key => $value)
                          <div class="col-md-4" onclick="view_detal( {{ $value->id }} )">
                            <img src="http://in.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/batti-gul-meter-chalu-et00065101-13-11-2017-12-01-57.jpg" width="250" height="400" />
                            <div>{{ $value->name }}</div>
                            <div>{{ $value->genre }}</div>
                          </div>
                          @endforeach                         
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  function view_detal(id){
    window.location.href= '{{ url('/') }}' + '/film/'+id;
  }
</script>
@endsection
