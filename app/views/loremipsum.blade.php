@extends('base')

@section('title')

		Lorem Ipsum Generator
		
@stop

@section('content')

<div class="body-wrapper">
	<h3><em>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ...,"</em></h3>
	<h4><em>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</em></h4>
	
	<a href="/">&#8606;Go back!</a><br><br>

	{{ Form::open(array('url' => '/lorem-ipsum-gen')) }}

		{{ Form::label('paras', 'How many paragraphs?') }}
		{{ Form::selectRange('paras', 1, 10) }}

		{{ Form::submit('Go!') }}

	{{ Form::close() }}
</div>

@stop