( function( $ ){
	if($(window).width() >= 700){
	//Masonry blocks
	$blocks = $(".posts");

	$blocks.imagesLoaded(function(){
		$blocks.masonry({
			itemSelector: '.fourcolumn, .threecolumn, .twocolumn, .onecolumn'
		});

		// Fade blocks in after images are ready (prevents jumping and re-rendering)
		$(".fourcolumn, .threecolumn, .twocolumn, .onecolumn").fadeIn();
	});

	$(window).resize(function () {
		$blocks.masonry();
	});
	}
})( jQuery );