<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Developer\'s Best Friend')</title>
	<link rel='stylesheet' href='css/p3.css' type='text/css' />

	@yield('head')

</head>
<body>
	@yield('content')

	@yield('body')


	<div id='top-wrapper'></div>
	<a id="title-link" href="/"><h1 id='title'>@yield('title','Developer\'s Best Friend')</h1></a>
	<p id="footer"><a href="https://github.com/emitang/p3">View GitHub&#8608;</a></p>
</body>
</html>