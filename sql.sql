CREATE TABLE `medassure`.`tbl_country_master` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `code` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tbl_country_master` ADD `short_name` VARCHAR(255) NULL AFTER `name`;

CREATE TABLE `medassure`.`tbl_enquiry` (`id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `country_id` INT NOT NULL , `mobile` VARCHAR(255) NOT NULL , `other` VARCHAR(255) NULL , `description` TEXT NOT NULL , `example` TEXT NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tbl_enquiry` CHANGE `example` `age` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL;

ALTER TABLE `tbl_enquiry` ADD `name` VARCHAR(255) NOT NULL AFTER `id`;

ALTER TABLE `tbl_enquiry` CHANGE `country_id` `country_id` VARCHAR(255) NOT NULL;

CREATE TABLE `medassure`.`tbl_faq` (`id` INT NOT NULL AUTO_INCREMENT , `page` VARCHAR(255) NOT NULL , `title` VARCHAR(255) NOT NULL , `content` LONGTEXT NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `medassure`.`tbl_admin` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `username` VARCHAR(255) NOT NULL , `role` INT NOT NULL , `pass` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `craeted_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `medassure`.`tbl_news` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` LONGTEXT NOT NULL , `link` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `medassure`.`tbl_author` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `bio` TEXT NOT NULL , `image` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


CREATE TABLE `medassure`.`tbl_google_rating` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `review` LONGTEXT NOT NULL , `image` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `medassure`.`tbl_category_master` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `slug` VARCHAR(255) NOT NULL , `section` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `medassure`.`tbl_youtube_videos` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `url` VARCHAR(255) NOT NULL , `cat_id` INT NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tbl_youtube_videos` ADD `home_page` INT NULL AFTER `cat_id`;

CREATE TABLE `medassure`.`tbl_patient_testimonial` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` TEXT NOT NULL , `image` VARCHAR(255) NOT NULL , `content` LONGTEXT NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

ALTER TABLE `tbl_patient_testimonial` ADD `author_id` INT NOT NULL AFTER `content`;

ALTER TABLE `tbl_patient_testimonial` ADD `slug` VARCHAR(255) NOT NULL AFTER `title`;

CREATE TABLE `medassure`.`tbl_lowest_quote` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `price` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `medassure`.`tbl_multi_specialty` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `medassure`.`tbl_travel_visa` (`id` INT NOT NULL AUTO_INCREMENT , `slug` VARCHAR(255) NOT NULL , `country_from` VARCHAR(255) NOT NULL , `country_to` VARCHAR(255) NOT NULL , `visa_requirement` VARCHAR(255) NOT NULL , `visa_invitation` VARCHAR(255) NOT NULL , `remark` LONGTEXT NOT NULL , `eligible_for_evisa` VARCHAR(255) NOT NULL , `evisa_fees` VARCHAR(255) NOT NULL , `regular_visa_fee` VARCHAR(255) NOT NULL , `visa_duration` VARCHAR(255) NOT NULL , `visa_application` TEXT NOT NULL , `evisa_application` VARCHAR(255) NOT NULL , `resource` LONGTEXT NOT NULL , `status` INT NOT NULL , `created_by` INT NOT NULL , `created_on` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;



