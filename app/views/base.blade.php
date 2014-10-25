<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Developer's Best Friend')</title>
	<link rel="stylesheet" href="/public/d-b-f.css" type="text/css">

	@yield('head')

</head>
<body>
	<div id="top-wrapper">
		<h1>Developer's Best Friend</h1>
	</div>
	@yield('content')

	@yield('body')
	<small id="footer"><a href="https://github.com/emitang/p3">View GitHub</a></small>
</body>