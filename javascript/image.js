Image={}

Image.selectImage = function(imageName, imgThumb, imgTitle)
{
		$(".thumb").removeClass("thumb_selected");
		$(imgThumb).addClass("thumb_selected");
		
		var hiddenImage = $('._image.hidden_image').attr('src', imageName);
		var activeImage = $('._image.active');
		activeImage.fadeOut(400, function(){
				$("#image_title").addClass("hidden").text(imgTitle).fadeIn("slow");
				activeImage.removeClass('active').addClass("hidden_image");
				hiddenImage.addClass("active").removeClass("hidden_image");
				hiddenImage.fadeIn(800);
		});
		
}

Image.init = function()
{
		$("#flecha_izquierda").click(function(){
				Image.previous();
		});
		$("#flecha_derecha").click(function(){
				Image.next();
		});
		
}

Image.next = function()
{
		Image.switchImage("right");
}

Image.previous = function()
{
		Image.switchImage("left");
}

Image.switchImage = function(direction)
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
