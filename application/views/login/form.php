
<form id="iform" name="iform" class="login-form" action="<?php echo URL::site('/login/land'); ?>" method="post">
	<div class="login-input-out">
		<input type="text" id="name" name="name" value="用户名／邮箱／手机" class="login-input" />
	</div>
	<div class="login-input-out">
		<input type="password" id="password" name="password" value="" class="login-input" />
	</div>
	<div class="login-input-out text-left">
		<input type="checkbox" id="remember" name="remember" value="1" checked="checked" class="login-checkbox" /> 记住我
	</div>
	<div class="login-input-out">
		<input id="submit" type="button" value=" 登 录 " class="login-button" onclick="Login.submit(this);" />
	</div>
	<div class="login-input-out text-center"><a href="/password/forgot">忘记密码？</a></div>
</form>

<script type="text/javascript">
$(document).ready(function(){
	Login.bindEvent();
});
</script>