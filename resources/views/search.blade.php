@extends('layouts.apaa_master')

@section('content')
    <div class="row" style="min-height: 700px;">
        <div class="col-2 hidden-sm-down">
            <h4>Categories</h4>
            <ul >
                @foreach ($categories as $category)                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('search.category',['categoryId' => $category->id])}}">
                            {{ $category->category_name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col">
            @foreach ($services->items() as $service)
            <service-component :service='{{ json_encode($service)}}'
            :csrf-token='"{{ csrf_token() }}"' 
            :user='{{ json_encode(auth()->user()) }}'>
                </service-component>
             @endforeach
             <div class="d-flex justify-content-center align-content-center col-md-8 col">
                <!--  renders pagination link with bootsrap style  -->
                {{ $services->links("pagination::bootstrap-4") }}
             </div>
        </div>
    </div>

<!-- launch request service re Modal -->
<div class="modal fade" id="requestServiceModal" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form  method="POST" action="{{ route('new-services.store') }}">
                    {{ csrf_field() }}
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="serviceModalLabel">
                        New Service Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @if(Auth::check())  
                <input type="hidden" name="client_name" value="{{Auth::user()->name}}">
                <input type="hidden" name="client_number" 
                value="{{Auth::user()->phone}}">
            @endif
                <div class="modal-body">
                    <label>Name of Service</label>
                    <input required type="text" name="service_name" class="form-control" 
                    placeholder="Enter Service Name">
                    <br />
                    <label>Description</label>
                    <textarea required class="form-control" name="description" rows="3" placeholder="Describe you service"></textarea>
                    <br />
                    <label>Category</label>
                    <select reguired class="form-control" name="category_name">
                        
                        @foreach ($categories as $category)
                            <option value="{{$category->category_name}}">
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
                        <button type="submit" class="btn btn-success btn-link">Request Service</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection