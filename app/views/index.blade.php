@extends('base')

@section('content')

<div class="body-wrapper">

	<div class ="p-wrapper">
		<h2>Generate Lorem Ipsum Text!</h2>
		<p><strong>What is Lorem Ipsum?</strong></p>
		<p>Lorem Ipsum is not entirely random Latin text. It originates from a text by Cicero: "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil). Now it's used as a placeholder for text during website development, to give developers, designers, and viewers an idea of what text will actually look like without distrating from the website itself.</p>
		<a href="/lorem-ipsum">Generate some Lorem Ipsum!&#8608;</a>

		<h2>Generate Random Users!</h2>
		<p><strong>What is this for?</strong></p>
		<p>Another tool for enterprising web developers and designers, the Random User generator creates some fake profiles to populate a website while under development, to give an idea of how actual users would fill the site.</p>
		<a href="/random-user">Generate some random users!&#8608;</a>
	</div>

</div>

@stop