<div class="article-wrapper">
	<div class="page-header">
		<h1><?php echo $article->getTitle(); ?>
		<small class="text-14"><?php echo $user->getNickname(); ?></small>
		<small class="text-14"><?php echo $article->getCreateTime('Y.m.d'); ?></small>
		</h1>
	</div>
	<div>
		<p>
		<?php echo $article->getContent(); ?>
		</p>
	</div>
</div>