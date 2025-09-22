-- Create products table
CREATE TABLE `sneakshop`.`products` (`id` INT NOT NULL AUTO_INCREMENT , `category` INT NOT NULL , `name` TEXT NOT NULL , `description` TEXT NOT NULL , `large_description` TEXT NOT NULL , `notation` FLOAT NOT NULL , `price` FLOAT NOT NULL , `caracteristics` JSON NOT NULL , `main_image` TEXT NOT NULL , `stock` INT NOT NULL , `registration` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB; 
-- Set notation default value to 0
ALTER TABLE `products` CHANGE `notation` `notation` FLOAT NULL DEFAULT NULL;
-- Set main_image default value to empty string
ALTER TABLE `products` CHANGE `main_image` `main_image` TEXT NULL DEFAULT '';