class Effects{
	constructor(){

	}
	static FadedDiv(slideshow, innerS){
		$("#" + slideshow + " > "+innerS+":gt(0)").hide();

		setInterval(function() { 
		  $("#" + slideshow + " > "+innerS+"first")
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .end()
		    .appendTo('#' + slideshow + '');
		},  3000);				
	}
}