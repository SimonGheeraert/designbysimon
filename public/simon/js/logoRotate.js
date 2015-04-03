
	$(document).ready(function() {

	    $('#rotate_logo').animate({ top: '+=0px' }, 5000);
		$('#rotate_logo').animate({  borderSpacing: -360 }, {
		    step: function(now,fx) {
		      $(this).css('-webkit-transform','rotate('+now+'deg)'); 
		      $(this).css('-moz-transform','rotate('+now+'deg)');
		      $(this).css('transform','rotate('+now+'deg)');
		    },
		    duration: 'slow'
		},'linear');	
	    $('#rotate_logo').animate({ top: '-=0px' }, 5000);


	});

	$('#rotate_logo').hover(function() {
    $(this).stop().animate({ borderSpacing: -360 }, {
		    step: function(now,fx) {
		      $(this).css('-webkit-transform','rotate('+now+'deg)'); 
		      $(this).css('-moz-transform','rotate('+now+'deg)');
		      $(this).css('transform','rotate('+now+'deg)');
		    },
		    duration: 'slow'
		},'linear');
	});





