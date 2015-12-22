<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>轨迹回放</title>
	<style type="text/css">
		body{
			margin:0;
			height:100%;
			width:100%;
			position:absolute;
		}
		#mapContainer{
			position: absolute;
			top:0;
			left: 0;
			right:0;
			bottom:0;
		}
		.distanceFlag{
			background:#333;
			width:16px;
			height:16px;
			display:block;
			padding:2px;
			font-size:6px;
			color:#fefefe;
			text-align:center;
			line-height:16px;
		}
	</style>
</head>
<body>
<div id="mapContainer"></div>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=46d4c2fef15d3c75a470e4da5b455588"></script>
<script type="text/javascript">
var coords = [];
<?php
foreach($coords as $coord) {
	echo "coords.push({'longitude':{$coord->getLongitude()},'latitude':{$coord->getLatitude()},'altitude':{$coord->getAltitude()},'speed':{$coord->getSpeed()},'distance':{$coord->getDistance()}});\n";
}
?>

/**
 * =weight yellow
 * >weight green
 * <weight red
 */
function gradientColor(x, average, max, min) {
	max = max.toFixed(2);
	min = min.toFixed(2);
	var height = x - average;
	var alpha = height >= 0 ? x - average : average - x;
	var ratio = height >= 0 ? alpha / (max - average) : alpha / (average - min);
	var y = (1 - ratio) * 235;
	
	var B = 0;
	var R = 235;
	var G = 235;

	if(height >= 0) {
		R = y;
	} else {
		G = y;
	}

	return 'rgb('+ parseInt(R) +', '+ parseInt(G) +', '+ B +')';
}

var positions = [];
var start = coords[0];
var over = coords[coords.length - 1];
var speedMax = 0;
var speedMin = 999;
var speedSum = 0;
var speedAverage = 0;
var speedLength = 0;
var lines = [];

var acoords = [];
for(var i = 0; i < coords.length; i++) {
	if(i % 10 == 0) {
		acoords.push(coords[i]);
	}
}

coords = acoords;
var line = [];
for(var i = 0; i < coords.length; i++) {
	var next = i + 1;
	var last = i - 1;

	var coord = coords[i];
	var nextCoord = next < coords.length ? coords[next] : null;
	var lastCoord = last > 0 ? coords[last] : null;
	
	speedMax = coord.speed > speedMax ? coord.speed : speedMax;
	speedMin = coord.speed != 0 && coord.speed < speedMin ? coord.speed : speedMin;
	speedSum = speedSum + coord.speed;

	positions.push([coord.longitude, coord.latitude]);
	
	line.push(coord);
	if(!nextCoord || Math.abs(coord.speed - nextCoord.speed) > 0) {
		lines.push(line);
		line = [];
		line.push(coord);
	}
}
speedAverage = speedSum / coords.length;
speedLength = speedMax - speedMin;

console.log(speedAverage);
console.log(speedMax);
console.log(speedMin);


//初始化地图对象，加载地图
var map = new AMap.Map("mapContainer",{
	resizeEnable: true,
	view: new AMap.View2D({
		center : new AMap.LngLat(start.longitude, start.latitude),
		zoom : 1700
	}),
	continuousZoomEnable : true
});	
AMap.event.addListener(map, "complete", completeEventHandler); 	


//地图图块加载完毕后执行函数
function completeEventHandler(){

	startMarker = new AMap.Marker({
		map : map,
		draggable : true, //是否可拖动
		position : new AMap.LngLat(start.longitude, start.latitude),//基点位置
		offset : new AMap.Pixel(-6, -6), //相对于基点的位置
		autoRotation : true,
		icon : new AMap.Icon({
			image : "/source/images/route_icon_start_end.png",
			size : new AMap.Size(13, 13),
			imageOffset : new AMap.Pixel(0, 0)
		})
	});

	overMarker = new AMap.Marker({
		map : map,
		draggable : true, //是否可拖动
		position : new AMap.LngLat(over.longitude, over.latitude),//基点位置
		offset : new AMap.Pixel(-6, -6), //相对于基点的位置
		autoRotation : true,
		icon : new AMap.Icon({
			image : "/source/images/route_icon_start_end.png",
			size : new AMap.Size(13, 13),
			imageOffset : new AMap.Pixel(0, -13)
		})
	});

	for(var i = 0; i < lines.length; i++) {
		var coords = lines[i];

		var line = [];
		for(var n = 0; n < coords.length; n++) {
			var coord = coords[n];
			line.push(new AMap.LngLat(coord.longitude, coord.latitude));
		}

		var color = gradientColor(coord.speed, speedAverage, speedMax, speedMin);
		
		polyline = new AMap.Polyline({
			map : map,
			path : line,
			strokeColor : color,//线颜色
			strokeOpacity : 1,//线透明度
			strokeWeight : 4,//线宽
			strokeStyle : "solid"//线样式
		});
	}
	map.setFitView();

	circle = new AMap.Circle({ 
		center : new AMap.LngLat(start.longitude, start.latitude),// 圆心位置
		radius : 50000, //半径
		strokeColor : '', //线颜色
		strokeOpacity: 0, //线透明度
		strokeWeight: 0, //线粗细度
		fillColor: '#000', //填充颜色
		fillOpacity: 0.35//填充透明度
	}); 
	circle.setMap(map);
	
}

</script>
</body>
</html>