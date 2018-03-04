@extends('layouts.auth_master')

@section('content')
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="300">
        <div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="/">Apaa</a>
	            <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
					<span class="navbar-toggler-bar"></span>
	            </button>
			</div>
	        <div class="collapse navbar-collapse" id="navbarToggler">
		<ul class="navbar-nav ml-auto">
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
			
		</ul>
		</div>
	</div>
</nav>
	
<div class="page-header">
	<div class="filter"></div>
	<div class="container">
		<div class="motto text-center">
			<h1>Apaa</h1>
			<h3>Connecting over 1 million Skilled labours to jobs</h3>
			<br />
			<form class="form-inline col justify-content-center"
					method="POST" action="{{route('search')}}">
					{{csrf_field()}}
					<input type="text" name="search" id="landing-input" class="form-control col-md-6 col-12" placeholder="Search for Services"> &nbsp;
					<button class="btn btn-success col-md-2 col-12">
						<strong>
							<i class="fa fa-search"> </i>Search </strong>
					</button>
			</form>


		</div>
	</div>
</div>
<div class="main">
	<div class="section text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<h2 class="title">How It Works</h2>
					<h5 class="description">
						<strong>Apaa</strong> is a platform that helps over 1 million skilled labours get access to job opportunities.
					</h5>
					<br>
					{{--  <a href="#paper-kit" class="btn btn-danger btn-round">See Details</a>  --}}
				</div>
			</div>
			<br/>
			<br/>
			<div class="row">
				<div class="col-md-3">
					<div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-settings"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Service Provider</h4>
							<p class="description">
								Skilled labour aka service providers.Signs up and adds services they provide
							</p>
							<a href="#" class="btn btn-link btn-danger">1</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-single-02"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Clients</h4>
							<p>Clients search the platform to find service providers</p>
							<br>
							<a href="#pkp" class="btn btn-link btn-danger">2</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-chat-33"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Connect</h4>
							<p>
								Clients discovers service providers and contacts the provider that best suits their needs
							</p>
							<a href="#pkp" class="btn btn-link btn-danger">3</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-favourite-28"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Reviews</h4>
							<p>Clients can optionally provide reviews of the experiences they hard with service providers</p>
							<a href="#pkp" class="btn btn-link btn-danger">4</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="section section-dark text-center">
		<div class="container">
			<h2 class="title">Testimonials</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="card card-profile card-plain">
						<div class="card-avatar">
							<a href="#avatar">
								<img src="../assets/images/mc_dapaah.jpg" alt="...">
							</a>
						</div>
						<div class="card-body">
							<a href="#paper-kit">
								<div class="author">
									<h4 class="card-title">Micheal Dapaah</h4>
									<h6 class="card-category">User</h6>
								</div>
							</a>
							<p class="card-description text-center">
								I was able to find the best services when i needed masons, capenters, and painters for my new apartment.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card card-profile card-plain">
						<div class="card-avatar">
							<a href="#avatar">
								<img src="../assets/images/yvonne-nelson.jpg" alt="...">
							</a>
						</div>
						<div class="card-body">
							<a href="#paper-kit">
								<div class="author">
									<h4 class="card-title">Yvonne Nelson</h4>
									<h6 class="card-category">Tailor</h6>
								</div>
							</a>
							<p class="card-description text-center">
								After signing up on Apaa. I keep getting continous flow of income due to increasing number of clients that contact me for
								my services. Apaa is a life saver.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card card-profile card-plain">
						<div class="card-avatar">
							<a href="#avatar">
								<img src="../assets/images/carpenter.jpg" alt="...">
							</a>
						</div>
						<div class="card-body">
							<a href="#paper-kit">
								<div class="author">
									<h4 class="card-title">Kofi Brokeman</h4>
									<h6 class="card-category">Carpenter</h6>
								</div>
							</a>
							<p class="card-description text-center">
								If you'v been in my line of work i bet you know how it feels like to be home for days without being contacted for jobs because
								most people dont know you or dont even know what you do. Apaa helped me get noticed by clients and hopefully keep
								getting job offers.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section landing-section">
		<div class="container">
			<h2 class="title text-center">Categories</h2>
			<div class="row">
				
				<div class="col-md-4" style="height:100px;background-color:#AB47BC;">
					<p class="text-center" style="color:white;padding-top:40px;"> 
						<a style="color:white;font-size:20px; font-weight:400;" 
						href="{{route('search.category',['categoryId' => 6])}}">
							I.T
						</a>
					</p>
				</div>
				<div class="col-md-4" style="height:100px;background-color:#42A5F5;">
					<p class="text-center" style="color:white;padding-top:40px;font-size:20px; font-weight:400;">
						<a style="color:white;font-size:20px; font-weight:400;" 
							href="{{route('search.category',['categoryId' => 2])}}">
							Arts
						</a>
					</p>
				</div>
				<div class="col-md-4" style="height:100px;background-color:#FFA726;">
					<p class="text-center" style="color:white;padding-top:40px;font-size:20px; font-weight:400;">
						<a style="color:white;font-size:20px; font-weight:400;"
						href="{{route('search.category',['categoryId' =>3 ])}}">
						Business
						</a>
					</p>
				</div>
			</div>
             <br />
			<div class="row">
				<div class="col-md-4" style="height:100px;background-color:#FF7043;">
					<p class="text-center" style="color:white;padding-top:40px;font-size:20px; font-weight:400;">
						<a style="color:white;font-size:20px; font-weight:400;"
							href="{{route('search.category',['categoryId' => 4])}}">
							Health
						</a>
					</p>
				</div>
				<div class="col-md-4" style="height:100px;background-color:#78909C;">
					<p class="text-center" style="color:white;padding-top:40px;font-size:20px; font-weight:400;">
						<a style="color:white;font-size:20px; font-weight:400;"
						href="{{route('search.category',['categoryId' => 5])}}">
							Education
						</a>
					</p>
				</div>
				<div class="col-md-4" style="height:100px;background-color:#8D6E63;">
					<p class="text-center" style="color:white;padding-top:40px;font-size:20px; font-weight:400;">
						<a style="color:white;font-size:20px; font-weight:400;"
						href="{{route('search.category',['categoryId' => 1])}}">
						 Construction
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection