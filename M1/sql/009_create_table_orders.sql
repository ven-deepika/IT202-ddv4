CREATE TABLE IF NOT EXISTS `Orders` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `user_id` INT NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `address` VARCHAR(100) NOT NULL,
    `payment_method` VARCHAR(100) NOT NULL,
    `money_recieved` DECIMAL(10,2) NOT NULL,
    `first_name` VARCHAR(60) NOT NULL,
    `last_name`VARCHAR(60) NOT NULL,
    PRIMARY KEY (`id`),
)