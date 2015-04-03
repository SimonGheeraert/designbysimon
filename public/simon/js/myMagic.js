var controller = new ScrollMagic.Controller();

var tween = TweenMax.to("#iconone", 0.5, {opacity: 0})

var scene = new ScrollMagic.Scene({
	triggerElement: '#picture'
})

	.setTween(tween)
	.addTo(controller);

