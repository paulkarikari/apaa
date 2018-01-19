<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Apaa- Matching Services To Demand</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

	<!-- core CSS -->
	<link href="/css/all.css" rel="stylesheet" />
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top navbar-default">
		<div class="container">
			<div class="navbar-translate">
                <a class="navbar-brand" href="/">Apaa</a>

                

				<button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler"
				 aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
                </button>
                
                <button id="hide-search" class="hidden-md-up p-1 btn btn-neutral navbar-toggler-right" type="button">
                 <i class="fa fa-search"></i>
				</button>
            </div>
            
            
                
                <input type="text" class="form-control hidden-sm-down" placeholder="Search for Services" />
                
                <button class="btn btn-success hidden-sm-down">
                    <strong><i class="fa fa-search"></i>Search</strong>
                </button>
                
               <div id="sm-search" class="col m-1 mb-2 hidden-md-up">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="Search for Services">
                        {{--  <button class="btn btn-success col-2">
                            <strong><i class="fa fa-search"></i></strong>
                        </button>  --}}
                    </form>
               </div>
                
            
			    
			<div class="collapse navbar-collapse" id="navbarToggler">
				<ul class="navbar-nav ml-auto">
					@if (!Auth::check())
						<li class="nav-item">
						<a href="{{route('login')}}" class="nav-link">
							SIGN IN
						</a>
					</li>
					&nbsp;
					<li class="nav-item">
						<a href="{{route('register')}}" class="btn btn-danger btn-round">
							SIGN UP
						</a>
					</li>
					@endif
					
					<div class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#pk" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="nc-icon nc-single-02" aria-hidden="true"></i>
							{{Auth::user()->name}}
						</a>
						<ul class="dropdown-menu dropdown-menu-right dropdown-danger">
							<li class="dropdown-header" href="#pk">Options</li>
							<a class="dropdown-item" href="#pk">Profile</a>
							@if (Auth::user()->user_type == Config::get('constants.SERVICE_PROVIDER'))
								<a class="dropdown-item" href="{{route('services.show',['id' => Auth::user()->id])}}">Services</a>
							@endif
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
						</ul>
                    </div>

				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="margin-top: 80px;">
		@yield('content')
	</div>

	<footer class="footer section-dark">
		<div class="container">
			<div class="row">
				<div class="credits ml-auto">
					<span class="copyright">
						©
						<script>
							document.write(new Date().getFullYear())
						</script>, made with
						<i class="fa fa-heart heart"></i> by
						<a href="https://twitter.com/KofiCodes" target="blank">@koficodes</a>
					</span>
				</div>
			</div>
		</div>
	</footer>
</body>

<!-- Core JS Files -->
<script src="/js/app.js" type="text/javascript"></script>
<script src="/js/all.js" type="text/javascript"></script>


</html>