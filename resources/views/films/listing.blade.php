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
                        <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Release Date</th>
                                <th>Ticket Price</th>
                                <th>Rating</th>
                                 <th>Action</th>
                              </tr>
                            </thead>
                            <tbody id="filmsListing">
                                @foreach($films as $key => $value)
                              <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ date('Y-m-d', strtotime($value->release_date)) }}</td>
                                <td>{{ $value->ticket_price }}</td>
                                <td>@for($i=1;$i<=$value->rating;$i++) {{ '*' }} @endfor</td>
                                <td><a href="{{ URL::to('film/' . $value->id . '/edit') }}">Edit</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                         </table>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
