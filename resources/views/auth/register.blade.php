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
						<h3 class="title">SIGN UP</h3>
						<form class="register-form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name">
                            
							<label>Email</label>
							<input type="text" class="form-control" placeholder="Email">

							<label>Password</label>
							<input type="password" class="form-control" placeholder="Password">
							<button class="btn btn-danger btn-block btn-round">SIGN UP</button>
                        </form>
                        <br>
                        <p class="text-center">Already have an account?
							<a href="{{route('login')}}" 
							class="text-info"> 
							<strong>Sign In</strong></a>
						</p>
						<div class="forgot">
							<a href="{{ route('password.request') }}" class="btn btn-link btn-danger">Forgot password?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection