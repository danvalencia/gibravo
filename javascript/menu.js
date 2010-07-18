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
		}
}

Menu.onContactClick = function()
{
	//	$.ajax()
}