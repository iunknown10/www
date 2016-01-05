<div class="article-wrapper">

	<div class="panel panel-default">
		<table class="table">
			<tr>
				<th class="width-10p">#</th>
				<th>标题</th>
				<th class="width-15p">时间</th>
				<th class="width-15p">操作</th>
			</tr>
	<?php
		foreach($articles as $article) {
	?>
			<tr id="article-<?php echo $article->getArticleId(); ?>">
				<td><input type="checkbox" name="article_id[]" value="<?php echo $article->getArticleId(); ?>" /></td>
				<td><a href="<?php echo URL::site('article/view/'.$article->getArticleId()); ?>" target="_blank"><?php echo $article->getTitle(); ?></a></td>
				<td><?php echo $article->getCreateTime('Y.m.d'); ?></td>
				<td><a href="<?php echo URL::site('home/article/edit?article_id='.$article->getArticleId()); ?>"><span class="glyphicon glyphicon-edit"></span>修改</a> <a href="#" onclick="Article.remove(<?php echo $article->getArticleId(); ?>);"><span class="glyphicon glyphicon-remove"></span>删除</a></td>
			</tr>
	<?php
		}
	?>
		</table>
	</div>
	<?php echo isset($pagination) ? $pagination : ''; ?>
</div>