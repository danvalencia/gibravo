Menu={}

Menu.initMenu = function(section) 
{
		$("#menu").accordion({
			collapsible : true,
			autoHeight : false,
			disabled : true,
			active : Menu.getSectionNumber(section)
		});			
		
		$("#menu").accordion("activate", Menu.getSectionNumber(section));
		$("#menu").accordion("enable");
		
		if(section == "home_page")
		{
				Menu.intervalId = setInterval("Menu.highlightThumb()", 500);
		}
}

Menu.getSectionNumber = function(section)
{
		switch(section.toLowerCase())
		{
				case "personal":
						return 0;
				case "editorial":
						return 1;
				case "sketchbooks":
						return 2;
				case "blog":
						return 3;
				case "wallpaper":
						return 4;
			 case "contact":
			  		return 5;
				default:
						return 6;
		}
}

Menu.highlightThumb = function()
{
		Menu.nextThumb = Math.floor(Math.random()*24);
		if($(".thumb_selected").length == 0)
		{
			var nextThumb = $(".thumb").first();
		}
		else
		{
			var nextThumb = $(".thumb_selected").next();			
		}
		$(".thumb_selected").removeClass("thumb_selected");
		//$(".thumb:nth-child(" + randomThumb + ")").addClass("thumb_selected");
		nextThumb.addClass("thumb_selected");
}

Menu.click = function(url, target)
{
		if(url != "")
		{
				if(target == "")
				{
					target = "_self";
				}
				window.open(url, target);			
		}
}

Menu.intervalId = null;