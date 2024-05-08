CREATE TABLE IF NOT EXISTS `OrderItems` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `order_id` INT NOT NULL,
    `product_id` INT NOT NULL, 
    `quantity` INT NOT NULL,
    `unit_price` DECIMAL(10,2),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`order_id`) REFERENCES `Orders`(id),
    FOREIGN KEY (`product_id`) REFERENCES `Products`(id)
)