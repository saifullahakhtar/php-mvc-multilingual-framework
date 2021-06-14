<?php

class asaldiProducts extends database {

    public function createProduct($data)
    {
        // Data English
        $product_url_en         = $data['product-url-en'];
        $product_title_en       = $data['product-title-en'];
        $meta_title_en          = $data['meta-title-en'];
        $product_description_en = $data['product-description-en'];
        $meta_keyword_en        = $data['meta-keyword-en'];
        $meta_description_en    = $data['meta-description-en'];
        $short_description_en   = $data['short-description-en'];
        // Data Italian
        $product_url_it         = $data['product-url-it'];
        $product_title_it       = $data['product-title-it'];
        $meta_title_it          = $data['meta-title-it'];
        $product_description_it = $data['product-description-it'];
        $meta_keyword_it        = $data['meta-keyword-it'];
        $meta_description_it    = $data['meta-description-it'];
        $short_description_it   = $data['short-description-it'];
        // Data French
        $product_url_fr         = $data['product-url-fr'];
        $product_title_fr       = $data['product-title-fr'];
        $meta_title_fr          = $data['meta-title-fr'];
        $product_description_fr = $data['product-description-fr'];
        $meta_keyword_fr        = $data['meta-keyword-fr'];
        $meta_description_fr    = $data['meta-description-fr'];
        $short_description_fr   = $data['short-description-fr'];
        // Data Spanish
        $product_url_es         = $data['product-url-es'];
        $product_title_es       = $data['product-title-es'];
        $meta_title_es          = $data['meta-title-es'];
        $product_description_es = $data['product-description-es'];
        $meta_keyword_es        = $data['meta-keyword-es'];
        $meta_description_es    = $data['meta-description-es'];
        $short_description_es   = $data['short-description-es'];
        // Data German
        $product_url_de         = $data['product-url-de'];
        $product_title_de       = $data['product-title-de'];
        $meta_title_de          = $data['meta-title-de'];
        $product_description_de = $data['product-description-de'];
        $meta_keyword_de        = $data['meta-keyword-de'];
        $meta_description_de    = $data['meta-description-de'];
        $short_description_de   = $data['short-description-de'];
        // Images Data
        $single_image_name      = $data['single-image-name'];
        $multiple_images_names  = $data['multiple-images-names'];
        // Data For All
        $product_price_euro     = $data['product-price-euro'];
        $discount_price_euro    = (!empty($data['discount-price-euro']) ? $data['discount-price-euro'] : "0");
        $product_price_pound    = $data['product-price-pound'];
        $discount_price_pound   = (!empty($data['discount-price-pound']) ? $data['discount-price-pound'] : "0");
        $product_stock          = (!empty($data['product-stock']) ? $data['product-stock'] : 000);
        $product_sku            = $data['product-sku'];
        $product_categories     = $data['product-categories'];
        $product_unique_id      = mt_rand(100000, 999999);
        $product_status         = $data['product-status'];

        // Product Insert Query
        $productCreateQuery = "INSERT INTO `products` 
        (`product_unique_id`, 
        `url_de`, 
        `url_en`, 
        `url_es`, 
        `url_fr`, 
        `url_it`, 
        `title_de`, 
        `title_en`, 
        `title_es`, 
        `title_fr`,
        `title_it`, 
        `meta_title_de`, 
        `meta_title_en`, 
        `meta_title_es`, 
        `meta_title_fr`, 
        `meta_title_it`, 
        `description_de`, 
        `description_en`, 
        `description_es`, 
        `description_fr`, 
        `description_it`, 
        `meta_keyword_de`, 
        `meta_keyword_en`, 
        `meta_keyword_es`, 
        `meta_keyword_fr`, 
        `meta_keyword_it`, 
        `meta_description_de`, 
        `meta_description_en`, 
        `meta_description_es`, 
        `meta_description_fr`, 
        `meta_description_it`, 
        `short_description_de`, 
        `short_description_en`, 
        `short_description_es`, 
        `short_description_fr`, 
        `short_description_it`, 
        `prodcut_price_euro`, 
        `discount_price_euro`, 
        `prodcut_price_pound`, 
        `discount_price_pound`,
        `product_stock`, 
        `product_sku`, 
        `featured_image`, 
        `other_images`, 
        `product_status`, 
        `product_categories`) VALUES (?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Product Insert Parameters
        $productCreateParams = [
            "$product_unique_id", 
            "$product_url_de", 
            "$product_url_en", 
            "$product_url_es", 
            "$product_url_fr", 
            "$product_url_it", 
            "$product_title_de", 
            "$product_title_en", 
            "$product_title_es", 
            "$product_title_fr", 
            "$product_title_it", 
            "$meta_title_de", 
            "$meta_title_en", 
            "$meta_title_es", 
            "$meta_title_fr", 
            "$meta_title_it", 
            "$product_description_de", 
            "$product_description_en", 
            "$product_description_es", 
            "$product_description_fr", 
            "$product_description_it", 
            "$meta_keyword_de", 
            "$meta_keyword_en", 
            "$meta_keyword_es", 
            "$meta_keyword_fr", 
            "$meta_keyword_it", 
            "$meta_description_de", 
            "$meta_description_en", 
            "$meta_description_es", 
            "$meta_description_fr", 
            "$meta_description_it", 
            "$short_description_de", 
            "$short_description_en", 
            "$short_description_es", 
            "$short_description_fr", 
            "$short_description_it", 
            "$product_price_euro", 
            "$discount_price_euro", 
            "$product_price_pound", 
            "$discount_price_pound", 
            "$product_stock", 
            "$product_sku", 
            "$single_image_name", 
            "$multiple_images_names", 
            "$product_status", 
            "$product_categories"
        ];

        // Run Insert Query
        if($this->query($productCreateQuery, $productCreateParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
        
    }

    public function readAllProducts()
    {
        // Product Read All Query
        $productsReadQuery = "SELECT * FROM `products`";
        
        // Run Product Query
        if($this->query($productsReadQuery)):
            $productsArray = $this->fetchAll();
            if(!empty($productsArray)):
                return $productsArray;
            else:
                $productsArray = "Products Not Found";
                return($productsArray);
            endif;
        endif;
    }

    public function readSingleProduct($productID)
    {
        // Product Read Single Query
        $productReadQuery = "SELECT * FROM `products` WHERE `product_unique_id` = ?";

        // Product Read Single Params
        $productReadParams = [$productID];
        
        // Run Delete Query
        if($this->query($productReadQuery, $productReadParams)):
            $productSingleArray = $this->fetch();
            return($productSingleArray);
        endif;
    }

    public function updateProduct($data)
    {
        // Data English
        $product_url_en         = $data['product-url-en'];
        $product_title_en       = $data['product-title-en'];
        $meta_title_en          = $data['meta-title-en'];
        $product_description_en = $data['product-description-en'];
        $meta_keyword_en        = $data['meta-keyword-en'];
        $meta_description_en    = $data['meta-description-en'];
        $short_description_en   = $data['short-description-en'];
        // Data Italian
        $product_url_it         = $data['product-url-it'];
        $product_title_it       = $data['product-title-it'];
        $meta_title_it          = $data['meta-title-it'];
        $product_description_it = $data['product-description-it'];
        $meta_keyword_it        = $data['meta-keyword-it'];
        $meta_description_it    = $data['meta-description-it'];
        $short_description_it   = $data['short-description-it'];
        // Data French
        $product_url_fr         = $data['product-url-fr'];
        $product_title_fr       = $data['product-title-fr'];
        $meta_title_fr          = $data['meta-title-fr'];
        $product_description_fr = $data['product-description-fr'];
        $meta_keyword_fr        = $data['meta-keyword-fr'];
        $meta_description_fr    = $data['meta-description-fr'];
        $short_description_fr   = $data['short-description-fr'];
        // Data Spanish
        $product_url_es         = $data['product-url-es'];
        $product_title_es       = $data['product-title-es'];
        $meta_title_es          = $data['meta-title-es'];
        $product_description_es = $data['product-description-es'];
        $meta_keyword_es        = $data['meta-keyword-es'];
        $meta_description_es    = $data['meta-description-es'];
        $short_description_es   = $data['short-description-es'];
        // Data German
        $product_url_de         = $data['product-url-de'];
        $product_title_de       = $data['product-title-de'];
        $meta_title_de          = $data['meta-title-de'];
        $product_description_de = $data['product-description-de'];
        $meta_keyword_de        = $data['meta-keyword-de'];
        $meta_description_de    = $data['meta-description-de'];
        $short_description_de   = $data['short-description-de'];
        // Images Data
        $single_image_name      = $data['single-image-name'];
        $multiple_images_names  = $data['multiple-images-names'];
        // Data For All
        $product_price_euro     = $data['product-price-euro'];
        $discount_price_euro    = (!empty($data['discount-price-euro']) ? $data['discount-price-euro'] : "0");
        $product_price_pound    = $data['product-price-pound'];
        $discount_price_pound   = (!empty($data['discount-price-pound']) ? $data['discount-price-pound'] : "0");
        $product_stock          = (!empty($data['product-stock']) ? $data['product-stock'] : 000);
        $product_sku            = $data['product-sku'];
        $product_categories     = $data['product-categories'];
        $product_unique_id      = $data['product-unique-id'];
        $product_status         = $data['product-status'];

        // Product Update Query
        $productUpdateQuery = "UPDATE `products` SET 
        `url_de` = ?, 
        `url_en` = ?, 
        `url_es` = ?, 
        `url_fr` = ?, 
        `url_it` = ?, 
        `title_de` = ?, 
        `title_en` = ?, 
        `title_es` = ?, 
        `title_fr` = ?, 
        `title_it` = ?, 
        `meta_title_de` = ?, 
        `meta_title_en` = ?, 
        `meta_title_es` = ?, 
        `meta_title_fr` = ?, 
        `meta_title_it` = ?, 
        `description_de` = ?, 
        `description_en` = ?, 
        `description_es` = ?, 
        `description_fr` = ?, 
        `description_it` = ?, 
        `meta_keyword_de` = ?, 
        `meta_keyword_en` = ?, 
        `meta_keyword_es` = ?, 
        `meta_keyword_fr` = ?, 
        `meta_keyword_it` = ?, 
        `meta_description_de` = ?, 
        `meta_description_en` = ?, 
        `meta_description_es` = ?, 
        `meta_description_fr` = ?, 
        `meta_description_it` = ?, 
        `short_description_de` = ?, 
        `short_description_en` = ?, 
        `short_description_es` = ?, 
        `short_description_fr` = ?, 
        `short_description_it` = ?, 
        `prodcut_price_euro` = ?, 
        `discount_price_euro` = ?, 
        `prodcut_price_pound` = ?, 
        `discount_price_pound` = ?, 
        `product_stock` = ?, 
        `product_sku` = ?, 
        `featured_image` = ?, 
        `other_images` = ?, 
        `product_status` = ?, 
        `product_categories` = ?
        WHERE `product_unique_id` = ?";

        // Product Update Params
        $productUpdateParams = [
            "$product_url_de", 
            "$product_url_en", 
            "$product_url_es", 
            "$product_url_fr", 
            "$product_url_it", 
            "$product_title_de", 
            "$product_title_en", 
            "$product_title_es", 
            "$product_title_fr", 
            "$product_title_it", 
            "$meta_title_de", 
            "$meta_title_en", 
            "$meta_title_es", 
            "$meta_title_fr", 
            "$meta_title_it", 
            "$product_description_de", 
            "$product_description_en", 
            "$product_description_es", 
            "$product_description_fr", 
            "$product_description_it", 
            "$meta_keyword_de", 
            "$meta_keyword_en", 
            "$meta_keyword_es", 
            "$meta_keyword_fr", 
            "$meta_keyword_it", 
            "$meta_description_de", 
            "$meta_description_en", 
            "$meta_description_es", 
            "$meta_description_fr", 
            "$meta_description_it", 
            "$short_description_de", 
            "$short_description_en", 
            "$short_description_es", 
            "$short_description_fr", 
            "$short_description_it", 
            "$product_price_euro", 
            "$discount_price_euro", 
            "$product_price_pound", 
            "$discount_price_pound", 
            "$product_stock", 
            "$product_sku", 
            "$single_image_name", 
            "$multiple_images_names", 
            "$product_status", 
            "$product_categories",
            "$product_unique_id",
        ];

        // Run Update Query
        if($this->query($productUpdateQuery, $productUpdateParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
    }

    public function deleteProduct($productID)
    {
        // Product Delete Query
        $productDeleteQuery = "DELETE FROM `products` WHERE `product_unique_id` = ?";

        // Product Delete Params
        $productDeleteParams = [$productID];

        // Run Delete Query
        if($this->query($productDeleteQuery, $productDeleteParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
    }

}

?>