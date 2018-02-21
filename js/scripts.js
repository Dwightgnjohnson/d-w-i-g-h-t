$( function() {
	 $( "#accordion" ).accordion({
		 heightStyle: "content"
	 });

	 $( "#home_neopolitan_svg" ).click(function() {
		 	$(this).animate({height: '30vh', left: '5vw', top: '2vh'}, "slow");
			$("#homepage_nav").addClass( "show" );
	 });

	 // $( "#sidebar_neopolitan_svg" ).click(function() {
		//  $( "#sidebar_nav" ).toggleClass('show hide');
	 // });

	 $( "#sidebar_neopolitan_svg" ).on( "click", function() {
      $( "#sidebar_nav" ).toggleClass( "hide" );
    });


//don't you dare delete the end:
} );
