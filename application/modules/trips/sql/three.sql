CREATE TABLE `trips` (
`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
`event_children` BIGINT UNSIGNED ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `events` (
`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
`trip_id` BIGINT UNSIGNED ,
`product_id` BIGINT UNSIGNED ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `products` (
`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
`event_children` BIGINT UNSIGNED ,
`organization_id` BIGINT UNSIGNED ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `organizations` (
`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT ,
`product_children` BIGINT UNSIGNED ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB;
