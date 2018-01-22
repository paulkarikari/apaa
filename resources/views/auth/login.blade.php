@extends('layouts.auth_master')

@section('content')
<nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="300">
        <div class="container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="/">Apaa</a>
			</div>
	</div>
</nav>
<div class="wrapper">
	<div class="page-header" style="background-image: url('../assets/img/login-image.jpg');">
		<div class="filter"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 ml-auto mr-auto">
					<div class="card card-register">
						<h3 class="title">Welcome</h3>
						<form class="register-form" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
						@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
							<label>Email</label>
							<input type="text" name="email" class="form-control" placeholder="Email">

							<label>Password</label>
							<input type="password" name="password" class="form-control" placeholder="Password">
							<button class="btn btn-danger btn-block btn-round">Log In</button>
							
							<div class="checkbox text-center">
								<label>
									<input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me
								</label>
							</div>
							<p class="text-center">Don't have an account?
							<a href="{{route('register')}}" 
							class="text-info"> 
							<strong>Sign Up</strong></a>
							<b/p>
						</form>
						<div class="forgot">
							{{--  <a href="{{ route('password.request') }}" class="btn btn-link btn-danger">Forgot password?</a>  --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection