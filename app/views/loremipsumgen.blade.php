@extends('base')

@section('title')

		Have Some Lorem Ipsum

@stop

@section('content')

<div class="body-wrapper">

	<div class="p-wrapper">

		<a href="/">&#8607;Go home!</a><br>
		<a href="/lorem-ipsum">&#8606;Go back!</a>
		<br><br>
		<?php $generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs($num); ?>
		{{ implode('<p>', $paragraphs) }}
	</div>

</div>

@stop