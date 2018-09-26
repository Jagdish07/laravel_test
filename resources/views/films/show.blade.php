@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
             {{Session::get('message')}}
            <div class="card">
                <div class="card-header"><span style="float:left;">Films Listing</span> <span style="float:right;"><a href="{{ route('film.create') }}">Add Film</a></span></div>
                <div class="card-body">
                    <div class="table-responsive">          
                        <div class="row">
                          <div class="col-md-4">
                            <img src="http://in.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/batti-gul-meter-chalu-et00065101-13-11-2017-12-01-57.jpg" width="250" height="300" />
                          </div>
                          <div class="col-md-8">
                            <div class="row">
                              <div class=col-md-3>
                                Rating :  @for($i=1;$i<=$film->rating;$i++) * @endfor
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                Name : {{ $film->name }}
                              </div>
                              <div class="col-md-7">
                                Release Date: {{ $film->release_date }}
                              </div>
                            </div>
                             <div class="row">
                              <div class="col-md-3">
                                Price : {{ $film->ticket_price }}
                              </div>
                              <div class="col-md-7">
                                Genre : {{ $film->genre }}
                              </div>
                            </div>
                             <div class="row">
                              <div class=col-md-12>
                                Post Your Comments:
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                Name : 
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="" required autofocus>
                              </div>
                              <div class="col-md-7">
                                Comment : 
                                <input id="comment" type="text" class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}" name="comment" value="" required autofocus>
                              </div>
                            </div>
                             <div class="row">
                              <div class="col-md-12">
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Post') }}
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
