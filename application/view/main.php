<div id="thumb_panel">
	<?php foreach ($images_to_display as $image): ?>
		<?php $image_count++;?>
		<div class="thumb <?= $image->getName()==$display_image->getName() ? 'thumb_selected' : '' ?> image" onclick="Image.selectImage('<?= $image->getPath() ?>', this);">
			<img src="<?= $image->getThumbnailPath()?>"></img>
		</div>
	<?php endforeach ?>
	<?php for ($i=$image_count; $i < $MAX_IMAGES; $i++): ?>
		<div class="thumb empty"></div>
	<?php endfor?>
</div>
<div id="image_panel" >
	<!-- <img id="_image" style="opacity:0.1;filter:alpha(opacity=40)" src="/images/pajaro_web2.jpg"></img> -->
	<img id="_image" style="display:none"></img>
</div>
