-- Create Admin User Table
CREATE TABLE `products` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) NOT NULL UNIQUE,
    `email` varchar(255) NOT NULL UNIQUE,
    `password` varchar(255) NOT NULL,
);

-- Create Products Table
CREATE TABLE `products` (
    -- Product IDs
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `product_unique_id` varchar(255) NOT NULL UNIQUE,
    -- Product Title
    `title_de` varchar(255),
    `title_en` varchar(255) NOT NULL,
    `title_es` varchar(255),
    `title_fr` varchar(255),
    `title_it` varchar(255),
    -- Product Meta Title
    `meta_title_de` varchar(255),
    `meta_title_en` varchar(255),
    `meta_title_es` varchar(255),
    `meta_title_fr` varchar(255),
    `meta_title_it` varchar(255),
    -- Product Description
    `description_de` text,
    `description_en` text NOT NULL,
    `description_es` text,
    `description_fr` text,
    `description_it` text,
    -- Product Meta Description
    `meta_description_de` text,
    `meta_description_en` text NOT NULL,
    `meta_description_es` text,
    `meta_description_fr` text,
    `meta_description_it` text,
    -- Others
    `prodcut_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
    `product_sale_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
    `product_stock` int(10),
    `product_sku` bigint(20),
    `featured_image` varchar(255),
    `other_images_media_id` varchar(255),
    `publish_date` varchar(255),
    `product_status` varchar(50),
    `product_slug` varchar(255),
    `product_categories` varchar(255),
    PRIMARY KEY (`id`)
);

-- Create Product Categories Table
CREATE TABLE `product_categories` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `category_name` varchar(255) NOT NULL UNIQUE,
    `category_slug` varchar(255),
    PRIMARY KEY (`id`)
);

-- Create Posts Table
CREATE TABLE `posts` (
    -- Post IDs
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `post_unique_id` varchar(255) NOT NULL UNIQUE,
    -- Post Title
    `title_de` varchar(255),
    `title_en` varchar(255) NOT NULL,
    `title_es` varchar(255),
    `title_fr` varchar(255),
    `title_it` varchar(255),
    -- Post Meta Title
    `meta_title_de` varchar(255),
    `meta_title_en` varchar(255),
    `meta_title_es` varchar(255),
    `meta_title_fr` varchar(255),
    `meta_title_it` varchar(255),
    -- Post Description
    `description_de` text,
    `description_en` text NOT NULL,
    `description_es` text,
    `description_fr` text,
    `description_it` text,
    -- Others
    `featured_image` varchar(255),
    `publish_date` varchar(255),
    `product_status` varchar(50),
    `post_slug` varchar(255),
    PRIMARY KEY (`id`)
);

-- Create Posts Category Table
CREATE TABLE `post_categories` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `category_name` varchar(255) NOT NULL UNIQUE,
    `category_slug` varchar(255),
    PRIMARY KEY (`id`)
);

-- Create Pages Table
CREATE TABLE `pages` (
    -- Page IDs
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `page_unique_id` varchar(255) NOT NULL UNIQUE,
    -- Post Title
    `title_de` varchar(255),
    `title_en` varchar(255) NOT NULL,
    `title_es` varchar(255),
    `title_fr` varchar(255),
    `title_it` varchar(255),
    -- Post Meta Title
    `meta_title_de` varchar(255),
    `meta_title_en` varchar(255),
    `meta_title_es` varchar(255),
    `meta_title_fr` varchar(255),
    `meta_title_it` varchar(255),
    -- Post Description
    `page_data_de` text,
    `page_data_en` text NOT NULL,
    `page_data_es` text,
    `page_data_fr` text,
    `page_data_it` text,
    -- Others
    `publish_date` varchar(255),
    `page_status` varchar(50),
    `page_slug` varchar(255),
);

-- Create Media Table
CREATE TABLE `media` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `image_name` varchar(255) NOT NULL UNIQUE,
    PRIMARY KEY (`id`)
);

-- Create Newsletter Table
CREATE TABLE `newsletter` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `email` varchar(255) NOT NULL UNIQUE,
    PRIMARY KEY (`id`)
);