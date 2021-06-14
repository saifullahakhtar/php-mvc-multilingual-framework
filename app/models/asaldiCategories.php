<?php

class asaldiCategories extends database {

    public function createCategory($data)
    {
        // Category Data
        $category_name_en   = $data['category-name-en'];
        $category_name_it   = $data['category-name-it'];
        $category_name_fr   = $data['category-name-fr'];
        $category_name_es   = $data['category-name-es'];
        $category_name_de   = $data['category-name-de'];
        $category_slug_en   = $data['category-slug-en'];
        $category_slug_it   = $data['category-slug-it'];
        $category_slug_fr   = $data['category-slug-fr'];
        $category_slug_es   = $data['category-slug-es'];
        $category_slug_de   = $data['category-slug-de'];
        $category_image     = (!empty($data['category-image']) ? $data['category-image'] : 0);
        $parent_category    = (!empty($data['parent-category']) ? $data['parent-category'] : 0);
        $category_unique_id = mt_rand(100000, 999999);

        // Category Insert Query
        $categoryCreateQuery = "INSERT INTO `product_categories` 
        (`category_unique_id`, 
        `category_name_de`, 
        `category_name_en`, 
        `category_name_es`, 
        `category_name_fr`, 
        `category_name_it`, 
        `category_slug_de`, 
        `category_slug_en`, 
        `category_slug_es`, 
        `category_slug_fr`, 
        `category_slug_it`, 
        `category_image`, 
        `parent_category_id`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $categoryCreateParams = [
            "$category_unique_id",
            "$category_name_de",
            "$category_name_en",
            "$category_name_es",
            "$category_name_fr",
            "$category_name_it",
            "$category_slug_de",
            "$category_slug_en",
            "$category_slug_es",
            "$category_slug_fr",
            "$category_slug_it",
            "$category_image",
            "$parent_category"
        ];

        // Run Insert Query
        if($this->query($categoryCreateQuery, $categoryCreateParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
    }

    public function readAllCategories()
    {
        $categoriessReadQuery = "SELECT * FROM `product_categories`";
        if($this->query($categoriessReadQuery)):
            $categoriesArray = $this->fetchAll();
            if(!empty($categoriesArray)):
                return $categoriesArray;
            else:
                $categoriesArray = "Categories Not Found";
                return($categoriesArray);
            endif;
        endif;
    }

    public function readSingleCatrgory($categoryID)
    {
        // Category Read Single Query
        $categoryReadQuery = "SELECT * FROM `product_categories` WHERE `category_unique_id` = ?";

        // Category Read Single Params
        $categoryReadParams = [$categoryID];
        
        // Run Delete Query
        if($this->query($categoryReadQuery, $categoryReadParams)):
            $categorySingleArray = $this->fetch();
            return($categorySingleArray);
        endif;
    }

    public function updateCategory($data)
    {
        // Category Updated Data
        $category_name_en   = $data['category-name-en'];
        $category_name_it   = $data['category-name-it'];
        $category_name_fr   = $data['category-name-fr'];
        $category_name_es   = $data['category-name-es'];
        $category_name_de   = $data['category-name-de'];
        $category_slug_en   = $data['category-slug-en'];
        $category_slug_it   = $data['category-slug-it'];
        $category_slug_fr   = $data['category-slug-fr'];
        $category_slug_es   = $data['category-slug-es'];
        $category_slug_de   = $data['category-slug-de'];
        $category_image     = (!empty($data['category-image']) ? $data['category-image'] : 0);
        $parent_category    = (!empty($data['parent-category']) ? $data['parent-category'] : 0);
        $category_unique_id = $data['category-unique-id'];

        // Category Update Query
        $categoryUpdateQuery = "UPDATE `product_categories` SET 
        `category_name_de` = ?, 
        `category_name_en` = ?, 
        `category_name_es` = ?, 
        `category_name_fr` = ?, 
        `category_name_it` = ?, 
        `category_slug_de` = ?, 
        `category_slug_en` = ?, 
        `category_slug_es` = ?, 
        `category_slug_fr` = ?, 
        `category_slug_it` = ?, 
        `category_image` = ?, 
        `parent_category_id` = ? 
        WHERE `category_unique_id` = ?";

        // Category Update params
        $categoryUpdateParams = [
            "$category_name_de",
            "$category_name_en",
            "$category_name_es",
            "$category_name_fr",
            "$category_name_it",
            "$category_slug_de",
            "$category_slug_en",
            "$category_slug_es",
            "$category_slug_fr",
            "$category_slug_it",
            "$category_image",
            "$parent_category",
            "$category_unique_id"
        ];

        // Run Update Query
        if($this->query($categoryUpdateQuery, $categoryUpdateParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
    }

    public function deleteCategory($categoryID)
    {
        // Category Delete Query
        $categoryDeleteQuery = "DELETE FROM `product_categories` WHERE `category_unique_id` = ?";

        // Category Delete Params
        $categoryDeleteParams = [$categoryID];

        // Run Delete Query
        if($this->query($categoryDeleteQuery, $categoryDeleteParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
    }

}

?>