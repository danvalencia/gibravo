ImageUtils={}

ImageUtils.selectImage = function(imageName, imgThumb, imgTitle)
{
		$(".thumb").removeClass("thumb_selected");
		$(imgThumb).addClass("thumb_selected");
		$('#image_panel').empty().addClass("loading");
		var img = new Image();
		
		  // wrap our new image in jQuery, then:
		  $(img)
		    // once the image has loaded, execute this code
		    .load(function () {
		      // set the image hidden by default    
		      $(this).hide();
		
		      // with the holding div #loader, apply:
		      $('#image_panel')
		        // remove the loading class (so no background spinner), 
		        .removeClass('loading')
						// to ensure we don't have 2 images at once
						.empty()
		        // then insert our image
		        .append(this);
		
		      // fade our image in to create a nice effect
		      $(this).fadeIn();
		    })
		
		    // if there was an error loading the image, react accordingly
		    .error(function () {
		      // notify the user that the image could not be loaded
		    })
				.addClass("loading")
		    // *finally*, set the src attribute of the new image to our image
		    .attr('src', imageName);
		
}

ImageUtils.removeThumbLoader = function(image)
{
		$(image).hide();
		$(image).removeClass("hidden");
		$(image).parent().removeClass("loading_thumb");
		$(image).fadeIn();
}

ImageUtils.init = function()
{
		$(".thumb img").load(function(){
			ImageUtils.removeThumbLoader(this);
		});
		
		$("#flecha_izquierda").click(function(){
				ImageUtils.previous();
		});
		$("#flecha_derecha").click(function(){
				ImageUtils.next();
		});
		
}

ImageUtils.next = function()
{
		ImageUtils.switchImage("right");
}

ImageUtils.previous = function()
{
		ImageUtils.switchImage("left");
}

ImageUtils.switchImage = function(direction)
{
		switch(direction)
		{
				case "right":
					var nextThumb = $(".thumb_selected").next();
					if(nextThumb.hasClass("empty"))
					{
							nextThumb = $(".thumb").first();
					}
					nextThumb.click();
					break;
				case "left":
					var prevThumb = $(".thumb_selected").prev();
					if(prevThumb.length == 0)
					{
							prevThumb = $(".thumb.image").last();
					}
					prevThumb.click()
					break;
		}
	
}
