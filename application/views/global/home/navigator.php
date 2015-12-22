<div class="global-top">
	<div class="global-top-wrapper">
		<div class="global-top-logo">爱跑步</div>
		<div class="global-navigator">
			<ul>
				<li class="active"><a href="/">首页</a></li>
				<li><a href="<?php echo URL::site('articles'); ?>">分享</a></li>
				<li><a href="<?php echo URL::site('routes'); ?>">路线</a></li>
			</ul>
		</div>
		<div class="gloal-top-landing">
<?php
if(!Author::instance()->isLogin()) {
?>
		<a href="<?php echo URL::site('login'); ?>">登录</a>
		<a href="<?php echo URL::site('register'); ?>">注册</a>
<?php
} else {
?>
	<span class="color-efefef">Hi,</span> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo Author::nickname(); ?></a> &nbsp;&nbsp; <a href="<?php echo URL::site('logout'); ?>">退出</a>

	<ul class="dropdown-menu global-dropdown-menu">
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
	</div>
</div>
<div class="global-top-menu">
	<div class="global-top-menu-item">
		<a href="<?php echo URL::site('home/article/add'); ?>"><span class="circle rocket"></span>发布日志</a>
		<a href="<?php echo URL::site('home/photo/upload'); ?>"><span class="circle camera"></span>上传风景</a>
		<a href="<?php echo URL::site('home/route/share'); ?>"><span class="circle fly"></span>分享路线</a>
		<a href="<?php echo URL::site('home/profile'); ?>"><span class="circle profile"></span>我的信息</a>
	</div>
	<div class="global-top-menu-link">
		<div class="global-top-menu-link-item"><span id="article-count"><?php echo isset($articleCount) ? $articleCount : 0; ?></span><br/><a href="<?php echo URL::site('home/article/list'); ?>">我的日志</a></div>
		|
		<div class="global-top-menu-link-item"><span id="photo-count"><?php echo isset($photoCount) ? $photoCount : 0; ?></span><br/><a href="<?php echo URL::site('home/photo/list'); ?>">我的风景</a></div>
		|
		<div class="global-top-menu-link-item"><span id="route-count"><?php echo isset($routeCount) ? $routeCount : 0; ?></span><br/><a href="<?php echo URL::site('home/route/list'); ?>">我的路线</a></div>
	</div>
</div>