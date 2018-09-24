@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Films Listing</div>
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
                              </tr>
                            </thead>
                            <tbody id="filmsListing">
                              <tr>
                                <td>1</td>
                                <td>Film 1</td>
                                <td>2018-09-24</td>
                                <td>$20</td>
                                <td>****</td>
                              </tr>
                            </tbody>
                         </table>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
