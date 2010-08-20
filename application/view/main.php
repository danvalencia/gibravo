<div id="thumb_panel">
	<?php if($is_home_page): ?>
		<?php for ($i=$image_count; $i < $MAX_IMAGES; $i++): ?>
			<div class="thumb empty"></div>
		<?php endfor?>
	<?php else: ?>
		<?php foreach ($images_to_display as $image): ?>
			<?php $image_count++;?>
			<div class="loading_thumb thumb <?= $image->getName()==$display_image->getName() ? 'thumb_selected' : '' ?> image">
				<img style="hidden" src="<?= $image->getThumbnailPath()?>" alt="<?= $image->getTitle() ?>" imagePath="<?= $image->getPath() ?>"></img>
			</div>
		<?php endforeach ?>
		<?php for ($i=$image_count; $i < $MAX_IMAGES; $i++): ?>
			<div class="thumb empty"></div>
		<?php endfor?>		
	<?php endif ?>
</div>
<div id="image_panel" class="loading" >
	<!-- <img id="_image" style="opacity:0.1;filter:alpha(opacity=40)" src="/images/pajaro_web2.jpg"></img> -->
	<?php if($is_home_page): ?>
		<img id="_image" class="active" src="/images/entrada.jpg"></img>
	<?php else: ?>
		<img id="_image" class="active" src="<?= $display_image->getPath()?>"></img>
	<?php endif ?>
</div>
<div id="image_footer">
	<?php if(!isset($hide_arrows)): ?>
		<span id="copyright_text">
			all images © gibran julian
		</span>
		<span id="image_title">
			<?=$display_image->getTitle()?>
		</span>
		<span id="flechas">
			<span id="flecha_izquierda" class="flecha">
				<img src="/images/flecha_izquierda.png"></img>
			</span>
			<span id="flecha_derecha" class="flecha">
				<img src="/images/flecha_derecha.png"></img>
			</span>			
		</span>
	<?php endif ?>
</div>
