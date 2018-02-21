$( function() {
	 $( "#accordion" ).accordion({
		 heightStyle: "content"
	 });

	 $("#homepage_nav").css("background-color","yellow");

	 $( "#home_neopolitan_svg" ).click(function() {
		 	$(this).animate({height: '30vh', left: '5vw', top: '2vh'}, "slow");
			$("#homepage_nav").addClass( "show" );
	 });

	 $( "#homepage_nav_about" ).click().css.()










//don't you dare delete the end:
} );
