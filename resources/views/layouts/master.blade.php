<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	@yield('script')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.12/angular.min.js"></script>

<script src="js/app.js"></script>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style type="text/css">
	.col-md-12, .control-label
{
	text-align: left !important;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">J-second</a>
		<ul class="nav navbar-nav">
			<li class="active">
				<a href="/admin">Home</a>
			</li>
			<li>
				<a href="/admin">Posts</a>
			</li>
			<li>
				<a href="#">Pages</a>
			</li>
			<li>
				<a href="{{url('/logout')}}">Logout</a>
			</li>
		</ul>
	</div>
</nav>
		@yield('content')

</body>
</html>