@extends('layouts.apaa_master')

@section('content')
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary pull-right m-1"
    data-toggle="modal" data-target="#createServiceModel">
        <i class="fa fa-plus" aria-hidden="true"></i> Add Service
    </button>

    <services-table :services='{{ json_encode( $services->items() ) }}'></services-table>

    <div class="d-flex justify-content-center align-content-center">
        <!--  renders pagination link with bootsrap style  -->
        {{ $services->links("pagination::bootstrap-4") }}
    </div>

<!-- launch create service Modal -->
<div class="modal fade" id="createServiceModel" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form  method="POST" action="{{ route('services.store') }}">
                    {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="serviceModalLabel">Add New Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Name of Service</label>
                    <input required type="text" name="service_name" class="form-control" 
                    placeholder="Enter Service Name">
                    <br />
                    <label>Description</label>
                    <textarea required class="form-control" name="description" rows="3" placeholder="Describe you service"></textarea>
                    <br />
                    <label>Category</label>
                    <select reguired class="form-control" name="category_id">
                        
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->category_name}}
                            </option>
                        @endforeach
                    </select>


                </div>
                <div class="modal-footer">
                    <div class="left-side">
                        <button type="button" class="btn btn-default btn-link" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                        <button type="submit" class="btn btn-success btn-link">Add Service</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
