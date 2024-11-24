/* первичная миграция для работы с Ebay */
CREATE TABLE `manufaсturers` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
     `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
     `meta_title` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
     `meta_keywords` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
     `meta_description` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
     `annotation` mediumtext COLLATE utf8mb4_unicode_ci,
     `description` mediumtext COLLATE utf8mb4_unicode_ci,
     `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
     `last_modify` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     `position` int(11) NOT NULL DEFAULT '0',
     `visible` tinyint(1) NOT NULL DEFAULT '0',
     `name_h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
     PRIMARY KEY (`id`),
     KEY `url` (`url`(100)),
     KEY `name` (`name`(100))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER TABLE ok_products
ADD ebayItemNo BIGINT(12) NULL COMMENT 'номер лота' after `name`,
ADD supplier TEXT NULL COMMENT 'ebay store или имя поставщика' after `ebayItemNo`,
ADD partNumber TEXT NULL COMMENT 'парт-номер запчасти' after `supplier`,
ADD manufacturer_id INT(3) NULL COMMENT 'id производителя из таблицы manufacturers' after `partNumber`;
ADD epid INT(9) NULL COMMENT 'EPID' after `manufacturer_id`;
