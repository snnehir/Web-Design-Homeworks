$(document).ready(function() {
	// preload images 
	// note-to-self: function is called for all children of image_list
	$("#image_list a").each(function() {
		var swappedImage = new Image();
		// note-to-self: get source of the images from href attribute of the <a>
		swappedImage.src = $(this).attr("href");
	});

	// TODO: What should happen? Should caption&image fade out or fade in with animation? 
	// set up event handlers for links    
	$("#image_list a").click(function(evt) {
		// this -> clicked link
		var imageURL = $(this).attr("href");

		// change "src" attribute of image
		$("#image").attr("src", imageURL).fadeOut(1000).fadeIn(1000);
		
		// get the caption from title attribute of the clicked link
		var caption = $(this).attr("title")
		$("#caption").text(caption).fadeOut(1000).fadeIn(1000);

		// cancel the default action of the link
	    evt.preventDefault();
	}); // end click
	
	// move focus to first thumbnail
	$("li:first-child a").focus();
}); // end ready