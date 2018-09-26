@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('film.update') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Film Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $film->name }}" required autofocus>


                                 <input id="id" type="hidden" name="id" value="{{ $film->id }}" >

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $film->description }}" required>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="release_date" class="col-md-4 col-form-label text-md-right">{{ __('Release Date') }}</label>

                            <div class="col-md-6">
                                <input id="release_date" type="date" class="form-control{{ $errors->has('release_date') ? ' is-invalid' : '' }}" name="release_date" value="{{ date('m/d/Y', strtotime($film->release_date)) }}" required>

                                @if ($errors->has('release_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('release_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Rating') }}</label>

                            <div class="col-md-6">
                                <select id="rating" type="text" class="form-control{{ $errors->has('rating') ? ' is-invalid' : '' }}" name="rating">
                                    <?php
                                    $rateOne = '';
                                    $ratesecond = '';
                                    $rateThird = '';
                                    $rateFourth= '';
                                    $rateFive = '';
                                    if($film->rating == '1'){
                                        $rateOne = 'selected="selected"';
                                    } else if($film->rating == '2'){
                                        $ratesecond = 'selected="selected"';
                                    } else if($film->rating == '3'){
                                        $rateThird = 'selected="selected"';
                                    } else if($film->rating == '4'){
                                        $rateFourth = 'selected="selected"';
                                    }  else {
                                        $rateFive = 'selected="selected"';
                                    }
                                    ?>
                                    <option {{ $rateOne }} value="1"> 1</option>
                                    <option {{ $ratesecond }} value="2">2</option>
                                    <option {{ $rateThird }} value="3">3</option>
                                    <option {{ $rateFourth }} value="4">4</option>
                                    <option {{ $rateFive }} value="5">5</option>
                                </select>

                                @if ($errors->has('rating'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rating') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rating" class="col-md-4 col-form-label text-md-right">{{ __('Ticket Price') }}</label>

                            <div class="col-md-6">
                                <input id="ticket_price" type="text" class="form-control{{ $errors->has('ticket_price') ? ' is-invalid' : '' }}" name="ticket_price" value="{{ $film->ticket_price }}" required>

                                @if ($errors->has('ticket_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ticket_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $film->country }}" required>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>

                            <div class="col-md-6">
                                <input id="genre" type="text" class="form-control{{ $errors->has('genre') ? ' is-invalid' : '' }}" name="genre" value="{{ $film->genre }}" required>

                                @if ($errors->has('genre'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
