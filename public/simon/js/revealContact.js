	
	$("#reveal_contact, #show_contact, .reveal_contact, #see_contact").on("click" ,function(e){
		e.preventDefault();
		$('body').animate({scrollTop: $("#contact, .contact_second").offset().top}, 2000);
		$('#contact_box').css('display', 'block');
	   	$("#contact_box").fadeTo(3000, 1);		
     }); 	 			 	
