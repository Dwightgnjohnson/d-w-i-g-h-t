$( function() {
	 $( "#accordion" ).accordion({
		 heightStyle: "content"
	 });

	 $( "#home_neopolitan_svg" ).on( "click", function() {
		  $(this).toggleClass("home_neopolitan_svg").animate("slow");
		 	$(this).toggleClass("home_neopolitan_svg_afterclick").animate("slow");
		  $("#homepage_nav").toggleClass( "hide" ).animate("slow");
			$(this).effect( "bounce", {times:1,distance:5,direction:"left"}, 1000 );
	 });


	 $( "#sidebar_neopolitan_svg" ).on( "click", function() {
      $( "#sidebar_nav" ).toggleClass("hide");
			$(this).effect( "bounce", {times:1,distance:5,direction:"left"}, 1000 );
    });


//don't you dare delete the end:
} );
