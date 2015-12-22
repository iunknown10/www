-- ----------------------------------------------------------
-- 邀请码表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_invitation`;
CREATE TABLE `ir_invitation` (
	`invitation_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键ID',
	`code` char(24) NOT NULL DEFAULT '0' COMMENT '邀请码',
	`user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户ID',
	`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态：1有效，0无效',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
	PRIMARY KEY(`invitation_id`)
)ENGINE=InnoDB AUTO_INCREMENT=10001 DEFAULT CHARSET=utf8 COMMENT='邀请码表';

-- ----------------------------------------------------------
-- 用户信息表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_user`;
CREATE TABLE `ir_user` (
	`user_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'iRunning ID',
	`nickname` char(16) NOT NULL DEFAULT '' COMMENT '昵称',
	`password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
	`name` char(16) NOT NULL DEFAULT '' COMMENT '姓名',
	`email` char(100) NOT NULL DEFAULT '' COMMENT '邮件',
	`gender` tinyint(1) NOT NULL DEFAULT '0' COMMENT '性别 1男 0女 -1未知',
	`mobile` char(15) NOT NULL DEFAULT '' COMMENT '手机',
	`wechat` char(32) NOT NULL DEFAULT '' COMMENT '微信号',
	`qq` char(16) NOT NULL DEFAULT '' COMMENT 'QQ号',
	`avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
	`birth_year` int(8) NOT NULL DEFAULT '0' COMMENT '出生年份',
	`birth_month` int(8) NOT NULL DEFAULT '0' COMMENT '出生月份',
	`birth_day` int(8) NOT NULL DEFAULT '0' COMMENT '出生日期',
	`birth_place` char(20) NOT NULL DEFAULT '' COMMENT '出生地',
	`live_place` char(20) NOT NULL DEFAULT '' COMMENT '常住地',
	`id_card` char(18) NOT NULL DEFAULT '' COMMENT '身份证',
	`id_card_image` varchar(255) NOT NULL DEFAULT '' COMMENT '身份证图片',
	`job` varchar(100) NOT NULL DEFAULT '' COMMENT '职业',
	`introducer` int(10) NOT NULL DEFAULT '0' COMMENT '介绍人ID',
	`is_activated` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否已激活',
	`salt` char(6) NOT NULL DEFAULT '' COMMENT '随机字符',
	`timezone` tinyint(3) NOT NULL DEFAULT '0' COMMENT '时区',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	PRIMARY KEY(`user_id`),
	UNIQUE KEY(`email`),
	UNIQUE KEY(`nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=10001 DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------------------------------------
-- 用户设备表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_user_device`;
CREATE TABLE `ir_user_device` (
	`user_device_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
	`user_id` bigint(10) NOT NULL DEFAULT '0' COMMENT '用户ID',
	`device_id` tinyint(3) NOT NULL DEFAULT '0' COMMENT '设备ID',
	`username` char(32) NOT NULL DEFAULT '' COMMENT '登录名',
	`password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	UNIQUE KEY(`user_id`, `device_id`),
	PRIMARY KEY(`user_device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户设备表';

-- ----------------------------------------------------------
-- 跑步活动表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_activity`;
CREATE TABLE `ir_activity` (
	`activity_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '路线ID',
	`user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户ID',
	`appname` char(32) NOT NULL DEFAULT '' COMMENT '应用名称:suunto, running',
	`extra_id` char(32) NOT NULL DEFAULT '' COMMENT '外部id: nike:activeId, suunto:MoveID',
	`start_time` int(10) NOT NULL DEFAULT '0' COMMENT '起始时间',
	`duration` int(10) NOT NULL DEFAULT '0' COMMENT '持续时间',
	`distance` double NOT NULL DEFAULT '0' COMMENT '距离',
	`heartrate_average` int(10) NOT NULL DEFAULT '0' COMMENT '平均心率',
	`heartrate_zone` int(10) NOT NULL DEFAULT '0' COMMENT '心率区间',
	`heartrate_min` int(10) NOT NULL DEFAULT '0' COMMENT '最小心率',
	`heartrate_max` int(10) NOT NULL DEFAULT '0' COMMENT '最大心率',
	`feeling` int(10) NOT NULL DEFAULT '0' COMMENT '感受',
	`calories` int(10) NOT NULL DEFAULT '0' COMMENT '热量',
	`speed_average` double NOT NULL DEFAULT '0' COMMENT '平均速度',
	`speed_max` double NOT NULL DEFAULT '0' COMMENT '最大速度',
	`ascent` double NOT NULL DEFAULT '0' COMMENT '上升',
	`descent` double NOT NULL DEFAULT '0' COMMENT '下降',
	`depth_max` int(10) NOT NULL DEFAULT '0' COMMENT '',
	`depth_average` int(10) NOT NULL DEFAULT '0' COMMENT '',
	`temperature_min` double NOT NULL DEFAULT '0' COMMENT '最低温度',
	`temperature_max` double NOT NULL DEFAULT '0' COMMENT '最高温度',
	`temperature_average` double NOT NULL DEFAULT '0' COMMENT '平均温度',
	`cadence_max` int(10) NOT NULL DEFAULT '0' COMMENT '最大步频',
	`cadence_average` int(10) NOT NULL DEFAULT '0' COMMENT '平均步频',
	`latitude` double NOT NULL DEFAULT '0' COMMENT '纬度',
	`longitude` double NOT NULL DEFAULT '0' COMMENT '经度',
	`altitude_high` double NOT NULL DEFAULT '0' COMMENT '最高海拔',
	`altitude_low` double NOT NULL DEFAULT '0' COMMENT '最低海拔',
	`time_ascent` int(10) NOT NULL DEFAULT '0' COMMENT '上升时间',
	`time_descent` int(10) NOT NULL DEFAULT '0' COMMENT '下降时间',
	`time_flat` int(10) NOT NULL DEFAULT '0' COMMENT '水平时间',
	`epoc_peak` int(10) NOT NULL DEFAULT '0' COMMENT '过量耗氧',
	`oxygen_consumption_max` int(10) NOT NULL DEFAULT '0' COMMENT '最大耗氧量',
	`breathing_frequency_max` int(10) NOT NULL DEFAULT '0' COMMENT '最大呼吸频率',
	`year` int(10) NOT NULL DEFAULT '0' COMMENT '年',
	`month` int(10) NOT NULL DEFAULT '0' COMMENT '月',
	`day` int(10) NOT NULL DEFAULT '0' COMMENT '日',
	`timezone_offset` int(10) NOT NULL DEFAULT '0' COMMENT '时区偏移，单位：秒',
	`status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '状态：-1删除 0默认 1已下载详细',
	`notes` text NOT NULL DEFAULT '' COMMENT '备注',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	PRIMARY KEY(`activity_id`),
	KEY(`appname`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='跑步活动表';

-- ----------------------------------------------------------
-- 线路坐标表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_coord`;
CREATE TABLE `ir_coord` (
	`coord_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '坐标ID',
	`activity_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '线路ID',
	`latitude` double NOT NULL DEFAULT '0' COMMENT '纬度',
	`longitude` double NOT NULL DEFAULT '0' COMMENT '经度',
	`altitude` double NOT NULL DEFAULT '0' COMMENT '海拔',
	`distance` double NOT NULL DEFAULT '0' COMMENT '距离',
	`speed` double NOT NULL DEFAULT '0' COMMENT '速度:米／秒',
	`heartrate` double NOT NULL DEFAULT '0' COMMENT '心率:次／分',
	`time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '时间',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	PRIMARY KEY(`coord_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='线路坐标表';


-- ----------------------------------------------------------
-- 字段对应关系表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_schema`;
CREATE TABLE `ir_schema` (
	`schema_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '坐标ID',
	`appname` char(32) NOT NULL DEFAULT '' COMMENT '应用名称:suunto, running',
	`schema` char(32) NOT NULL DEFAULT '' COMMENT '字段',
	`app_schema` char(32) NOT NULL DEFAULT '0' COMMENT '应用字段',
	`app_schema_id` int(10) NOT NULL DEFAULT '0' COMMENT '应用字段索引',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	PRIMARY KEY(`schema_id`),
	KEY(`appname`),
	UNIQUE KEY(`appname`, `schema`, `app_schema`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='字段对应关系表';


-- ----------------------------------------------------------
-- 文章表
-- Sundj 2015.12.02
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_article`;
CREATE TABLE `ir_article` (
	`article_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
	`title` char(32) NOT NULL DEFAULT '' COMMENT '标题',
	`content` text NOT NULL DEFAULT '' COMMENT '内容',
	`user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户ID',
	`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态 -1删除 0正常',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	PRIMARY KEY(`article_id`),
	KEY(`user_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章表';

-- ----------------------------------------------------------
-- 照片表
-- Sundj 2015.12.02
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_photo`;
CREATE TABLE `ir_photo` (
	`photo_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '照片ID',
	`title` char(32) NOT NULL DEFAULT '' COMMENT '标题',
	`user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户ID',
	`path` text NOT NULL DEFAULT '' COMMENT '存储路径',
	`mime` varchar(255) NOT NULL DEFAULT '' COMMENT '图片类型',
	`status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态 -1删除 0正常',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	PRIMARY KEY(`photo_id`),
	KEY(`user_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='照片表';










-- ----------------------------------------------------------
-- 账户信息表
-- Sundj 2014.12.09
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_profile`;
CREATE TABLE `ir_profile` (
	`profile_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
	`id` bigint(20) NOT NULL DEFAULT '0' COMMENT 'id，不知是啥',
	`nikePlusId` char(50) NOT NULL DEFAULT '0' COMMENT 'nike+ id',
	`email` char(100) NOT NULL DEFAULT '' COMMENT '邮件',
	`screenName` char(255) NOT NULL DEFAULT '' COMMENT '用户名',
	`fuelActivationDate` char(50) NOT NULL DEFAULT '' COMMENT 'nike fuel 激活日期',
	`avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
	`profile_data` text NOT NULL DEFAULT '' COMMENT '详细数据',
	`fuel_data` text NOT NULL DEFAULT '' COMMENT 'fuel数据',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
PRIMARY KEY(`profile_id`),
UNIQUE KEY(`nikePlusId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='账户信息表';


-- ----------------------------------------------------------
-- Fuel数据表
-- Sundj 2014.12.09
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_fuel`;
CREATE TABLE `ir_fuel` (
`fuel_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
`day` char(100) NOT NULL DEFAULT '' COMMENT 'id，不知是啥',
`data` text NOT NULL DEFAULT '' COMMENT '数据',
`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
PRIMARY KEY(`fuel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Fuel数据表';