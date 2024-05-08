/*
CREATE TABLE IF NOT EXISTS Images (
    `id` INT NOT NULL AUTO_INCREMENT,
    `image_url` VARCHAR(255),
    `type` VARCHAR(30), --profile photo, product photo, or review photo
    `linked_object_id` INT NOT NULL --id of item in table Users, Products, or Reviews
);

*/