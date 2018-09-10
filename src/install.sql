CREATE TABLE `raymond`.`Member` (
  `member_id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(255) NULL,
  `last_name` VARCHAR(255) NULL,
  `phone` VARCHAR(255) NULL,
  `address` VARCHAR(255) NULL,
  PRIMARY KEY (`member_id`));