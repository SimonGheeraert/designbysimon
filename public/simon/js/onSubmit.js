function fade_in(){
	$("#sendit").fadeTo("fast", 0.1);
	fade_out();	
}

function fade_out(){
	$("#sendit").fadeTo("slow", 1);	
	fade_in();	
}



$("#send").submit(function(){

    $("#sendit").fade_in();
    
});






