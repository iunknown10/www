<?php
$activity = $data['activityDetail']['activity'];
$calories = $activity['calories'];
$distance = $activity['distance'];
$steps = $activity['steps'];
$fuelAmt = $activity['fuelAmt'];

echo "<div>";
echo "FUEL: {$fuelAmt};<br/>";
echo "Calories: {$calories};<br/>";
echo "Distance: {$distance};<br/>";
echo "Steps: {$steps};<br/>";
echo "</div>";

echo "<pre>";
var_export($data);
echo "<pre>";