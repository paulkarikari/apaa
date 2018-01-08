@extends('layouts.apaa_master')

@section('content')
    <div class="row">
        <div class="col-2 hidden-sm-down">
            <h4>Categories</h4>
            <ul >
                <li class="nav-item">
                    <a class="nav-link" href="#pk">Capentry</a>
                </li>
                <li>
                    <a class="nav-link" href="#pk">Fashion</a>
                </li>
                <li> <a class="nav-link" href="#pk">Construction</a></li>
                <li><a class="nav-link" href="#pk">Mechanics</a></li>
                <li><a class="nav-link" href="#pk">Plumbing</a></li>
                <li><a class="nav-link" href="#pk">Catering</a></li>
                <li><a class="nav-link" href="#pk">Electricals</a></li>
                <li><a class="nav-link" href="#pk">Metal Works</a></li>
                <li><a class="nav-link" href="#pk">Painter</a></li>
                <li><a class="nav-link" href="#pk">Labourer</a></li>
            </ul>
        </div>
        <div class="col">
            <div class="col col-md-8 p-2 m-3" style="border: solid 1px #DDDDDD;">
                <div class="card-block">
                    <h5 class="card-title"><a href="#" style="font-weight:500;">Capentry</a></h5>
                    <hr>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <h6 class="card-subtitle mb-2 text-muted">by Kofi Nkwanu</h6>
                    <a href="#" class="card-link text-muted"><i class="fa fa-comments-o fa-2x"></i> 
                        &nbsp;&nbsp;&nbsp;<strong>comments (40)</strong></a>
                    <a href="#" class="card-link text-muted"><i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;likes (50)</a>
                </div>
            </div>
            
            
            
        </div>
    </div>
@endsection