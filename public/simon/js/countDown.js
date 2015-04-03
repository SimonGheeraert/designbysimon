
$(document).ready(function() {

if ($('#thanks').length > 0)
{
	var delay = 10 ;
	var url = "http://designbysimon.dev:8000/home";
	function countdown() {
	setTimeout(countdown, 1000) ;
	$('#redirect').html("You'll be redirected to my home page in <span id='bigger'>"  + delay  + " </span> seconds.");
	delay --;
	if (delay < 0 ) {
	window.location = url ;
	delay = 0 ;
	}
	}
	countdown() ;
	}
}


);