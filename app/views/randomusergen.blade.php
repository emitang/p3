@extends('base')

@section('title')

		Have Some Random Users
		
@stop

@section('content')

<div class="body-wrapper">

	<div class="p-wrapper">

		<a href="/">&#8607;Go home!</a><br>
		<a href="/random-user">&#8606;Go back!</a>
		<br><br>
		<?php $faker = Faker\Factory::create(); ?>
		@for ($i = 1; $i <= $users['users']; $i++)
			<p><strong>User {{ $i }}</strong><br>
			Name: {{ $faker->name }}<br>
			@if ($users['address'] == '1')
				Address: {{ $faker->address }}<br>
			@endif
			@if ($users['bday'] == '1')
				Birthday: {{ $faker->date($format = 'm-d-Y', $max = '-18 years') }}<br>
			@endif
			@if ($users['email'] == '1')
				Address: {{ $faker->email }}<br>
			@endif
			@if ($users['phone'] == '1')
				Phone: {{ $faker->phoneNumber }}<br>
			@endif
			@if ($users['profile'] == '1')
				Profile: {{ $faker->text }}<br>
			@endif
			</p>
		@endfor
	</div>

</div>

@stop