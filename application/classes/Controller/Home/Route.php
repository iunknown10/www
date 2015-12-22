<?php
class Controller_Home_Route extends Controller_Render {
	
	
	
	public function action_run() {
		$this->_autoRender = FALSE;
		$activityId = Arr::get($_GET, 'activity_id', 0);
		
		$activity = Dao::factory('Activity')->getActivityByActivityId($activityId);
		$coordOffset = array('longitude' => 0, 'latitude' => 0);
		if($activity instanceof Model_Activity) {
			$coordOffset = Kohana::$config->load($activity->getAppname().'.coordinate_offset');
		}
		
		$coords = Dao::factory('Coord')->getCoordsByActivityId($activityId);
		foreach($coords as $coord) {
			$coord->setLongitudeOffset($coordOffset['longitude']);
			$coord->setLatitudeOffset($coordOffset['latitude']);
		}
		$coords->rewind();
		
		$body = View::factory('route/run')
			->set('activity', $activity)
			->set('coords', $coords);
		$this->response->body($body->render());
	}
	
	public function action_demo() {
		$this->_autoRender = FALSE;
		
		$activityId = Arr::get($_GET, 'activity_id', 0);
		
		$routes = Dao::factory('Route')->getCoordinatesByActivityId($activityId);
		
		$start = $routes->current();
		$routes->rewind();
		
		$html = '<!DOCTYPE HTML>
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
		#tip{
			height:45px;
			background-color:#fff;
			padding-left:10px;
			padding-right:10px;
			border:1px solid #969696;
			position:absolute;
			font-size:12px;
			right:10px;
			bottom:30px;
			border-radius:3px;
			line-height:45px;
		}
		
		#tip input[type=\'button\']{
			height:28px;
			line-height:28px;
			outline:none;
			text-align:center;
			padding-left:5px;
			padding-right:5px;
			color:#FFF;
			background-color:#0D9BF2;
			border:0;
			border-radius: 3px;
			margin-top:8px;
			margin-left:5px;
			cursor:pointer;
			margin-right:10px;
		}
	</style>
</head>
<body>
	<div id="mapContainer"></div>
	<div id="tip">
		<input type="button" value="开始动画" onclick="startAnimation()"/>
	    <input type="button" value="停止动画" onclick="stopAnimation()"/>
	</div>
	
	<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=46d4c2fef15d3c75a470e4da5b455588"></script>
	<script type="text/javascript">
		//初始化地图对象，加载地图
		var map = new AMap.Map("mapContainer",{
				resizeEnable: true,
				//二维地图显示视口
				view: new AMap.View2D({
					//地图中心点
					center:new AMap.LngLat('.$start->getLongitude().','.$start->getLatitude().'),
					//地图显示的缩放级别
					zoom:17 
				}),
				continuousZoomEnable:true
			});	
		AMap.event.addListener(map,"complete",completeEventHandler); 	
		
		//地图图块加载完毕后执行函数
		function completeEventHandler(){  
			marker = new AMap.Marker({
				map:map,
				draggable:true, //是否可拖动
				position:new AMap.LngLat('.$start->getLongitude().','.$start->getLatitude().'),//基点位置
				icon:"http://code.mapabc.com/images/car_03.png", //marker图标，直接传递地址url
				offset:new AMap.Pixel(-26,-13), //相对于基点的位置
				autoRotation:true
			});
			
			lineArr = new Array();
					';
		foreach($routes as $coordinate) {
			//$html .= "lineArr.push(new AMap.LngLat({$coordinate->getLongitude()},{$coordinate->getLatitude()})); \n";
		}
		
		$html .= '	

			//绘制轨迹
			var polyline = new AMap.Polyline({
				map:map,
				path:lineArr,
				strokeColor:"#00A",//线颜色
				strokeOpacity:1,//线透明度
				strokeWeight:5,//线宽
				strokeStyle:"solid"//线样式
			});
			map.setFitView();
		  }
				
				var lineArr = [];
		';

		
		foreach($routes as $coordinate) {
			$html .= "lineArr.push(new AMap.LngLat({$coordinate->getLongitude()},{$coordinate->getLatitude()})); \n";
		}
				
		$html.='
		  function startAnimation() {
			marker.moveAlong(lineArr,50000);
		  }
		  function stopAnimation() {   
			marker.stopMove();
		  }
	</script>
</body>
</html>						

	';
		
		echo $html;
	} 
}