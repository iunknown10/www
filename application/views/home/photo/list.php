<div class="photo-wrapper">

<div class="row">
<?php
foreach($photos as $photo) {
?>
	<div id="Photo-<?php echo $photo->getPhotoId(); ?>" class="col-sm-6 col-md-3">
		<div class="thumbnail" onmouseover="$(this).children().first().show();" onmouseout="$(this).children().first().hide();" >
			<a class="photo-remove" rel="remove-<?php echo $photo->getPhotoId(); ?>" onclick="Photo.remove(<?php echo $photo->getPhotoId(); ?>);"><i class="photo-remove-icon"></i></a>
			<a class="PhotoList" data-fancybox-group="gallery" href="<?php echo $photo->getFullPath(); ?>" title="<?php echo $photo->getTitle(); ?>"><img src="<?php echo $photo->getFullSmallPath(); ?>" alt="<?php echo $photo->getTitile(); ?>" /></a>
			<div class="caption">
				<h5 ondblclick="Photo.updateTitle(this);" data-id="<?php echo $photo->getPhotoId(); ?>" data-title="<?php echo $photo->getTitle(); ?>" data-time="<?php echo $photo->getCreateTime('Y.m.d'); ?>"><?php echo $photo->getTitle(); ?> <small><?php echo $photo->getCreateTime('Y.m.d'); ?></small></h5>
			</div>
		</div>
	</div>
<?php
}
?>
</div>
	<?php echo isset($pagination) ? $pagination : ''; ?>
</div>
<script type="text/javascript">
$('.PhotoList').fancybox({
	helpers: {
		title : {
			type : 'outside'
		},
		overlay : {
			speedOut : 0
		}
	}
});
</script>