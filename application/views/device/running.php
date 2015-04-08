<?php 
$devices = Kohana::$config->load('system.devices');
?>
<fieldset>
<legend>设备</legend>

<form id="sform" name="sform" action="/device/save_setting" method="post">
设备 <select id="device_id" name="device_id">
	<?php
		foreach($devices as $deviceId => $device) {
			echo "	<option value=\"{$deviceId}\">{$device}</options>\r\n";
		}
	?>
</select>
<br/>
账号 <input type="text" id="username" name="username" />
<br/>
密码 <input type="password" id="password" name="password" />
<br/>
<input type="submit" value=" 保存设置并分享 " />
</form>
</fieldset>