/* первичная миграция для работы с Ebay */
CREATE TABLE `manufaсturers` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) DEFAULT NULL,
    `description` MEDIUMTEXT DEFAULT NULL,
    `image` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=INNODB;


ALTER TABLE ok_products
ADD ebayItemNo INT(12) NULL COMMENT 'номер лота' after `name`,
ADD supplier TEXT NULL COMMENT 'ebay store или имя поставщика' after `ebayItemNo`,
ADD partNumber TEXT NULL COMMENT 'парт-номер запчасти' after `supplier`,
ADD manufacturer_id INT(3) NULL COMMENT 'id производителя из таблицы manufacturers' after `patrNumber`;
