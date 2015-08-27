
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- main_service_ad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `main_service_ad`;


CREATE TABLE `main_service_ad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`img` VARCHAR(200),
	`depart_chunk_name` VARCHAR(200),
	`depart_chunk_name_en` VARCHAR(200),
	`depart_private_price` VARCHAR(200),
	`depart_private_price_en` VARCHAR(200),
	`depart_sharing_price` VARCHAR(200),
	`depart_sharing_price_en` VARCHAR(200),
	`return_chunk_name` VARCHAR(200),
	`return_chunk_name_en` VARCHAR(200),
	`return_private_price` VARCHAR(200),
	`return_private_price_en` VARCHAR(200),
	`return_sharing_price` VARCHAR(200),
	`return_sharing_price_en` VARCHAR(200),
	`priority` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `main_service_ad_FI_1` (`partner_id`),
	CONSTRAINT `main_service_ad_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- footer_ad
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `footer_ad`;


CREATE TABLE `footer_ad`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`code` VARCHAR(20),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- footer_ad_item
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `footer_ad_item`;


CREATE TABLE `footer_ad_item`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`footer_ad_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`img` VARCHAR(200),
	`link` VARCHAR(200),
	`priority` INTEGER,
	`hide` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `footer_ad_item_FI_1` (`partner_id`),
	CONSTRAINT `footer_ad_item_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `footer_ad_item_FI_2` (`footer_ad_id`),
	CONSTRAINT `footer_ad_item_FK_2`
		FOREIGN KEY (`footer_ad_id`)
		REFERENCES `footer_ad` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- airport
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `airport`;


CREATE TABLE `airport`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`area_id` INTEGER,
	`city_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`lat_lng` VARCHAR(100),
	`partner_link` VARCHAR(1000),
	`priority` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `airport_FI_1` (`city_id`),
	CONSTRAINT `airport_FK_1`
		FOREIGN KEY (`city_id`)
		REFERENCES `ride_city` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- chunk
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chunk`;


CREATE TABLE `chunk`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`service_type_id` INTEGER,
	`chunk_type_id` INTEGER,
	`parent_id` VARCHAR(200),
	`name` VARCHAR(200),
	`depart_name` VARCHAR(200),
	`end_name` VARCHAR(200),
	`depart_name_en` VARCHAR(200),
	`end_name_en` VARCHAR(200),
	`depart_google_pos` VARCHAR(200),
	`end_google_pos` VARCHAR(200),
	`priority` INTEGER default 10,
	`reverse_id` INTEGER,
	`use_google_position` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `chunk_FI_1` (`service_type_id`),
	CONSTRAINT `chunk_FK_1`
		FOREIGN KEY (`service_type_id`)
		REFERENCES `service_type` (`id`),
	INDEX `chunk_FI_2` (`chunk_type_id`),
	CONSTRAINT `chunk_FK_2`
		FOREIGN KEY (`chunk_type_id`)
		REFERENCES `chunk_type` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- service_type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `service_type`;


CREATE TABLE `service_type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- chunk_type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chunk_type`;


CREATE TABLE `chunk_type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- chunk_special
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chunk_special`;


CREATE TABLE `chunk_special`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`airport_id` INTEGER,
	`village_id` INTEGER,
	`district_id` INTEGER,
	`city_id` INTEGER,
	`chunk_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`priority` INTEGER default 10,
	PRIMARY KEY (`id`),
	INDEX `chunk_special_FI_1` (`partner_id`),
	CONSTRAINT `chunk_special_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `chunk_special_FI_2` (`airport_id`),
	CONSTRAINT `chunk_special_FK_2`
		FOREIGN KEY (`airport_id`)
		REFERENCES `airport` (`id`),
	INDEX `chunk_special_FI_3` (`village_id`),
	CONSTRAINT `chunk_special_FK_3`
		FOREIGN KEY (`village_id`)
		REFERENCES `ride_village` (`id`),
	INDEX `chunk_special_FI_4` (`district_id`),
	CONSTRAINT `chunk_special_FK_4`
		FOREIGN KEY (`district_id`)
		REFERENCES `ride_district` (`id`),
	INDEX `chunk_special_FI_5` (`city_id`),
	CONSTRAINT `chunk_special_FK_5`
		FOREIGN KEY (`city_id`)
		REFERENCES `ride_city` (`id`),
	INDEX `chunk_special_FI_6` (`chunk_id`),
	CONSTRAINT `chunk_special_FK_6`
		FOREIGN KEY (`chunk_id`)
		REFERENCES `chunk` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- chunk_dimension
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chunk_dimension`;


CREATE TABLE `chunk_dimension`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`dimension_id` INTEGER,
	`chunk_id` INTEGER,
	`ride_length` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `chunk_dimension_FI_1` (`dimension_id`),
	CONSTRAINT `chunk_dimension_FK_1`
		FOREIGN KEY (`dimension_id`)
		REFERENCES `dimension` (`id`),
	INDEX `chunk_dimension_FI_2` (`chunk_id`),
	CONSTRAINT `chunk_dimension_FK_2`
		FOREIGN KEY (`chunk_id`)
		REFERENCES `chunk` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- depart_time
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `depart_time`;


CREATE TABLE `depart_time`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`depart_time` TIME,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner`;


CREATE TABLE `partner`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`follow_id` INTEGER,
	`partner_type_id` INTEGER,
	`name` VARCHAR(200),
	`domain` VARCHAR(200),
	`phone` VARCHAR(200),
	`call_center` VARCHAR(200),
	`phone_guide` VARCHAR(200),
	`address` VARCHAR(200),
	`bank` VARCHAR(200),
	`bank_code` VARCHAR(200),
	`fb_app_id` VARCHAR(200),
	`fb_app_secret` VARCHAR(200),
	`logo` VARCHAR(200),
	`notify_email` VARCHAR(200),
	`partner_show_userinfo` INTEGER,
	`is_global` INTEGER,
	`favicon` VARCHAR(200),
	`web_title` VARCHAR(200),
	`web_meta_title` VARCHAR(200),
	`web_meta_description` VARCHAR(200),
	`web_meta_keyword` VARCHAR(200),
	`js` TEXT,
	`dichung_domestic_time` INTEGER,
	`dichung_international_time` INTEGER,
	`transport_policy` TEXT,
	`transport_policy_en` TEXT,
	PRIMARY KEY (`id`),
	INDEX `partner_FI_1` (`follow_id`),
	CONSTRAINT `partner_FK_1`
		FOREIGN KEY (`follow_id`)
		REFERENCES `partner` (`id`),
	INDEX `partner_FI_2` (`partner_type_id`),
	CONSTRAINT `partner_FK_2`
		FOREIGN KEY (`partner_type_id`)
		REFERENCES `partner_type` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_type`;


CREATE TABLE `partner_type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_image_category
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_image_category`;


CREATE TABLE `partner_image_category`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_image
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_image`;


CREATE TABLE `partner_image`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`category_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`img` VARCHAR(200),
	`img_en` VARCHAR(200),
	`description` TEXT,
	`description_en` TEXT,
	`link` VARCHAR(200),
	`priority` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `partner_image_FI_1` (`partner_id`),
	CONSTRAINT `partner_image_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `partner_image_FI_2` (`category_id`),
	CONSTRAINT `partner_image_FK_2`
		FOREIGN KEY (`category_id`)
		REFERENCES `partner_image_category` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_follow
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_follow`;


CREATE TABLE `partner_follow`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`domain` VARCHAR(200),
	`name` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `partner_follow_FI_1` (`partner_id`),
	CONSTRAINT `partner_follow_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- driver
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `driver`;


CREATE TABLE `driver`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`name` VARCHAR(200),
	`phone_number` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `driver_FI_1` (`partner_id`),
	CONSTRAINT `driver_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- dimension
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `dimension`;


CREATE TABLE `dimension`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`way` INTEGER,
	`priority` INTEGER,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- chunk_dimension_vehicle
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chunk_dimension_vehicle`;


CREATE TABLE `chunk_dimension_vehicle`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`chunk_dimension_id` INTEGER,
	`partner_vehicle_id` INTEGER,
	`partner_id` INTEGER,
	`chunk_id` INTEGER,
	`vehicle_id` INTEGER,
	`dimension_id` INTEGER,
	`total_minute` INTEGER,
	`from_benxe` VARCHAR(200),
	`to_benxe` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `chunk_dimension_vehicle_FI_1` (`chunk_dimension_id`),
	CONSTRAINT `chunk_dimension_vehicle_FK_1`
		FOREIGN KEY (`chunk_dimension_id`)
		REFERENCES `chunk_dimension` (`id`),
	INDEX `chunk_dimension_vehicle_FI_2` (`partner_vehicle_id`),
	CONSTRAINT `chunk_dimension_vehicle_FK_2`
		FOREIGN KEY (`partner_vehicle_id`)
		REFERENCES `partner_vehicle` (`id`),
	INDEX `chunk_dimension_vehicle_FI_3` (`partner_id`),
	CONSTRAINT `chunk_dimension_vehicle_FK_3`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `chunk_dimension_vehicle_FI_4` (`chunk_id`),
	CONSTRAINT `chunk_dimension_vehicle_FK_4`
		FOREIGN KEY (`chunk_id`)
		REFERENCES `chunk` (`id`),
	INDEX `chunk_dimension_vehicle_FI_5` (`vehicle_id`),
	CONSTRAINT `chunk_dimension_vehicle_FK_5`
		FOREIGN KEY (`vehicle_id`)
		REFERENCES `vehicle` (`id`),
	INDEX `chunk_dimension_vehicle_FI_6` (`dimension_id`),
	CONSTRAINT `chunk_dimension_vehicle_FK_6`
		FOREIGN KEY (`dimension_id`)
		REFERENCES `dimension` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- drop_off
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `drop_off`;


