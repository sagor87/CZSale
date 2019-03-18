<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from czsale2.sensemedia.cz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Jan 2017 07:35:00 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="...">
		<meta name="keywords" content="...">
		<meta name="author" content="...">
		<title>CZSale - Classified Ads Website</title>
		<link rel="stylesheet" href="{{asset('css/CZSale.css')}}" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container wrapper">
        <div class="logo"><a href="{{route('home')}}"><img src="img/czsale-logo.png" alt="CZSale" title="CZSale" /></a></div>
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#czsale-navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="czsale-navbar">
					<a href="{{route('addClassified')}}" class="btn btn-success navbar-btn navbar-left add-classified-btn" role="button">Add classified</a>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
                            <li><a href="{{route('home')}}">Home page</a></li>
								<li><a href="{{route('addClassified')}}">Add classified</a></li>
								<li><a href="{{route('categories')}}">Category page</a></li>
								<li><a href="{{route('details')}}">Classified detail</a></li>
                            <li><a href="{{route('conditions')}}">Rules & Conditions</a></li>
                            <li><a href="{{route('help')}}">Help (FAQ)</a></li>
								<li><a href="{{route('contact')}}">Contact</a></li>
								<li><a href="signUp.html">Sign Up</a></li>
							</ul>
						</li>
						<li><a href="{{route('help')}}">Help</a></li>
						<li><a href="signUp.html">Sign Up</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
							<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
								<li>
									<div class="row">
										<div class="col-md-12">
											<form class="form" role="form" method="post" action="http://czsale2.sensemedia.cz/login" accept-charset="UTF-8" id="login-nav">
												<div class="form-group">
													<label class="sr-only" for="exampleInputEmail2">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
												</div>
												<div class="form-group">
													<label class="sr-only" for="exampleInputPassword2">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox"> Remember me
													</label>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-success btn-block">Sign in</button>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="form-group">
										<button onclick="location.href='#'" class="btn btn-default btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</button>
										<button onclick="location.href='#'" class="btn btn-default btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i> Sign in with Twitter</button>
										<button onclick="location.href='#'" class="btn btn-default btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i> Sign in with Google</button>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
