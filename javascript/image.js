Image={}

Image.selectImage = function(imageName, imgThumb, imgTitle)
{
		$(".thumb").removeClass("thumb_selected");
		$(imgThumb).addClass("thumb_selected");

		$('#_image').addClass("hidden").fadeOut(600, function(){
				$('#_image').attr('src', imageName).fadeIn(800);
				$("#image_title").fadeOut(200, function(){
						$("#image_title").addClass("hidden").text(imgTitle).fadeIn("slow");
				});
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