CREATE TABLE `drop_off`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`chunk_dimension_vehicle_id` INTEGER,
	`vehicle_id` INTEGER,
	`chunk_id` INTEGER,
	`dimension_id` INTEGER,
	`partner_id` INTEGER,
	`depart_name` VARCHAR(200),
	`depart_name_en` VARCHAR(200),
	`depart_minute` INTEGER,
	`end_name` VARCHAR(200),
	`end_name_en` VARCHAR(200),
	`end_minute` INTEGER,
	`total_minute` INTEGER,
	`ride_length` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `drop_off_FI_1` (`chunk_dimension_vehicle_id`),
	CONSTRAINT `drop_off_FK_1`
		FOREIGN KEY (`chunk_dimension_vehicle_id`)
		REFERENCES `chunk_dimension_vehicle` (`id`),
	INDEX `drop_off_FI_2` (`vehicle_id`),
	CONSTRAINT `drop_off_FK_2`
		FOREIGN KEY (`vehicle_id`)
		REFERENCES `vehicle` (`id`),
	INDEX `drop_off_FI_3` (`chunk_id`),
	CONSTRAINT `drop_off_FK_3`
		FOREIGN KEY (`chunk_id`)
		REFERENCES `chunk` (`id`),
	INDEX `drop_off_FI_4` (`dimension_id`),
	CONSTRAINT `drop_off_FK_4`
		FOREIGN KEY (`dimension_id`)
		REFERENCES `dimension` (`id`),
	INDEX `drop_off_FI_5` (`partner_id`),
	CONSTRAINT `drop_off_FK_5`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_mapping
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_mapping`;


CREATE TABLE `partner_mapping`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`chunk_dimension_vehicle_id` INTEGER,
	`partner_id` INTEGER,
	`drop_off_id` INTEGER,
	`ride_method_id` INTEGER,
	`chunk_id` INTEGER,
	`dimension_id` INTEGER,
	`vehicle_id` INTEGER,
	`cost` INTEGER,
	`cost_2chair` INTEGER,
	`depart_merged1_discount_percent` FLOAT,
	`depart_merged2_discount_percent` FLOAT,
	`depart_unmerged1_discount_percent` FLOAT,
	`depart_unmerged2_discount_percent` FLOAT,
	`return_merged1_discount_percent` FLOAT,
	`return_merged2_discount_percent` FLOAT,
	`return_unmerged1_discount_percent` FLOAT,
	`return_unmerged2_discount_percent` FLOAT,
	`cost_floor2` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `partner_mapping_FI_1` (`chunk_dimension_vehicle_id`),
	CONSTRAINT `partner_mapping_FK_1`
		FOREIGN KEY (`chunk_dimension_vehicle_id`)
		REFERENCES `chunk_dimension_vehicle` (`id`),
	INDEX `partner_mapping_FI_2` (`partner_id`),
	CONSTRAINT `partner_mapping_FK_2`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `partner_mapping_FI_3` (`drop_off_id`),
	CONSTRAINT `partner_mapping_FK_3`
		FOREIGN KEY (`drop_off_id`)
		REFERENCES `drop_off` (`id`),
	INDEX `partner_mapping_FI_4` (`ride_method_id`),
	CONSTRAINT `partner_mapping_FK_4`
		FOREIGN KEY (`ride_method_id`)
		REFERENCES `ride_method` (`id`),
	INDEX `partner_mapping_FI_5` (`chunk_id`),
	CONSTRAINT `partner_mapping_FK_5`
		FOREIGN KEY (`chunk_id`)
		REFERENCES `chunk` (`id`),
	INDEX `partner_mapping_FI_6` (`dimension_id`),
	CONSTRAINT `partner_mapping_FK_6`
		FOREIGN KEY (`dimension_id`)
		REFERENCES `dimension` (`id`),
	INDEX `partner_mapping_FI_7` (`vehicle_id`),
	CONSTRAINT `partner_mapping_FK_7`
		FOREIGN KEY (`vehicle_id`)
		REFERENCES `vehicle` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_ride
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_ride`;


CREATE TABLE `partner_ride`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`depart_time_id` INTEGER,
	`partner_mapping_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `partner_ride_FI_1` (`depart_time_id`),
	CONSTRAINT `partner_ride_FK_1`
		FOREIGN KEY (`depart_time_id`)
		REFERENCES `depart_time` (`id`),
	INDEX `partner_ride_FI_2` (`partner_mapping_id`),
	CONSTRAINT `partner_ride_FK_2`
		FOREIGN KEY (`partner_mapping_id`)
		REFERENCES `partner_mapping` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_ride_detail
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_ride_detail`;


CREATE TABLE `partner_ride_detail`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_ride_id` INTEGER,
	`driver_id` INTEGER,
	`in_date` DATE,
	`offline_chair_pos` VARCHAR(100),
	`online_chair_pos` VARCHAR(100),
	`vehicle_number` VARCHAR(100),
	PRIMARY KEY (`id`),
	INDEX `partner_ride_detail_FI_1` (`partner_ride_id`),
	CONSTRAINT `partner_ride_detail_FK_1`
		FOREIGN KEY (`partner_ride_id`)
		REFERENCES `partner_ride` (`id`),
	INDEX `partner_ride_detail_FI_2` (`driver_id`),
	CONSTRAINT `partner_ride_detail_FK_2`
		FOREIGN KEY (`driver_id`)
		REFERENCES `driver` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_vehicle
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_vehicle`;


