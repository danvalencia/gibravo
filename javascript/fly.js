Fly = {}

Fly.getCoordinates = function()
{
		$("#menu").accordion("activate", false);
		var windowHeight;
		var windowWidth;
		
		var pageContainerWidthStr = $("#page-container").css("width");
		var pageContainerHeightStr = $("#page-container").css("height");
		
		var PAGE_CONTAINER_WIDTH = stripPixel(pageContainerWidthStr);
		var PAGE_CONTAINER_HEIGHT = stripPixel(pageContainerHeightStr);
		
		if(window.innerHeight){
		  	windowHeight = window.innerHeight;
		}else{
	  		windowHeight = document.documentElement.clientHeight;
		}

		if(window.innerWidth){
		  	windowWidth = window.innerWidth;
		}else{
	  		windowWidth = document.documentElement.clientWidth;
		}
		
		var randomY=Math.floor(Math.random()*windowHeight);
		var randomX=Math.floor(Math.random()*windowWidth);
		
		if(windowWidth > PAGE_CONTAINER_WIDTH)
		{
				var offset = ( windowWidth - PAGE_CONTAINER_WIDTH ) / 2;
				if(randomX < offset)
				{
						randomX += PAGE_CONTAINER_WIDTH;
				}
				else if(randomX > (PAGE_CONTAINER_WIDTH + offset) )
				{
						randomX -= PAGE_CONTAINER_WIDTH;
				}
		}
		
		if(windowHeight > PAGE_CONTAINER_HEIGHT)
		{
				if(randomY > PAGE_CONTAINER_HEIGHT)
				{
						randomY -= PAGE_CONTAINER_HEIGHT;
				}
		}
		
		var coordinates = new Array();
		coordinates.push(randomX);
		coordinates.push(randomY);
		
		return coordinates;
		
}

function stripPixel(size)
{
		if(typeof size == "string")
		{
				if(size.indexOf("px") != -1)
				{
						size = size.substring(0,size.indexOf("px"));
				}
				return parseInt(size);
			 
		} 
		return size;
}