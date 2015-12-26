<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
<title>爱跑步 - iRunning.com</title>
<link href="/source/css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="/source/css/bootstrap/bootstrap-theme.css" rel="stylesheet">
<link href="/source/css/misc/sweetalert.css" rel="stylesheet"/>
<link href="/source/css/page/global.css" rel="stylesheet"/>
<link href="/source/css/page/article.css" rel="stylesheet"/>
<script type="text/javascript" src="/source/scripts/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/source/scripts/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="/source/scripts/misc/sweetalert.min.js"></script>
<script type="text/javascript" src="/source/scripts/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="/source/scripts/controller/article.js"></script>
<script type="text/javascript" src="/source/scripts/controller/chaos.js"></script>
</head>
<body>
<?php echo View::factory('global/navigator'); ?>
<div class="global-content">
	<?php echo isset($content) ? $content : ''; ?>
</div>
<?php echo View::factory('global/footer'); ?>

<script type="text/javascript">
Chaos.getNumbers();
</script>
</body>
</html>