CREATE TABLE `partner_vehicle`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`vehicle_service_id` INTEGER,
	`partner_id` INTEGER,
	`vehicle_id` INTEGER,
	`airport_id` INTEGER,
	`ride_city_id` INTEGER,
	`city_lat_lng` VARCHAR(200),
	`gia_mo_cua` INTEGER,
	`gia_mo_cua_met` INTEGER,
	`dichung_max_chair` INTEGER default 2,
	`return_private_discount_percent` FLOAT default 0,
	`long_distance_km` INTEGER,
	`long_distance_return_private_discount_percent` FLOAT default 0,
	`additional` TEXT,
	PRIMARY KEY (`id`),
	INDEX `partner_vehicle_FI_1` (`vehicle_service_id`),
	CONSTRAINT `partner_vehicle_FK_1`
		FOREIGN KEY (`vehicle_service_id`)
		REFERENCES `vehicle_service` (`id`),
	INDEX `partner_vehicle_FI_2` (`partner_id`),
	CONSTRAINT `partner_vehicle_FK_2`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `partner_vehicle_FI_3` (`vehicle_id`),
	CONSTRAINT `partner_vehicle_FK_3`
		FOREIGN KEY (`vehicle_id`)
		REFERENCES `vehicle` (`id`),
	INDEX `partner_vehicle_FI_4` (`airport_id`),
	CONSTRAINT `partner_vehicle_FK_4`
		FOREIGN KEY (`airport_id`)
		REFERENCES `airport` (`id`),
	INDEX `partner_vehicle_FI_5` (`ride_city_id`),
	CONSTRAINT `partner_vehicle_FK_5`
		FOREIGN KEY (`ride_city_id`)
		REFERENCES `ride_city` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- vehicle_service
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `vehicle_service`;


CREATE TABLE `vehicle_service`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`hide` INTEGER default 0,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_vehicle_image
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_vehicle_image`;


CREATE TABLE `partner_vehicle_image`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_vehicle_id` INTEGER,
	`img` VARCHAR(200),
	`priority` INTEGER,
	`hide` INTEGER default 0,
	PRIMARY KEY (`id`),
	INDEX `partner_vehicle_image_FI_1` (`partner_vehicle_id`),
	CONSTRAINT `partner_vehicle_image_FK_1`
		FOREIGN KEY (`partner_vehicle_id`)
		REFERENCES `partner_vehicle` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_vehicle_cost
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_vehicle_cost`;


CREATE TABLE `partner_vehicle_cost`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_vehicle_id` INTEGER,
	`from_met` INTEGER,
	`to_met` INTEGER,
	`met_step` INTEGER,
	`cost` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `partner_vehicle_cost_FI_1` (`partner_vehicle_id`),
	CONSTRAINT `partner_vehicle_cost_FK_1`
		FOREIGN KEY (`partner_vehicle_id`)
		REFERENCES `partner_vehicle` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_vehicle_detail
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_vehicle_detail`;


CREATE TABLE `partner_vehicle_detail`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_vehicle_id` INTEGER,
	`code` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `partner_vehicle_detail_FI_1` (`partner_vehicle_id`),
	CONSTRAINT `partner_vehicle_detail_FK_1`
		FOREIGN KEY (`partner_vehicle_id`)
		REFERENCES `partner_vehicle` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- pay_method
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pay_method`;


CREATE TABLE `pay_method`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(100),
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`detail` TEXT,
	`detail_en` TEXT,
	`priority` INTEGER,
	`hide` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ride_cost
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ride_cost`;


CREATE TABLE `ride_cost`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_mapping_id` INTEGER,
	`ride_city_id` INTEGER,
	`ride_district_id` INTEGER,
	`ride_village_id` INTEGER,
	`chair` INTEGER,
	`cost` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `ride_cost_FI_1` (`partner_mapping_id`),
	CONSTRAINT `ride_cost_FK_1`
		FOREIGN KEY (`partner_mapping_id`)
		REFERENCES `partner_mapping` (`id`),
	INDEX `ride_cost_FI_2` (`ride_city_id`),
	CONSTRAINT `ride_cost_FK_2`
		FOREIGN KEY (`ride_city_id`)
		REFERENCES `ride_city` (`id`),
	INDEX `ride_cost_FI_3` (`ride_district_id`),
	CONSTRAINT `ride_cost_FK_3`
		FOREIGN KEY (`ride_district_id`)
		REFERENCES `ride_district` (`id`),
	INDEX `ride_cost_FI_4` (`ride_village_id`),
	CONSTRAINT `ride_cost_FK_4`
		FOREIGN KEY (`ride_village_id`)
		REFERENCES `ride_village` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_pay
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_pay`;


CREATE TABLE `partner_pay`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`success_code` VARCHAR(20),
	`properties` VARCHAR(1000),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- partner_pay_error
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `partner_pay_error`;


