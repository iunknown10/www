<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>爱跑步 - iRunning.com</title>
<link href="/source/css/bootstrap/bootstrap.css" rel="stylesheet"/>
<link href="/source/css/bootstrap/bootstrap-theme.css" rel="stylesheet">
<link href="/source/css/misc/pnotify.custom.css" rel="stylesheet"/>
<link href="/source/css/misc/sweetalert.css" rel="stylesheet"/>
<link href="/source/css/page/global.css" rel="stylesheet"/>
<link href="/source/css/page/index.css" rel="stylesheet"/>
<link href="/source/css/page/login.css" rel="stylesheet"/>
<script type="text/javascript" src="/source/scripts/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/source/scripts/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="/source/scripts/misc/pnotify.custom.js"></script>
<script type="text/javascript" src="/source/scripts/misc/sweetalert.min.js"></script>
<script type="text/javascript" src="/source/scripts/controller/login.js"></script>
</head>
<body>
<?php echo View::factory('global/navigator')?>
<div class="global-content">
	<div class="login-wrapper">
		<?php echo isset($content) ? $content : ''; ?>
	</div>
</div>
<?php echo View::factory('global/footer'); ?>
</body>
</html>