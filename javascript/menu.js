Menu={}

Menu.initMenu = function(section) 
{
		$("#menu").accordion({
			collapsible : true,
			autoHeight : false,
			active : Menu.getSectionNumber(section)
		});
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
				case "contact":
						return 4;
		}
}

Menu.click = function(url)
{
		if(url != "")
		{
				window.location = url;			
		}
}