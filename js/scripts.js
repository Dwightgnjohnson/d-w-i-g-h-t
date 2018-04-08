$( function() {
	 $( "#accordion" ).accordion({
		 heightStyle: "content"
	 });


	 $( "#main_menu" ).on( "click", function() {
      $( "#sidebar_nav" ).toggleClass("hide");
			$(this).effect( "bounce", {times:1,distance:2,direction:"down"}, 1000 );
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
