@extends('layout.master')

@section('content')

	<div id="main_wrapper">
		<div id="icon_thanks">
			<a href="#"><img src="{{asset('img/icon_thanks.svg')}}"></a>
		</div>
		<div id="thanks">
			<h1>Thanks for contacting me!<br>I will get back to you as soon as possible.</h1>
		</div>
		
		<div id="count_down">
			<h2 id="redirect"></h2>
		</div>


@stop