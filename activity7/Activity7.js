$(document).ready(function() {
	// preload images (but it's not used?)
	// note-to-self: this function is called for all children of image_list
	$("#image_list a").each(function() {
		var swappedImage = new Image();
		// note-to-self: get source of the images from href attribute of the <a> element
		swappedImage.src = $(this).attr("href");
	});

	// set up event handlers for links    
	$("#image_list a").click(function(evt) {
		// this -> clicked link <a>
		// get the url of the clicked image
		var imageURL = $(this).attr("href");

		// first fade out the current image
		$("#image").fadeOut(1000, ()=>{
			// then set src and display the new image with fade in effect
			$("#image").attr("src", imageURL).fadeIn(1000)
		});
		
		// get the caption from "title" attribute of the clicked link
		var caption = $(this).attr("title")
		// first fade out the current caption
		$("#caption").fadeOut(1000, ()=>{
			// then set and display the new caption
			$("#caption").text(caption).fadeIn(1000)
		});

		// cancel the default action of the link
	    evt.preventDefault();
	}); // end click
	
	// move focus to first thumbnail
	$("li:first-child a").focus();
}); // end ready