@extends('layouts.apaa_master')

@section('content')
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary pull-right m-1"
    data-toggle="modal" data-target="#createServiceModel">
     <i class="fa fa-plus" aria-hidden="true"></i> Add Service
  </button>
<services-table :services='{{ json_encode( $services->items() ) }}'></services-table>
<div class="d-flex justify-content-center align-content-center">
    {{ $services->links("pagination::bootstrap-4") }}
</div>

<!-- launch create service Modal -->
<div class="modal fade" id="createServiceModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Create Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
            </div>
            <div class="modal-footer">
                <div class="left-side">
                    <button type="button" class="btn btn-default btn-link" data-dismiss="modal">Never mind</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="button" class="btn btn-danger btn-link">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
