<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container">
		<header><h1>@yield('title', 'shareitbaby.io')</h1></header>

		@if(Session::has('success'))
			<div class="alert alert-success">{{ Session::get('success') }}</div>
		@endif

		<nav>
			<ul>
				<li>
					<a href="{{ route('listLink') }}">
					listLink</a>
				</li>
				<li>
					<a href="{{ 
					route('addLink') }}">
					addLink</a>
				</li>
			</ul>
		</nav>	

	</div>
</body>
</html>