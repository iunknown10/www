<div class="profile-wrapper">
	<div class="profile-form">
		<form id="sform" name="sform" action="/register/save" method="post" class="profile-form">
			<div class="profile-input-out">
				<label>昵称</label> <?php echo $user->getNickname(); ?>
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>姓名</label> <input type="text" id="name" name="name" value="<?php echo $user->getName(); ?>" class="profile-input" />
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>邮件</label> <input type="text" id="email" name="email" value="<?php echo $user->getEmail(); ?>" class="profile-input" />
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>手机</label> <input type="text" id="mobile" name="mobile" value="<?php echo $user->getMobile(); ?>" class="profile-input" />
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>性别</label>  <input type="radio" id="gender" name="gender" value="1" <?php if($user->getGender() == '1'){echo 'checked="checked" ';} ?>/> 男 <input type="radio" id="gender" name="gender" value="0" <?php if($user->getGender() == '0'){echo 'checked="checked" ';} ?>/> 女
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>微信</label> <input type="text" id="wechat" name="wechat" value="<?php echo $user->getWechat(); ?>" class="profile-input" />
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>QQ</label> <input type="text" id="qq" name="qq" value="<?php echo $user->getQq(); ?>" class="profile-input" />
				<span></span>
			</div>
			<!-- 
			<div class="profile-input-out">
				<label>头像</label> <input type="button" id="avatar" name="avatar" value=" 上传 " class="btn btn-default" />
			</div>
			-->
			<div class="profile-input-out">
				<label>身份证</label> <input type="text" id="id_card" name="id_card" value="<?php echo $user->getIdCard(); ?>" class="profile-input" />
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>籍贯</label> 
				<select id="birth_place" name="birth_place">
					<option value=""></option>
				</select>
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>居住地</label> 
				<select id="live_place" name="live_place">
					<option value=""></option>
				</select>
				<span></span>
			</div>
			<div class="profile-input-out">
				<label>&nbsp;</label> <input type="button" value=" 保存 "  class="profile-button" onclick="Profile.submit(this);" />
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
<?php
echo "var birthPlace = '".$user->getBirthPlace()."';\n";
echo "var livePlace = '".$user->getLivePlace()."';\n";
?>
$(document).ready(function(){
	Profile.bindEvent();
	Profile.setDefaultOption('birth_place', birthPlace);
	Profile.setDefaultOption('live_place', livePlace);
});
</script>