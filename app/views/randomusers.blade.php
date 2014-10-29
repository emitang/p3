@extends('base')

@section('title')

		Random User Generator

@stop

@section('content')

<div class="body-wrapper">
	<h3><em>"Hi, My Name Is..."</em></h3>

	<a href="/">&#8606;Go back!</a><br>

	<h2>So what'll it be?</h2>
	<div id="form-wrapper">
		{{ Form::open(array('url' => '/random-user-gen')) }}

			{{ Form::label('users', 'How many users?') }}
			{{ Form::selectRange('users', 1, 10) }}
			<br>
			{{ Form::label('address', 'Address?') }}
			{{ Form::hidden('address', 0) }}
			{{ Form::checkbox('address', 1) }}
			<br>
			{{ Form::label('bday', 'Birthday?') }}
			{{ Form::hidden('bday', 0) }}
			{{ Form::checkbox('bday', 1) }}
			<br>
			{{ Form::label('email', 'Email?') }}
			{{ Form::hidden('email', 0) }}
			{{ Form::checkbox('email', 1) }}
			<br>
			{{ Form::label('phone', 'Phone Number?') }}
			{{ Form::hidden('phone', 0) }}
			{{ Form::checkbox('phone', 1) }}
			<br>
			{{ Form::label('profile', 'Profile?') }}
			{{ Form::hidden('profile', 0) }}
			{{ Form::checkbox('profile', 1) }}
			<br>
			{{ Form::submit('Go!') }}

		{{ Form::close() }}
	</div>
</div>

@stop