CREATE TABLE `partner_pay_error`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_pay_id` INTEGER,
	`code` VARCHAR(20),
	`name` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `partner_pay_error_FI_1` (`partner_pay_id`),
	CONSTRAINT `partner_pay_error_FK_1`
		FOREIGN KEY (`partner_pay_id`)
		REFERENCES `partner_pay` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ride_city
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ride_city`;


CREATE TABLE `ride_city`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`priority` INTEGER default 10,
	`name_en` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ride_district
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ride_district`;


CREATE TABLE `ride_district`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`city_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `ride_district_FI_1` (`city_id`),
	CONSTRAINT `ride_district_FK_1`
		FOREIGN KEY (`city_id`)
		REFERENCES `ride_city` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ride_method
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ride_method`;


CREATE TABLE `ride_method`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`code` VARCHAR(20),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ride_village
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ride_village`;


CREATE TABLE `ride_village`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`district_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`location` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `ride_village_FI_1` (`district_id`),
	CONSTRAINT `ride_village_FK_1`
		FOREIGN KEY (`district_id`)
		REFERENCES `ride_district` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ride_street
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ride_street`;


CREATE TABLE `ride_street`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`district_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`location` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `ride_street_FI_1` (`district_id`),
	CONSTRAINT `ride_street_FK_1`
		FOREIGN KEY (`district_id`)
		REFERENCES `ride_district` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ride_village_street
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ride_village_street`;


CREATE TABLE `ride_village_street`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`street_id` INTEGER,
	`village_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `ride_village_street_FI_1` (`street_id`),
	CONSTRAINT `ride_village_street_FK_1`
		FOREIGN KEY (`street_id`)
		REFERENCES `ride_street` (`id`),
	INDEX `ride_village_street_FI_2` (`village_id`),
	CONSTRAINT `ride_village_street_FK_2`
		FOREIGN KEY (`village_id`)
		REFERENCES `ride_village` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- driver_status
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `driver_status`;


CREATE TABLE `driver_status`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- car_rental
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `car_rental`;


CREATE TABLE `car_rental`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- car_rental_mapping
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `car_rental_mapping`;


CREATE TABLE `car_rental_mapping`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`city_id` INTEGER,
	`vehicle_id` INTEGER,
	`car_rental_id` INTEGER,
	`oneway_cost` INTEGER default 0,
	`twoway_cost` INTEGER default 0,
	PRIMARY KEY (`id`),
	INDEX `car_rental_mapping_FI_1` (`partner_id`),
	CONSTRAINT `car_rental_mapping_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `car_rental_mapping_FI_2` (`city_id`),
	CONSTRAINT `car_rental_mapping_FK_2`
		FOREIGN KEY (`city_id`)
		REFERENCES `ride_city` (`id`),
	INDEX `car_rental_mapping_FI_3` (`vehicle_id`),
	CONSTRAINT `car_rental_mapping_FK_3`
		FOREIGN KEY (`vehicle_id`)
		REFERENCES `vehicle` (`id`),
	INDEX `car_rental_mapping_FI_4` (`car_rental_id`),
	CONSTRAINT `car_rental_mapping_FK_4`
		FOREIGN KEY (`car_rental_id`)
		REFERENCES `car_rental` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ticket_type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ticket_type`;


CREATE TABLE `ticket_type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- ticket
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `ticket`;


