CREATE TABLE `medassure`.`tbl_country_master` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `code` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tbl_country_master` ADD `short_name` VARCHAR(255) NULL AFTER `name`;

CREATE TABLE `medassure`.`tbl_enquiry` (`id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `country_id` INT NOT NULL , `mobile` VARCHAR(255) NOT NULL , `other` VARCHAR(255) NULL , `description` TEXT NOT NULL , `example` TEXT NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tbl_enquiry` CHANGE `example` `age` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

ALTER TABLE `tbl_enquiry` ADD `name` VARCHAR(255) NOT NULL AFTER `id`;

ALTER TABLE `tbl_enquiry` CHANGE `country_id` `country_id` VARCHAR(255) NOT NULL;

CREATE TABLE `medassure`.`tbl_faq` (`id` INT NOT NULL AUTO_INCREMENT , `page` VARCHAR(255) NOT NULL , `title` VARCHAR(255) NOT NULL , `content` LONGTEXT NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `medassure`.`tbl_admin` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `username` VARCHAR(255) NOT NULL , `role` INT NOT NULL , `pass` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `craeted_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `medassure`.`tbl_news` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` LONGTEXT NOT NULL , `link` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


