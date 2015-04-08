-- ----------------------------------------------------------
-- 用户信息表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_user`;
CREATE TABLE `ir_user` (
	`user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'iRunning ID',
	`nickname` char(16) NOT NULL DEFAULT '' COMMENT '昵称',
	`name` char(16) NOT NULL DEFAULT '' COMMENT '姓名',
	`email` char(100) NOT NULL DEFAULT '' COMMENT '邮件',
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
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	PRIMARY KEY(`user_id`),
	UNIQUE KEY(`nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=utf8 COMMENT='用户信息表';

-- ----------------------------------------------------------
-- 用户设备表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_user_device`;
CREATE TABLE `ir_user_device` (
	`user_device_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主键',
	`user_id` int(10) NOT NULL DEFAULT '0' COMMENT '用户ID',
	`device_id` tinyint(3) NOT NULL DEFAULT '0' COMMENT '设备ID',
	`username` char(32) NOT NULL DEFAULT '' COMMENT '登录名',
	`password` char(32) NOT NULL DEFAULT '' COMMENT '密码',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	UNIQUE KEY(`user_id`, `device_id`),
	PRIMARY KEY(`user_device_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户设备表';

-- ----------------------------------------------------------
-- 跑步路线表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_route`;
CREATE TABLE `ir_route` (
	`route_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '路线ID',
	`user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户ID',
	`calories` int(10) NOT NULL DEFAULT '0' COMMENT '卡路里',
	`distance` float(10) NOT NULL DEFAULT '0' COMMENT '距离',
	`step` int(10) NOT NULL DEFAULT '0' COMMENT '步数',
	`duration` int(10) NOT NULL DEFAULT '0' COMMENT '时长',
	`weather` char(32) NOT NULL DEFAULT '' COMMENT '天气',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	PRIMARY KEY(`route_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='跑步路线表';

-- ----------------------------------------------------------
-- 用户GPS表
-- Sundj 2015.03.19
-- ----------------------------------------------------------
DROP TABLE IF EXISTS `ir_location`;
CREATE TABLE `ir_location` (
	`location_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '坐标ID',
	`route_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '线路ID',
	`latitude` float(8,8) NOT NULL DEFAULT '0' COMMENT '纬度',
	`longitude` float(8,8) NOT NULL DEFAULT '0' COMMENT '经度',
	`elevation` float(5,4) NOT NULL DEFAULT '0' COMMENT '海拔',
	`create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
	`update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '修改时间',
	PRIMARY KEY(`location_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户GPS表';















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