CREATE TABLE `ticket`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`ticket_type_id` INTEGER,
	`forward_to_partner_id` INTEGER default 0,
	`member_id` INTEGER,
	`ticket_code` VARCHAR(200),
	`partner_pay_id` INTEGER,
	`pay_method_id` INTEGER,
	`transaction_status_id` INTEGER,
	`partner_pay_error_id` INTEGER,
	`partner_id` INTEGER,
	`chunk_id` INTEGER,
	`village_id` INTEGER,
	`street_id` INTEGER,
	`depart_time_id` INTEGER,
	`vehicle_id` INTEGER,
	`ride_method_id` INTEGER,
	`dimension_id` INTEGER,
	`driver_id` INTEGER,
	`driver_status_id` INTEGER,
	`partner_vehicle_detail_id` INTEGER,
	`partner_ride_detail_id` INTEGER,
	`chair_count` INTEGER,
	`in_date` DATE,
	`in_time` TIME,
	`fullname` VARCHAR(200),
	`email` VARCHAR(100),
	`address` VARCHAR(200),
	`cmnd` VARCHAR(200),
	`phone` VARCHAR(20),
	`other_phone` VARCHAR(20),
	`note` VARCHAR(1000),
	`cost` INTEGER,
	`other_cost` INTEGER,
	`ride_length` INTEGER,
	`sharing_id` INTEGER,
	`private_cost` INTEGER,
	`cost_saving` INTEGER,
	`co2_saving` INTEGER,
	`total_seat_sharing` INTEGER,
	`tra_khach` INTEGER default 0,
	`total_cost` INTEGER,
	`company_name` VARCHAR(200),
	`company_address` VARCHAR(100),
	`company_mst` VARCHAR(200),
	`company_address_receive` VARCHAR(200),
	`plane_type` INTEGER,
	`plane_time` DATETIME,
	`plane_number` VARCHAR(200),
	`send_driver_msg` INTEGER,
	`send_pay_success_msg` INTEGER,
	`send_feedback_msg` INTEGER,
	`created_date` DATE,
	`created_at` DATETIME,
	`destroy_at` DATETIME,
	`create_user` INTEGER default 0,
	`create_user_status` INTEGER,
	`email_create_user` INTEGER default 0,
	`feedback` INTEGER default 0,
	`use_name` VARCHAR(200),
	`use_phone` VARCHAR(20),
	`use_cmnd` VARCHAR(20),
	`use_address` VARCHAR(600),
	`vietnam` INTEGER,
	`chair_detail` VARCHAR(600),
	`partner_note` TEXT,
	`hn_tinh_select` INTEGER,
	`is_khu_hoi` INTEGER,
	`partner_domain` VARCHAR(600),
	`lang` VARCHAR(20),
	`remind_customer` INTEGER,
	`remind_customer_finish` INTEGER,
	`remind_partner` INTEGER,
	`sms_mo_id` VARCHAR(20),
	`catch_in_house` INTEGER,
	`second_village_id` INTEGER default 0,
	`second_street_id` INTEGER default 0,
	`second_address` VARCHAR(600),
	`is_khtc` INTEGER,
	`not_merge_cost` INTEGER default 0,
	`is_merge` INTEGER,
	`send_mt_cancel` INTEGER,
	`more_address` VARCHAR(600),
	`more_address_cost` INTEGER,
	`pick_pos` VARCHAR(600),
	`pick_address` VARCHAR(600),
	`drop_pos` VARCHAR(600),
	`drop_address` VARCHAR(600),
	PRIMARY KEY (`id`),
	INDEX `ticket_FI_1` (`ticket_type_id`),
	CONSTRAINT `ticket_FK_1`
		FOREIGN KEY (`ticket_type_id`)
		REFERENCES `ticket_type` (`id`),
	INDEX `ticket_FI_2` (`member_id`),
	CONSTRAINT `ticket_FK_2`
		FOREIGN KEY (`member_id`)
		REFERENCES `member` (`id`),
	INDEX `ticket_FI_3` (`partner_pay_id`),
	CONSTRAINT `ticket_FK_3`
		FOREIGN KEY (`partner_pay_id`)
		REFERENCES `partner_pay` (`id`),
	INDEX `ticket_FI_4` (`pay_method_id`),
	CONSTRAINT `ticket_FK_4`
		FOREIGN KEY (`pay_method_id`)
		REFERENCES `pay_method` (`id`),
	INDEX `ticket_FI_5` (`transaction_status_id`),
	CONSTRAINT `ticket_FK_5`
		FOREIGN KEY (`transaction_status_id`)
		REFERENCES `transaction_status` (`id`),
	INDEX `ticket_FI_6` (`partner_pay_error_id`),
	CONSTRAINT `ticket_FK_6`
		FOREIGN KEY (`partner_pay_error_id`)
		REFERENCES `partner_pay_error` (`id`),
	INDEX `ticket_FI_7` (`partner_id`),
	CONSTRAINT `ticket_FK_7`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `ticket_FI_8` (`chunk_id`),
	CONSTRAINT `ticket_FK_8`
		FOREIGN KEY (`chunk_id`)
		REFERENCES `chunk` (`id`),
	INDEX `ticket_FI_9` (`village_id`),
	CONSTRAINT `ticket_FK_9`
		FOREIGN KEY (`village_id`)
		REFERENCES `ride_village` (`id`),
	INDEX `ticket_FI_10` (`street_id`),
	CONSTRAINT `ticket_FK_10`
		FOREIGN KEY (`street_id`)
		REFERENCES `ride_street` (`id`),
	INDEX `ticket_FI_11` (`depart_time_id`),
	CONSTRAINT `ticket_FK_11`
		FOREIGN KEY (`depart_time_id`)
		REFERENCES `depart_time` (`id`),
	INDEX `ticket_FI_12` (`vehicle_id`),
	CONSTRAINT `ticket_FK_12`
		FOREIGN KEY (`vehicle_id`)
		REFERENCES `vehicle` (`id`),
	INDEX `ticket_FI_13` (`ride_method_id`),
	CONSTRAINT `ticket_FK_13`
		FOREIGN KEY (`ride_method_id`)
		REFERENCES `ride_method` (`id`),
	INDEX `ticket_FI_14` (`dimension_id`),
	CONSTRAINT `ticket_FK_14`
		FOREIGN KEY (`dimension_id`)
		REFERENCES `dimension` (`id`),
	INDEX `ticket_FI_15` (`driver_id`),
	CONSTRAINT `ticket_FK_15`
		FOREIGN KEY (`driver_id`)
		REFERENCES `driver` (`id`),
	INDEX `ticket_FI_16` (`driver_status_id`),
	CONSTRAINT `ticket_FK_16`
		FOREIGN KEY (`driver_status_id`)
		REFERENCES `driver_status` (`id`),
	INDEX `ticket_FI_17` (`partner_vehicle_detail_id`),
	CONSTRAINT `ticket_FK_17`
		FOREIGN KEY (`partner_vehicle_detail_id`)
		REFERENCES `partner_vehicle_detail` (`id`),
	INDEX `ticket_FI_18` (`partner_ride_detail_id`),
	CONSTRAINT `ticket_FK_18`
		FOREIGN KEY (`partner_ride_detail_id`)
		REFERENCES `partner_ride_detail` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- transaction_status
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `transaction_status`;


