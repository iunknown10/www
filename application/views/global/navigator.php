<div class="navigator-top">
	<div class="navigator-top-landing">
<?php
if(!Author::instance()->isLogin()) {
?>
		<a href="<?php echo URL::site('login'); ?>">登录</a>
		<a href="<?php echo URL::site('register'); ?>">注册</a>
<?php
} else {
?>		
	<span class="color-efefef">Hi,</span> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Author::nickname(); ?></a> &nbsp;&nbsp; <a href="/logout">退出</a>
		
	<ul class="dropdown-menu navigator-dropdown-menu">
		<li><a href="<?php echo URL::site('home/article/add'); ?>">发布日志</a></li>
		<li><a href="<?php echo URL::site('home/photo/upload'); ?>">上传风景</a></li>
		<li><a href="<?php echo URL::site('home/route/share'); ?>">分享路线</a></li>
		<li role="separator" class="divider"></li>
		<li><a href="<?php echo URL::site('home/article/list'); ?>">我的日志</a></li>
		<li><a href="<?php echo URL::site('home/photo/list'); ?>">我的风景</a></li>
		<li><a href="<?php echo URL::site('home/route/list'); ?>">我的路线</a></li>
		<li><a href="<?php echo URL::site('home/profile'); ?>">我的信息</a></li>
	</ul>
<?php
}
?>
	</div>
	<div class="navigator-top-slogan">
		<span class="big">爱跑步</span>
		<br/>
		<span class="medium">锻造心智，跑出意境</span>
		<span><a href="<?php echo URL::site('register'); ?>"><img src="/source/images/top_button.png" /></a></span>
	</div>
</div>
<div class="navigator-navigator">
	<ul>
		<li class="active"><a href="/">首页</a></li>
		<li><a href="<?php echo URL::site('article'); ?>">分享</a></li>
		<li><a href="<?php echo URL::site('route'); ?>">路线</a></li>
	</ul>
</div>