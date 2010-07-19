<ul id="menu" class="sections">
	<?php foreach ($sections as $a_section): ?>
		<li class="item_sections">
			<?php if (strcasecmp($a_section->getName(), $seccion_name) == 0): ?>
				<a class="section section_selected" id="<?=$a_section->getName()?>" href="#"><?= strtoupper($a_section->getName()) ?></a>
			<?php else: ?>
			    <a class="section section_unselected" href="#" id="<?=$a_section->getName()?>"><?= strtoupper($a_section->getName()) ?></a>
			<?php endif ?>								
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
		</li>
	<?php endforeach ?>
	<li class="item_sections">
		<a href="/contact" class="section section_unselected" onclick="Menu.onContactClick()" >CONTACT</a>
	</li>
</ul>