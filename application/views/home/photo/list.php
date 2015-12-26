<div class="article-wrapper">

<div class="row">
<?php
foreach($photos as $photo) {
?>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<a class="PhotoList" data-fancybox-group="gallery" href="<?php echo $photo->getFullPath(); ?>" title="<?php echo $photo->getTitle(); ?>"><img src="<?php echo $photo->getFullPath(); ?>" alt="<?php echo $photo->getTitile(); ?>" /></a>
			<div class="caption">
				<h3 ondblclick="Photo.updateTitle(this);" data-id="<?php echo $photo->getPhotoId(); ?>" data-title="<?php echo $photo->getTitle(); ?>" data-time="<?php echo $photo->getCreateTime('Y.m.d'); ?>"><?php echo $photo->getTitle(); ?> <small><?php echo $photo->getCreateTime('Y.m.d'); ?></small></h3>
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