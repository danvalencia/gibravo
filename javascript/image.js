Image={}

Image.selectImage = function(imageName, imgThumb)
{
		$(".thumb").removeClass("thumb_selected");
		$(imgThumb).addClass("thumb_selected");
		$('#_image').fadeOut("slow", function(){
				$('#_image').fadeIn("slow").attr('src', imageName);
		});
}