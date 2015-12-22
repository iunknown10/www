<div class="register-form">
<?php
if($invitation instanceof Model_Invitation) {
?>
	<table>
		<tr>
			<td>
				<div class="register-table-left">
				<form id="sform" name="sform" action="/register/save" method="post" class="register-form">
					<br/>
					<div class="register-input-out">
						<label>昵称</label> <input type="text" id="nickname" name="nickname" value="" class="register-input" />
						<span></span>
					</div>
					<div class="register-input-out">
						<label>密码</label> <input type="password" id="password" name="password" value="" class="register-input" />
						<span></span>
					</div>
					<div class="register-input-out">
						<label>邮件</label> <input type="text" id="email" name="email" value="" class="register-input" />
						<span></span>
					</div>
					<div class="register-input-out">
						<label>手机</label> <input type="text" id="mobile" name="mobile" value="" class="register-input" />
						<span></span>
					</div>
					<div class="register-input-out">
						<label>性别</label>  <input type="radio" id="gender" name="gender" value="1" checked="checked" /> 男 <input type="radio" id="gender" name="gender" value="0" /> 女
						<span></span>
					</div>
					<div class="register-input-out text-12">
						<label>&nbsp;</label><input id="agreement" name="agreement" type="checkbox" value="1" checked="checked" class="register-checkbox"/> 同意<a href="/protocal.html">《iRunning用户协议》</a>
						<input type="hidden" id="code" name="code" value="<?php echo Arr::get($_GET, 'code', ''); ?>" />
					</div>
					<div class="register-input-out">
						<label>&nbsp;</label> <input type="button" value=" 注册 "  class="register-button" onclick="Register.submit(this);" />
					</div>
				</form>
				</div>
			</td>
			<td>
				<div class="register-table-right">
					注册协议
				</div>
			</td>
		</tr>
	</table>
<?php
}
?>
</div>
<script type="text/javascript">
$(document).ready(function(){
	Register.bindEvent();
});
</script>