CREATE TABLE `transaction_status`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(20),
	`name` VARCHAR(100),
	`name_en` VARCHAR(100),
	`name_unmark` VARCHAR(100),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- vehicle
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `vehicle`;


CREATE TABLE `vehicle`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`vehicle_service_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200)  NOT NULL,
	`chair_left` INTEGER default 3,
	`other_info` VARCHAR(1000),
	`speed` INTEGER default 0,
	`priority` INTEGER default 0,
	PRIMARY KEY (`id`),
	INDEX `vehicle_FI_1` (`vehicle_service_id`),
	CONSTRAINT `vehicle_FK_1`
		FOREIGN KEY (`vehicle_service_id`)
		REFERENCES `vehicle_service` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- huser
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `huser`;


CREATE TABLE `huser`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`username` VARCHAR(200)  NOT NULL,
	`password` VARCHAR(200),
	`active` INTEGER default 1,
	`is_admin` INTEGER default 0,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	UNIQUE KEY `NewIndex1` (`username`),
	INDEX `huser_FI_1` (`partner_id`),
	CONSTRAINT `huser_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- menu_position
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `menu_position`;


CREATE TABLE `menu_position`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- menu_category
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `menu_category`;


CREATE TABLE `menu_category`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`position_id` INTEGER,
	`name` VARCHAR(200)  NOT NULL,
	`name_en` VARCHAR(200)  NOT NULL,
	`priority` INTEGER default 10,
	`hide` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `menu_category_FI_1` (`partner_id`),
	CONSTRAINT `menu_category_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `menu_category_FI_2` (`position_id`),
	CONSTRAINT `menu_category_FK_2`
		FOREIGN KEY (`position_id`)
		REFERENCES `menu_position` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- menu_item
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `menu_item`;


CREATE TABLE `menu_item`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`category_id` INTEGER,
	`name` VARCHAR(200)  NOT NULL,
	`name_en` VARCHAR(200)  NOT NULL,
	`link` VARCHAR(200),
	`content` TEXT,
	`content_en` TEXT,
	`priority` INTEGER default 10,
	`hide` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `menu_item_FI_1` (`category_id`),
	CONSTRAINT `menu_item_FK_1`
		FOREIGN KEY (`category_id`)
		REFERENCES `menu_category` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- lang
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lang`;


CREATE TABLE `lang`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(200)  NOT NULL,
	`vn` TEXT,
	`en` TEXT,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- member
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `member`;


CREATE TABLE `member`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`fullname` VARCHAR(200)  NOT NULL,
	`cmnd` VARCHAR(20),
	`phone_number` VARCHAR(20),
	`other_phone` VARCHAR(200),
	`about` TEXT,
	`verified_phone` INTEGER,
	`email` VARCHAR(200)  NOT NULL,
	`verified_email` INTEGER,
	`password` VARCHAR(200),
	`active` INTEGER,
	`fb_id` VARCHAR(200),
	`address` VARCHAR(200),
	`avatar` VARCHAR(200),
	`city_id` INTEGER,
	`job_id` INTEGER,
	`gender_id` INTEGER,
	`old_range_id` INTEGER,
	`marrital_id` INTEGER,
	`bank_code` VARCHAR(200),
	`bank_name` VARCHAR(200),
	`bank_branch` VARCHAR(200),
	`alert_event_sms` INTEGER default 0,
	`alert_ticket_email` INTEGER default 0,
	`facebook_account` INTEGER,
	`is_agency` INTEGER,
	`is_khtc` INTEGER,
	`ride_private_count` INTEGER,
	`ride_share_count` INTEGER,
	`last_private_date` DATE,
	`last_share_date` DATE,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `member_FI_1` (`partner_id`),
	CONSTRAINT `member_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`),
	INDEX `member_FI_2` (`city_id`),
	CONSTRAINT `member_FK_2`
		FOREIGN KEY (`city_id`)
		REFERENCES `ride_city` (`id`),
	INDEX `member_FI_3` (`job_id`),
	CONSTRAINT `member_FK_3`
		FOREIGN KEY (`job_id`)
		REFERENCES `job` (`id`),
	INDEX `member_FI_4` (`gender_id`),
	CONSTRAINT `member_FK_4`
		FOREIGN KEY (`gender_id`)
		REFERENCES `gender` (`id`),
	INDEX `member_FI_5` (`old_range_id`),
	CONSTRAINT `member_FK_5`
		FOREIGN KEY (`old_range_id`)
		REFERENCES `old_range` (`id`),
	INDEX `member_FI_6` (`marrital_id`),
	CONSTRAINT `member_FK_6`
		FOREIGN KEY (`marrital_id`)
		REFERENCES `marrital` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- job
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `job`;


