<?php
$sideLength = Kohana::$config->load('photo.side_length');
$sideLength = $sideLength ? $sideLength : 500;
?>
<script type="text/javascript">
tinymce.init({
	  selector: 'textarea',
	  language: 'zh_CN',
	  height: 500,
	  file_picker_callback: function(){},
	  image_auto_resize_width: <?php echo $sideLength; ?>,
	  convert_urls: false,
	  plugins: [
	    'advlist autolink lists link imageplus charmap print preview anchor',
	    'searchreplace visualblocks code fullscreen',
	    'insertdatetime media table contextmenu paste code'
	  ],
	  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link imageplus'
	});
</script>

<div class="article-wrapper">
	<div class="article-form">
		<form id="form" name="form" method="post" onsubmit="return Article.submit(this);">
		<input type="hidden" id="article_id" name="article_id" value="<?php echo isset($article) ? $article->getArticleId() : ''; ?>" />
		<table class="article-form-table">
			<tr>
				<td><div class="article-form-label">标题</div></td>
				<td><input class="article-form-input" type="text" id="title" name="title" value="<?php echo isset($article) ? $article->getTitle() : ''; ?>" /></td>
			</tr>
			<tr>
				<td><div class="article-form-label">内容</div></td>
				<td><textarea id="content" name="content"><?php echo isset($article) ? $article->getContent() : ''; ?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" class="article-button" value=" 保存日志 " onclick="Article.submit(this.form);" /></td>			
			</tr>
		</table>
		</form>
	</div>
</div>