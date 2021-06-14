<?php

class asaldiVariations extends database {

    public function createVariations($data)
    {
        // Data
        $count_fields      = $data['count-fields'];
        $collection_name   = $data['collection-name'];
        $product_unique_id = $data['product-unique-id'];
        $var_name_en       = $data['var-name-en'];
        $var_name_it       = $data['var-name-it'];
        $var_name_fr       = $data['var-name-fr'];
        $var_name_es       = $data['var-name-es'];
        $var_name_de       = $data['var-name-de'];
        $var_value_en      = $data['var-value-en'];
        $var_value_it      = $data['var-value-it'];
        $var_value_fr      = $data['var-value-fr'];
        $var_value_es      = $data['var-value-es'];
        $var_value_de      = $data['var-value-de'];

        // Data Loop
        for($i = 0; $i <= $count_fields; $i++):

            // Variation Unique ID
            $variation_unique_id = mt_rand(100000, 999999);

            // Variation Insert Query
            $variationInsertQuery = "INSERT INTO `product_variations` 
            (`variation_unique_id`, 
            `product_unique_id`, 
            `variation_collection_name`, 
            `var_name_de`, 
            `var_name_en`, 
            `var_name_es`, 
            `var_name_fr`, 
            `var_name_it`, 
            `var_value_de`, 
            `var_value_en`, 
            `var_value_es`, 
            `var_value_fr`, 
            `var_value_it`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Variation Insert Params
            $variationInsertParams = [
                "$variation_unique_id",
                "$product_unique_id",
                "$collection_name",
                "$var_name_de[$i]",
                "$var_name_en[$i]",
                "$var_name_es[$i]",
                "$var_name_fr[$i]",
                "$var_name_it[$i]",
                "$var_value_de[$i]",
                "$var_value_en[$i]",
                "$var_value_es[$i]",
                "$var_value_fr[$i]",
                "$var_value_it[$i]",
            ];

            // Run Insert Query
            if($this->query($variationInsertQuery, $variationInsertParams)):
                if($i == $count_fields):
                    return(TRUE);
                endif;
            else:
                if($i == $count_fields):
                    return(FALSE);
                endif;
            endif;

        endfor;
    }

    public function readAllProducts()
    {
        // Get Products Query
        $getProductsQuery = "SELECT * FROM `products`";

        // Run Get Query
        if($this->query($getProductsQuery)):
            $productsList = $this->fetchAll();
            if(!empty($productsList)):
                return $productsList;
            else:
                $productsList = "Products Not Found";
                return($productsList);
            endif;
        else:
            return(FALSE);
        endif;
    }

    public function readAllVariations()
    {
        // Get Variations Query
        $getVariationsQuery = "SELECT DISTINCT variation_collection_name, product_unique_id FROM `product_variations`";

        // Run Get Query
        if($this->query($getVariationsQuery)):
            $variationsList = $this->fetchAll();
            if(!empty($variationsList)):
                return $variationsList;
            else:
                $variationsList = "Variations Not Found";
                return($variationsList);
            endif;
        else:
            $variationsList = "Variations Not Found";
            return($variationsList);
        endif;
    }

    public function readSingleVariation($variationProductID)
    {
        // Get Single Variations Query
        $getSingleVariationQuery = "SELECT * FROM product_variations WHERE `product_unique_id`='$variationProductID'";

        // Run Get Single Query
        if($this->query($getSingleVariationQuery)):
            $variationsDataList = $this->fetchAll();
            return($variationsDataList);
        else:
            return(FALSE);
        endif;
    }

    public function updateVariation($dataUpdate = "", $dataNew = "", $dataDelete = "")
    {
        // Return Status
        $updateStatus = TRUE;
        $addNewStatus = TRUE;
        $deleteStatus = TRUE;

        // Delete IDs
        $deleteIds = $dataDelete['removed-variations'];
        $delIds    = explode("|", $deleteIds);
        
        // Data Delete Loop
        foreach($delIds as $separateDeleteIds):

            // Variation Delete Query
            $delVarQuery = "DELETE FROM `product_variations` WHERE `variation_unique_id` = ?";

            // Variation Delete Params
            $delVarParams = ["$separateDeleteIds"];

            // Run Delete Query
            if($this->query($delVarQuery, $delVarParams)):
                $deleteStatus = TRUE;
            else:
                $deleteStatus = FALSE;
            endif;

            // Remove Arrays
            $variation_unique_id_update = $dataUpdate['variation-unique-id'];
            if(($key = array_search($separateDeleteIds, $variation_unique_id_update)) !== false):
                unset($variation_unique_id_update[$key]);
            endif;

        endforeach;

        // Data Update
        $variation_unique_id_update = $dataUpdate['variation-unique-id'];
        $count_fields_update = count($dataUpdate['variation-unique-id']);
        $collection_name     = $dataUpdate['collection-name'];
        $product_unique_id   = $dataUpdate['product-unique-id'];
        $var_name_en_update  = $dataUpdate['var-name-en-update'];
        $var_name_it_update  = $dataUpdate['var-name-it-update'];
        $var_name_fr_update  = $dataUpdate['var-name-fr-update'];
        $var_name_es_update  = $dataUpdate['var-name-es-update'];
        $var_name_de_update  = $dataUpdate['var-name-de-update'];
        $var_value_en_update = $dataUpdate['var-value-en-update'];
        $var_value_it_update = $dataUpdate['var-value-it-update'];
        $var_value_fr_update = $dataUpdate['var-value-fr-update'];
        $var_value_es_update = $dataUpdate['var-value-es-update'];
        $var_value_de_update = $dataUpdate['var-value-de-update'];

        // Data Update Loop
        for($i = 0; $i <= $count_fields_update; $i++):

            // Variation Update Query
            $variationUpdateQuery = "UPDATE `product_variations` SET 
            `product_unique_id` = ?, 
            `variation_collection_name` = ?, 
            `var_name_de` = ?, 
            `var_name_en` = ?, 
            `var_name_es` = ?, 
            `var_name_fr` = ?, 
            `var_name_it` = ?, 
            `var_value_de` = ?, 
            `var_value_en` = ?, 
            `var_value_es` = ?, 
            `var_value_fr` = ?, 
            `var_value_it` = ? WHERE `variation_unique_id` = ?";

            // Variation Update Params
            $variationUpdateParams = [
                "$product_unique_id",
                "$collection_name",
                "$var_name_de_update[$i]",
                "$var_name_en_update[$i]",
                "$var_name_es_update[$i]",
                "$var_name_fr_update[$i]",
                "$var_name_it_update[$i]",
                "$var_value_de_update[$i]",
                "$var_value_en_update[$i]",
                "$var_value_es_update[$i]",
                "$var_value_fr_update[$i]",
                "$var_value_it_update[$i]",
                "$variation_unique_id_update[$i]",
            ];

            // Run Update Query
            if($this->query($variationUpdateQuery, $variationUpdateParams)):
                if($i == $count_fields_update):
                    $updateStatus = TRUE;
                endif;
            else:
                if($i == $count_fields_update):
                    $updateStatus = FALSE;
                endif;
            endif;

        endfor;

        // Data New
        $count_fields      = $dataNew['count-fields'];
        $collection_name   = $dataNew['collection-name'];
        $product_unique_id = $dataNew['product-unique-id'];
        $var_name_en       = $dataNew['var-name-en'];
        $var_name_it       = $dataNew['var-name-it'];
        $var_name_fr       = $dataNew['var-name-fr'];
        $var_name_es       = $dataNew['var-name-es'];
        $var_name_de       = $dataNew['var-name-de'];
        $var_value_en      = $dataNew['var-value-en'];
        $var_value_it      = $dataNew['var-value-it'];
        $var_value_fr      = $dataNew['var-value-fr'];
        $var_value_es      = $dataNew['var-value-es'];
        $var_value_de      = $dataNew['var-value-de'];
        
        // Data New Loop
        for($i = 0; $i < $count_fields; $i++):

            // Variation Unique ID
            $variation_unique_id = mt_rand(100000, 999999);

            // Variation Insert Query
            $variationInsertQuery = "INSERT INTO `product_variations` 
            (`variation_unique_id`, 
            `product_unique_id`, 
            `variation_collection_name`, 
            `var_name_de`, 
            `var_name_en`, 
            `var_name_es`, 
            `var_name_fr`, 
            `var_name_it`, 
            `var_value_de`, 
            `var_value_en`, 
            `var_value_es`, 
            `var_value_fr`, 
            `var_value_it`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Variation Insert Params
            $variationInsertParams = [
                "$variation_unique_id",
                "$product_unique_id",
                "$collection_name",
                "$var_name_de[$i]",
                "$var_name_en[$i]",
                "$var_name_es[$i]",
                "$var_name_fr[$i]",
                "$var_name_it[$i]",
                "$var_value_de[$i]",
                "$var_value_en[$i]",
                "$var_value_es[$i]",
                "$var_value_fr[$i]",
                "$var_value_it[$i]",
            ];

            // Run Insert Query
            if($this->query($variationInsertQuery, $variationInsertParams)):
                if($i == $count_fields):
                    $addNewStatus = TRUE;
                endif;
            else:
                if($i == $count_fields):
                    $addNewStatus = FALSE;
                endif;
            endif;

        endfor;

        // Check Return Status
        if($updateStatus == TRUE || $addNewStatus == TRUE || $deleteStatus == TRUE):
            return(TRUE);
        else:
            return(FALSE);
        endif;

    }

    public function deleteVariation($variationID)
    {
        // Category Delete Query
        $variationsDeleteQuery = "DELETE FROM `product_variations` WHERE `product_unique_id` = ?";

        // Category Delete Params
        $variationsDeleteParams = [$variationID];

        // Run Delete Query
        if($this->query($variationsDeleteQuery, $variationsDeleteParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
    }

}

?>