CREATE TABLE `job`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`priority` INTEGER,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- old_range
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `old_range`;


CREATE TABLE `old_range`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`priority` INTEGER,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- marrital
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `marrital`;


CREATE TABLE `marrital`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`priority` INTEGER,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- gender
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `gender`;


CREATE TABLE `gender`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	`priority` INTEGER,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- news
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `news`;


CREATE TABLE `news`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_id` INTEGER,
	`name` VARCHAR(200),
	`name_en` VARCHAR(200),
	`description` TEXT,
	`description_en` TEXT,
	`detail` TEXT,
	`detail_en` TEXT,
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `news_FI_1` (`partner_id`),
	CONSTRAINT `news_FK_1`
		FOREIGN KEY (`partner_id`)
		REFERENCES `partner` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- google_route
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `google_route`;


CREATE TABLE `google_route`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`from_address` VARCHAR(200),
	`to_address` VARCHAR(200),
	`g_start_address` VARCHAR(200),
	`g_start_location` VARCHAR(200),
	`g_end_address` VARCHAR(200),
	`g_end_location` VARCHAR(200),
	`ride_length` INTEGER,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- feedback
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `feedback`;


CREATE TABLE `feedback`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`ticket_id` INTEGER,
	`driver_id` INTEGER,
	`status` INTEGER,
	`message` VARCHAR(200),
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `feedback_FI_1` (`ticket_id`),
	CONSTRAINT `feedback_FK_1`
		FOREIGN KEY (`ticket_id`)
		REFERENCES `ticket` (`id`),
	INDEX `feedback_FI_2` (`driver_id`),
	CONSTRAINT `feedback_FK_2`
		FOREIGN KEY (`driver_id`)
		REFERENCES `driver` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- driver_msg
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `driver_msg`;


CREATE TABLE `driver_msg`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`phone_number` VARCHAR(20),
	`message` VARCHAR(200),
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- driver_msg_log
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `driver_msg_log`;


CREATE TABLE `driver_msg_log`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`phone_number` VARCHAR(20),
	`message` VARCHAR(200),
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- chair_pos
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chair_pos`;


CREATE TABLE `chair_pos`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`partner_mapping_id` INTEGER,
	`chair_type_id` INTEGER,
	`position` VARCHAR(200),
	`price` INTEGER,
	`week_begin_day` VARCHAR(200),
	`week_begin_price` INTEGER,
	`weekend_day` VARCHAR(200),
	`weekend_price` INTEGER,
	`tet_from_day` DATE,
	`tet_end_day` DATE,
	`tet_price` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `chair_pos_FI_1` (`partner_mapping_id`),
	CONSTRAINT `chair_pos_FK_1`
		FOREIGN KEY (`partner_mapping_id`)
		REFERENCES `partner_mapping` (`id`),
	INDEX `chair_pos_FI_2` (`chair_type_id`),
	CONSTRAINT `chair_pos_FK_2`
		FOREIGN KEY (`chair_type_id`)
		REFERENCES `chair_type` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- chair_type
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chair_type`;


CREATE TABLE `chair_type`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- mail_outbox
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `mail_outbox`;


CREATE TABLE `mail_outbox`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`send_to` VARCHAR(200),
	`send_from` VARCHAR(200),
	`send_from_name` VARCHAR(200),
	`message` TEXT,
	`title` VARCHAR(200),
	`priority` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- mail_sent
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `mail_sent`;


CREATE TABLE `mail_sent`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`send_to` VARCHAR(200),
	`send_from` VARCHAR(200),
	`send_from_name` VARCHAR(200),
	`message` TEXT,
	`title` VARCHAR(200),
	`priority` INTEGER,
	`created_at` DATETIME,
	`sent_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- sms
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `sms`;


CREATE TABLE `sms`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(200),
	`message` VARCHAR(200),
	`message_en` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- promotion_email
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `promotion_email`;


CREATE TABLE `promotion_email`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`airport_id` INTEGER,
	`email` VARCHAR(200),
	`phone_number` VARCHAR(200),
	PRIMARY KEY (`id`),
	INDEX `promotion_email_FI_1` (`airport_id`),
	CONSTRAINT `promotion_email_FK_1`
		FOREIGN KEY (`airport_id`)
		REFERENCES `airport` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- invite_email
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `invite_email`;


CREATE TABLE `invite_email`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`member_id` INTEGER,
	`email` TEXT,
	`processed` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `invite_email_FI_1` (`member_id`),
	CONSTRAINT `invite_email_FK_1`
		FOREIGN KEY (`member_id`)
		REFERENCES `member` (`id`)
)Type=InnoDB;

#-----------------------------------------------------------------------------
#-- invite_viber
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `invite_viber`;


CREATE TABLE `invite_viber`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`member_id` INTEGER,
	`phone_number` TEXT,
	`processed` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `invite_viber_FI_1` (`member_id`),
	CONSTRAINT `invite_viber_FK_1`
		FOREIGN KEY (`member_id`)
		REFERENCES `member` (`id`)
)Type=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
