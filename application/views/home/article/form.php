<script type="text/javascript">
tinymce.init({
	  selector: 'textarea',
	  language: 'zh_CN',
	  height: 400,
	  plugins: [
	    'advlist autolink lists link image charmap print preview anchor',
	    'searchreplace visualblocks code fullscreen',
	    'insertdatetime media table contextmenu paste code'
	  ],
	  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
	});
</script>

<div class="article-wrapper">
	<div class="article-form">
		<form action="<?php echo URL::site('article/save'); ?>" method="post" id="form" name="form">
		<table class="article-form-table">
			<tr>
				<td><div class="article-form-label">标题</div></td>
				<td><input class="article-form-input" type="text" id="title" name="title" value="" /></td>
			</tr>
			<tr>
				<td><div class="article-form-label">内容</div></td>
				<td><textarea id="content" name="content"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="button" class="article-button" value=" 保存日志 " onclick="Article.submit(this);" /></td>			
			</tr>
		</table>
		</form>
	</div>
</div>