$( function() {
	 $( "#accordion" ).accordion({
		 heightStyle: "content"
	 });

	 $("#homepage_nav").css("background-color","yellow");

	 $( "#home_neopolitan_svg" ).click(function() {
		 	$(this).animate({height: '30vh', left: '5vw', top: '2vh'}, "slow");
			$("#homepage_nav").addClass( "show" );
	 });

	 //Flickr niceGallery
	 var a = '72157690643578462'; //graphic design
	 var b = '72157665937957878'; //web design
	 var c = '72157663895920377'; //html email
	 var d = '72157693637062635'; //html email
	 var album = a;
	 var url = 'http://localhost:8888/d-w-i-g-h-t.com/wp-content/themes/html5blank-stable/js/Flickr.Gallery.min.js'

$('#homepage_nav_graphicdesign').click(function(){
    album='72157690643578462';
		console.log(album);
});
$('#homepage_nav_webdesign').click(function(){
	album='72157665937957878';
	console.log(album)
	getScript(url);

});

$("#gallery").flickrGallery({
	//FLICKR API KEY
	Key: '4b3996b5a809bd3303dcee9d916bafc4',
	//Secret
	Secret: '5a676bfdefa617a1',
	//FLICKR user ID
	User: '133563033@N06',
	//Flickr PhotoSet ID
	PhotoSet: album,
	/*-- VIEWBOX SETTINGS --*/
	Speed   : 400,    //Speed of animations
	navigation  : 1,    //(true) <a href="https://www.jqueryscript.net/tags.php?/Navigation/">Navigation</a> (arrows)
	keyboard  : 1,    //(true) Keyboard navigation
	numberEl  : 1     //(true) Number elements  });
} );


//don't you dare delete the end:
} );
