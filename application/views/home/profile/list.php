<?php
echo "<table border=\"1\" cellspacing=\"0\">\r\n";

foreach($profiles as $profile) {
	echo "<tr>\r\n";
	echo "<td><img src=\"{$profile->getAvatar()}\" /></td>\r\n";
	echo "<td>{$profile->getNikePlusId()}</td>\r\n";
	echo "<td>{$profile->getScreenName()}</td>\r\n";
	echo "<td>{$profile->getFuelActivationDate('Y-m-d')}</td>\r\n";
	echo "</tr>\r\n";	
}

echo "</table>\r\n";