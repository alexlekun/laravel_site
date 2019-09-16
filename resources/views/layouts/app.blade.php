<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Портфолио</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
</head>
<body>
	@include('components.navbar')
	@yield('content')
</body>
</html>