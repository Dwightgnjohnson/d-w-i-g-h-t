$( function() {
	 $( "#accordion" ).accordion({
		 heightStyle: "content"
	 });

	 $( "#home_neopolitan_svg" ).on( "click", function() {
		  $(this).toggleClass("home_neopolitan_svg").animate("slow");
		 	$(this).toggleClass("home_neopolitan_svg_afterclick").animate("slow");
		  $("#homepage_nav").toggleClass("hide");
	 });


	 $( "#sidebar_neopolitan_svg" ).on( "click", function() {
      $( "#sidebar_nav" ).toggleClass("hide");
			$(this).effect( "bounce", {times:1,distance:5,direction:"left"}, 1000 );
    });


//facnybox for instagram feed
		$("[data-fancybox]").fancybox({
			loop : true,
			buttons : [
        'close'
    ],
		});
//don't you dare delete the end:
} );
