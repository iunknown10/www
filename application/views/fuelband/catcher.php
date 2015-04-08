<div>
	<h3><a href="javascript:void(0);">按年抓</a></h3>
	<div id="YearBox">
		<ul>
			<?php
			foreach($years as $year) {
				echo "<li><a href=\"".URL::site('fuelband/fetch?year='.$year)."\">{$year}</a></li>";
			}
			?>
		</ul>
	</div>
</div>
<div>
	<h3><a href="javascript:void(0);">按月抓</a></h3>
	<div id="MonthBox">
		<ul>
			<?php
			foreach($months as $month) {
				$stamp = strtotime($month);
				$year = date('Y', $stamp);
				$month = date('m', $stamp);
				echo "<li><a href=\"".URL::site('fuelband/fetch?year='.$year.'&month='.$month)."\">{$year}-{$month}</a></li>";
			}
			?>
		</ul>
	</div>
</div>
<div>
	<h3><a href="javascript:void(0);">抓一天</a></h3>
	<div id="DayBox">
		<ul>
			<?php
			foreach($days as $day) {
				$stamp = strtotime($day);
				$year = date('Y', $stamp);
				$month = date('m', $stamp);
				$day = date('d', $stamp);
				echo "<li><a href=\"".URL::site('fuelband/fetch?year='.$year.'&month='.$month.'&day='.$day)."\">{$year}-{$month}-{$day}</a></li>\r\n";
			}
			?>
		</ul>
	</div>
</div>

<script type="text/javascript">
function toggle(wrapper) {
	document.getElementById('YearBox').style.display = 'none';
	document.getElementById('MonthBox').style.display = 'none';
	document.getElementById('DayBox').style.display = 'none';

	document.getElementById(wrapper).style.display = 'block';
}
</script>