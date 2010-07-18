<div id="thumb_panel">
	<?php foreach ($album->getImages() as $image): ?>
		<?php $image_count++;?>
		<div class="thumb <?= $image->getName()==$display_image->getName() ? 'thumb_selected' : '' ?>" onclick="Image.selectImage('<?= $image->getPath() ?>', this);">
			<img src="<?= $image->getThumbnailPath()?>"></img>
		</div>
	<?php endforeach ?>
	<?php for ($i=$image_count; $i < $MAX_IMAGES; $i++): ?>
		<div class="thumb"></div>
	<?php endfor?>
</div>
<div id="image_panel" >
	<!-- <img id="_image" style="opacity:0.1;filter:alpha(opacity=40)" src="/images/pajaro_web2.jpg"></img> -->
	<img id="_image" src="<?= $display_image->getPath() ?>"></img>
</div>