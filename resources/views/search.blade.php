@extends('layouts.apaa_master')

@section('content')
    <div class="row" style="min-height: 700px;">
        <div class="col-2 hidden-sm-down">
            <h4>Categories</h4>
            <ul >
                @foreach ($categories as $category)                  
                    <li class="nav-item">
                        <a class="nav-link" href="#pk">{{ $category->category_name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col">
            @foreach ($services as $service)            
                <div class="col col-md-8 p-2 m-3" style="border: solid 1px #DDDDDD;">
                    <div class="card-block">
                        <h5 class="card-title">
                            <a href="#" style="font-weight:500;">
                            {{$service->service_name}}
                            </a>
                        </h5>
                        <hr>
                        <p class="card-text">
                            {{$service->description}}
                        </p>
                        <h6 class="card-subtitle mb-2 text-muted">by {{ $service->user->name }}</h6>
                        <a href="#" class="card-link text-muted"><i class="fa fa-comments-o fa-2x"></i> 
                            &nbsp;&nbsp;&nbsp;<strong>comments (40)</strong></a>
                            <a href="#" class="card-link text-muted"><i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;likes (50)</a>
                        </div>
                </div>
             @endforeach
             <div class="d-flex justify-content-center align-content-center col-md-8 col">
                <!--  renders pagination link with bootsrap style  -->
                {{ $services->links("pagination::bootstrap-4") }}
             </div>
        </div>
    </div>
@endsection