<?php
	function setHrefFor($section)
	{
		$href= "href=\"" . $section->getUrl() . "\"" . " target=\"" . $section->getUrlTarget() . "\"";
		return $href;
	}
?>
<ul id="menu" class="sections">
	<?php foreach ($sections as $a_section): ?>
		<?logToFile("Section Name: " . $a_section->getName() . ". Url: " .  $a_section->getUrl() . ". Selected Section: " . $seccion_name)?>
		<li class="item_sections">
			<?php if (strcasecmp($a_section->getName(), $seccion_name) == 0): ?>
				<a class="section section_selected" id="<?=$a_section->getName()?>" <?= setHrefFor($a_section) ?> onclick="Menu.click(this.href)" ><?= strtoupper($a_section->getName()) ?></a>
			<?php else: ?>
			    <a class="section section_unselected" <?= setHrefFor($a_section) ?>  id="<?=$a_section->getName()?>" onclick="Menu.click(this.href, this.target)"><?= strtoupper($a_section->getName()) ?></a>
			<?php endif ?>		
			<?php if($a_section->hasAlbums()): ?>						
			<ul class="albums">
				<?php foreach ($a_section->getAlbums() as $an_album): ?>
					<?php if (strcasecmp($a_section->getName(), $seccion_name) == 0): ?>
						<li class="item_albums">
					<?php else: ?>
						<li class="item_albums">
					<?php endif ?>		
					
					<?php if (strcasecmp($an_album->getName(), $album_name) == 0): ?>
						<a href="<?= "/main/".$a_section->getName()."/".$an_album->getName()?>" class="album album_selected"><?= $an_album->getName() ?></a>
					<?php else: ?>
						<a href="<?= "/main/".$a_section->getName()."/".$an_album->getName()?>" class="album album_unselected"><?= $an_album->getName() ?></a>
					<?php endif ?>						
					</li>
				<?php endforeach ?>
			</ul>
			<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>