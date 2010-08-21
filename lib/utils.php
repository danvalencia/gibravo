<?php
	function getMainImage($display_image, $is_home_page)
	{
		if($is_home_page)
		{
			$mainImage = '/images/entrada.jpg';
		}
		else
		{
			if(isset($display_image))
			{
				$mainImage = $display_image->getPath();
			}
			else
			{
				$mainImage = "";
			}
		} 
		return $mainImage;
	}
?>