		<div id="footer">
			<hr>
			<div id="social">
				<a href="https://dribbble.com/simongheeraert" class="social_icons"><img src="{{asset('img/dribbble.svg')}}"></a>
				<a href="https://www.facebook.com/simon.gheeraert.39" class="social_icons"><img src="{{asset('img/facebook.svg')}}"></a>
				<a href="https://www.linkedin.com/in/simongheeraert" class="social_icons"><img src="{{asset('img/linkedin.svg')}}"></a>
				<a href="https://instagram.com/design.by.simon/" class="social_icons"><img src="{{asset('img/instagram.svg')}}"></a>
				<a href="https://www.pinterest.com/sgheeraert/" class="social_icons"><img src="{{asset('img/pinterest.svg')}}"></a>
				<a href="https://soundcloud.com/simon-gheeraert" class="social_icons"><img src="{{asset('img/soundcloud.svg')}}"></a>
			</div>
			<div id="built_by_box">
				<small>simongheeraert&#64;hotmail.com<br>Simon Gheeraert. All rights reserved. <br> Copyright &copy; 2015 <br> </small>
			</div>
		</div>
	</div>

	{!! HTML::script('simon/js/rotate.js') !!}
	{!! HTML::script('simon/js/scrolldown.js') !!}
	{!! HTML::script('simon/js/iconAnimate.js') !!}
	{!! HTML::script('simon/js/revealContact.js') !!}
	{!! HTML::script('simon/js/owl.carousel.js') !!}
	{!! HTML::script('simon/js/logoRotate.js') !!}
	{!! HTML::script('simon/js/countDown.js') !!}
	{!! HTML::script('simon/js/onSubmit.js') !!}
	{!! HTML::script('simon/js/readMore.js') !!}

	<script>
	var controller = new ScrollMagic.Controller();

	var scene = new ScrollMagic.Scene(
	 	{triggerElement: "#work"}
	)

	.setTween("#perfect_suit", 0.9, {opacity: 1})
	.addTo(controller);



	var scene = new ScrollMagic.Scene(
	 	{triggerElement: "#scroll"}
	)

	.setTween("#imageone", 0.3, {opacity: 1})
	.addTo(controller);





	var scene = new ScrollMagic.Scene(
	 	{triggerElement: "#scroll"}
	)

	.setTween("#imagetwo", 0.9, {opacity: 1})
	.addTo(controller);




	var scene = new ScrollMagic.Scene(
	 	{triggerElement: "#scroll"}
	)

	.setTween("#imagethree", 1.5, {opacity: 1})
	.addTo(controller);



	var scene = new ScrollMagic.Scene(
	 	{triggerElement: "#word_tree"}
	)

	.setTween("#first_word", 0.5, {opacity: 1})
	.addTo(controller);




	var scene = new ScrollMagic.Scene(
	 	{triggerElement: "#word_tree"}
	)

	.setTween("#second_word", 1.1, {opacity: 1})
	.addTo(controller);





	var scene = new ScrollMagic.Scene(
	 	{triggerElement: "#word_tree"}
	)

	.setTween("#third_word", 1.7, {opacity: 1})
	.addTo(controller);




	var scene = new ScrollMagic.Scene(
	 	{triggerElement: "#icon_tree"}
	)

	.setTween("#imagefour", 0.5, {opacity: 1})
	.addTo(controller);

	</script>


<script>

	$(document).ready(function() {
	 
	  $("#owl-example").owlCarousel({
	  	singleItem: true,
	  	navigation: true,
	  	pagination: false,
	  	navigationText: false,
	  	paginationSpeed: 2000,
	  	slideSpeed: 1000,
	  	autoPlay: 5000,
	  });
	 
	});

</script>

</body>
</html>