<?php
echo '<dl>';
echo "<dt>$folder</dt>\r\n";
foreach($files as $file) {
	$path = $folder ? $folder .'/'. $file : $file;
	if(is_dir($directory.'/'.$path)) {
		echo "<dd><a href=\"".URL::site('fuelband/list?folder='.$path)."\">{$file}</a></dd>\r\n";
	} else {
		echo "<dd><a href=\"".URL::site('fuelband/detail?file='.$path)."\">{$file}</a></dd>\r\n";
	}
}
echo '</dl>';