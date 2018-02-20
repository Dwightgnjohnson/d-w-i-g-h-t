$( function() {
	 $( "#accordion" ).accordion({
		 heightStyle: "content"
	 });

	 $("#homepage_nav").css("background-color","yellow");
	 $("#homepage_nav > ul").show();

	 $( "#home_neopolitan_svg" ).click(function() {
  		$( "#homepage_nav > ul" ).fadeToggle(1000);
	 });

	 $("button").click(function(){
    $("#div1").fadeToggle();
    $("#div2").fadeToggle("slow");
    $("#div3").fadeToggle(3000);
});






} );
