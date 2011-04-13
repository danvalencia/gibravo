ImageUtils={}

ImageUtils.selectImage = function(imgThumb)
{
		$("#image_title").empty();
		$(".thumb").removeClass("thumb_selected");
		$(imgThumb).parent().addClass("thumb_selected");
		$('#image_panel').empty().addClass("loading");
		
		var imageName = $(imgThumb).attr("imagePath");
		var facebookPath = $(imgThumb).attr("bookmarkPath");
		var imgTitle = $(imgThumb).attr("title");
				
		var img = new Image();
		$(img)
			.load(function () {
		      $(this).hide();
		      $('#image_panel')
		        .removeClass('loading')
						.empty()
						.append(this);
		      $(this).fadeIn();
					$("#image_title").append(imgTitle).fadeIn();

		  })
			.addClass("loading")
		  .attr('src', imageName);
			if(ImageUtils.section && ImageUtils.section != 'home_page'){
					ImageUtils.addFacebookLike(facebookPath);			
			}}

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
		if(ImageUtils.section && ImageUtils.section != 'home_page'){
				ImageUtils.addFacebookLike("gibravo.com");			
		}
}

ImageUtils.addFacebookLike = function(url)
{
				$('#facebook_like')
					.empty()
					.append("<iframe src='http://www.facebook.com/plugins/like.php?href=" + url + "&amp;layout=button_count&amp;show_faces=true&amp;width=100&amp;action=like&amp;font&amp;colorscheme=dark&amp;height=21'" + 
						      " scrolling='no' frameborder='0' style='border:none; overflow:hidden; width:75px; left: 337px; position: relative; height:21px;' allowTransparency='true'></iframe>")
					
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
		
		$(document).keyup(function(evt){
				switch(evt.which)
				{
						case 39 :
							ImageUtils.next();
							break;
							
						case 37 :
							ImageUtils.previous();
							break;

						case 38:
							ImageUtils.up();
							break;

						case 40 :
							ImageUtils.down();
							break;
							
						default:
							break;
				}
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

ImageUtils.up = function()
{
		ImageUtils.switchImage("up");
}

ImageUtils.down = function()
{
		ImageUtils.switchImage("down");
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

				case "up":
					var prevDiv = $(".thumb_selected").prev().prev().prev();
					if(prevDiv.length == 0)
					{
							prevDiv = $(".thumb").last();
					}
					var prevThumb = prevDiv.children();

					prevThumb.click()
					break;
					
				case "down":
					var nextDiv = $(".thumb_selected").next().next().next();
					if(nextDiv.hasClass("empty"))
					{
							nextDiv = $(".thumb").first();
					}
					var nextThumb = nextDiv.children();
					nextThumb.click();
					break;
					

		}
	
}

ImageUtils.section = null;
