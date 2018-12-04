<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>NRS - Miguel Ruiz</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">

	@yield('head')
</head>

<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-8 col-sm-3">
					<img src="/img/logo.png">
				</div>
				<div class="col-4 col-sm-9">
					<nav>
						<ul class="d-none d-sm-block">
							<li><a href="/usuarios">ADMINISTRAR USUARIOS</a></li>
							<li><a href="/reservas">HACER RESERVA</a></li>
						</ul>
						<ul class="d-block d-sm-none mnuMobile">
							<li class="m-0"><a href="/usuarios"><i class="fa fa-user-o"></i></a></li>
							<li><a href="/reservas"><i class="fa fa-check-square-o"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

@yield('content')
</body>

<script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/js/script.js"></script>




@yield('footer')