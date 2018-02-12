@extends('app')
@section('content')
	<h1>About Me {{$first}} {{$last}}</h1>
	@if(count($programming))
	<h3>Programming Languages I Like</h3>
	<ul>
		@foreach($programming as $languages)
		<li>{{$languages}}</li>
		@endforeach
	</ul>
	@endif
	<p>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	</p>
@endsection	

