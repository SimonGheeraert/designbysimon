<!DOCTYPE html>
<html lang="en">

<head>
    <title>Design by Simon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    {!! HTML::style('simon/stylesheets/screen.css') !!} 
    {!! HTML::style('simon/stylesheets/owl.carousel.css') !!} 
    {!! HTML::style('simon/stylesheets/owl.custom.css') !!}
	{!! HTML::script('simon/js/TweenMax.min.js') !!}
	{!! HTML::script('simon/js/jquery-1.11.2.min.js') !!}
	{!! HTML::script('simon/js/ScrollMagic.js') !!}
	{!! HTML::script('simon/js/plugins/animation.gsap.js') !!}

	
</head>

<body>

@include('layout.content')

    <!-- Footer -->
@include('layout.footer')