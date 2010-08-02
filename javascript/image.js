Image={}

Image.selectImage = function(imageName, imgThumb)
{
		$(".thumb").removeClass("thumb_selected");
		$(imgThumb).addClass("thumb_selected");
		$('#_image').fadeOut(600, function(){
				$('#_image').addClass("hidden").attr('src', imageName).fadeIn(800);
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
