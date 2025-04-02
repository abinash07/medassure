CREATE TABLE `medassure`.`tbl_country_master` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `code` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tbl_country_master` ADD `short_name` VARCHAR(255) NULL AFTER `name`;

CREATE TABLE `medassure`.`tbl_enquiry` (`id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `country_id` INT NOT NULL , `mobile` VARCHAR(255) NOT NULL , `other` VARCHAR(255) NULL , `description` TEXT NOT NULL , `example` TEXT NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tbl_enquiry` CHANGE `example` `age` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

