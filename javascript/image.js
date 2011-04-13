ImageUtils={}

ImageUtils.selectImage = function(imgThumb)
{
		$("#image_title").empty();
		$(".thumb").removeClass("thumb_selected");
		$(imgThumb).parent().addClass("thumb_selected");
		$('#image_panel').empty().addClass("loading");
		
		var imageName = $(imgThumb).attr("imagePath");
		var imgTitle = $(imgThumb).attr("title");
				
		var img = new Image();
		$(img)
			.load(function () {
		      $(this).hide();
		      $('#image_panel')
		        .removeClass('loading')
						.empty()
						.append(this);
					$('#facebook_like')
						.empty()
						.append("<iframe src='http://www.facebook.com/plugins/like.php?href=gibravo.com&amp;layout=button_count&amp;show_faces=true&amp;width=100&amp;action=like&amp;font&amp;colorscheme=dark&amp;height=21'" + 
							      " scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:600px; float:right; height:21px;' allowTransparency='true'></iframe>")
		      $(this).fadeIn();
					$("#image_title").append(imgTitle).fadeIn();
		  })
			.addClass("loading")
		  .attr('src', imageName);
		
}

ImageUtils.loadImage = function(imageName)
{
		if(imageName == "")
		{
				return;
		}
		
		var img = new Image();
		$(img)
			.load(function () {
		      $(this).hide();
		      $('#image_panel')
		        .removeClass('loading')
						.empty()
		        .append(this);

		      $(this).fadeIn();
		  })
			.addClass("loading")
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
		$(".thumb img")
			.load(function(){
				ImageUtils.removeThumbLoader(this);
			})
			.click(function(){
				ImageUtils.selectImage(this);
			})
		
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
					var nextDiv = $(".thumb_selected").next();
					if(nextDiv.hasClass("empty"))
					{
							nextDiv = $(".thumb").first();
					}
					var nextThumb = nextDiv.children();
					nextThumb.click();
					break;
					
				case "left":
					var prevDiv = $(".thumb_selected").prev();
					if(prevDiv.length == 0)
					{
							prevDiv = $(".thumb").last();
					}
					var prevThumb = prevDiv.children();
					
					prevThumb.click()
					break;
		}
	
}
