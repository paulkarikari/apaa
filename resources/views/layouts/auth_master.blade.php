<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Apaa-  Matching Services To Demand</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    
    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    
    <!-- core CSS -->
	<link href="/css/all.css" rel="stylesheet" />
</head>

<body>

   @yield('content')

	<footer class="footer section-dark">
		<div class="container">
			<div class="row">
				<div class="credits ml-auto">
					<span class="copyright">
                        © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="https://twitter.com/KofiCodes" target="blank">@koficodes</a>  
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
