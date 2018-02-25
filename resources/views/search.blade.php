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
            
            @foreach ($services as $service)
                <service-component :service='{{ json_encode($service)}}'
                :csrf-token='"{{ csrf_token() }}"'>
                </service-component>
             @endforeach
             <div class="d-flex justify-content-center align-content-center col-md-8 col">
                <!--  renders pagination link with bootsrap style  -->
                {{ $services->links("pagination::bootstrap-4") }}
             </div>
        </div>
    </div>
@endsection