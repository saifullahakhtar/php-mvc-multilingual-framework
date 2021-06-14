<?php

class asaldiPages extends database {

    public function createPage($data)
    {
        // Data English
        $page_url_en         = $data['page-url-en'];
        $page_title_en       = $data['page-title-en'];
        $meta_title_en       = $data['meta-title-en'];
        $meta_keyword_en     = $data['meta-keyword-en'];
        $meta_description_en = $data['meta-description-en'];
        $page_description_en = $data['page-description-en'];
        // Data Italian
        $page_url_it         = $data['page-url-it'];
        $page_title_it       = $data['page-title-it'];
        $meta_title_it       = $data['meta-title-it'];
        $meta_keyword_it     = $data['meta-keyword-it'];
        $meta_description_it = $data['meta-description-it'];
        $page_description_it = $data['page-description-it'];
        // Data French
        $page_url_fr         = $data['page-url-fr'];
        $page_title_fr       = $data['page-title-fr'];
        $meta_title_fr       = $data['meta-title-fr'];
        $meta_keyword_fr     = $data['meta-keyword-fr'];
        $meta_description_fr = $data['meta-description-fr'];
        $page_description_fr = $data['page-description-fr'];
        // Data Spanish
        $page_url_es         = $data['page-url-es'];
        $page_title_es       = $data['page-title-es'];
        $meta_title_es       = $data['meta-title-es'];
        $meta_keyword_es     = $data['meta-keyword-es'];
        $meta_description_es = $data['meta-description-es'];
        $page_description_es = $data['page-description-es'];
        // Data German
        $page_url_de         = $data['page-url-de'];
        $page_title_de       = $data['page-title-de'];
        $meta_title_de       = $data['meta-title-de'];
        $meta_keyword_de     = $data['meta-keyword-de'];
        $meta_description_de = $data['meta-description-de'];
        $page_description_de = $data['page-description-de'];
        // Data For All
        $page_tags           = $data['page-tags'];
        $page_unique_id      = mt_rand(100000, 999999);
        $page_status         = $data['page-status'];

        // Page Create Query
        $pageCreateQuery = "INSERT INTO `pages` 
        (`page_unique_id`, 
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
        `description_de`, 
        `description_en`, 
        `description_es`, 
        `description_fr`, 
        `description_it`, 
        `page_tags`, 
        `page_status`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Page Insert Parameters
        $pageCreateParams = [
            "$page_unique_id",
            "$page_url_de",
            "$page_url_en",
            "$page_url_es",
            "$page_url_fr",
            "$page_url_it",
            "$page_title_de",
            "$page_title_en",
            "$page_title_es",
            "$page_title_fr",
            "$page_title_it",
            "$meta_title_de",
            "$meta_title_en",
            "$meta_title_es",
            "$meta_title_fr",
            "$meta_title_it",
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
            "$page_description_de",
            "$page_description_en",
            "$page_description_es",
            "$page_description_fr",
            "$page_description_it",
            "$page_tags",
            "$page_status"
        ];

        // Run Insert Query
        if($this->query($pageCreateQuery, $pageCreateParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;

    }

    public function readAllPages()
    {
        // Page Read All Query
        $pagesReadQuery = "SELECT * FROM `pages`";
        
        // Run Page Query
        if($this->query($pagesReadQuery)):
            $pagesArray = $this->fetchAll();
            if(!empty($pagesArray)):
                return $pagesArray;
            else:
                $pagesArray = "Products Not Found";
                return($pagesArray);
            endif;
        endif;
    }

    public function readSinglePage($pageID)
    {
        // Page Read Single Query
        $pageReadQuery = "SELECT * FROM `pages` WHERE `page_unique_id` = ?";

        // Page Read Single Params
        $pageReadParams = [$pageID];
        
        // Run Delete Query
        if($this->query($pageReadQuery, $pageReadParams)):
            $pageSingleArray = $this->fetch();
            return($pageSingleArray);
        endif;
    }

    public function updatePage($data)
    {
        // Data English
        $page_url_en         = $data['page-url-en'];
        $page_title_en       = $data['page-title-en'];
        $meta_title_en       = $data['meta-title-en'];
        $meta_keyword_en     = $data['meta-keyword-en'];
        $meta_description_en = $data['meta-description-en'];
        $page_description_en = $data['page-description-en'];
        // Data Italian
        $page_url_it         = $data['page-url-it'];
        $page_title_it       = $data['page-title-it'];
        $meta_title_it       = $data['meta-title-it'];
        $meta_keyword_it     = $data['meta-keyword-it'];
        $meta_description_it = $data['meta-description-it'];
        $page_description_it = $data['page-description-it'];
        // Data French
        $page_url_fr         = $data['page-url-fr'];
        $page_title_fr       = $data['page-title-fr'];
        $meta_title_fr       = $data['meta-title-fr'];
        $meta_keyword_fr     = $data['meta-keyword-fr'];
        $meta_description_fr = $data['meta-description-fr'];
        $page_description_fr = $data['page-description-fr'];
        // Data Spanish
        $page_url_es         = $data['page-url-es'];
        $page_title_es       = $data['page-title-es'];
        $meta_title_es       = $data['meta-title-es'];
        $meta_keyword_es     = $data['meta-keyword-es'];
        $meta_description_es = $data['meta-description-es'];
        $page_description_es = $data['page-description-es'];
        // Data German
        $page_url_de         = $data['page-url-de'];
        $page_title_de       = $data['page-title-de'];
        $meta_title_de       = $data['meta-title-de'];
        $meta_keyword_de     = $data['meta-keyword-de'];
        $meta_description_de = $data['meta-description-de'];
        $page_description_de = $data['page-description-de'];
        // Data For All
        $page_tags           = $data['page-tags'];
        $page_unique_id      = $data['page-unique-id'];
        $page_status         = $data['page-status'];

        // Page Update Query
        $pageUpdateQuery = "UPDATE `pages` SET 
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
        `description_de` = ?, 
        `description_en` = ?, 
        `description_es` = ?, 
        `description_fr` = ?, 
        `description_it` = ?, 
        `page_tags` = ?,
        `page_status` = ? WHERE `page_unique_id` = ?";

        // Page Update Params
        $pageUpdateParams = [
            "$page_url_de",
            "$page_url_en",
            "$page_url_es",
            "$page_url_fr",
            "$page_url_it",
            "$page_title_de",
            "$page_title_en",
            "$page_title_es",
            "$page_title_fr",
            "$page_title_it",
            "$meta_title_de",
            "$meta_title_en",
            "$meta_title_es",
            "$meta_title_fr",
            "$meta_title_it",
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
            "$page_description_de",
            "$page_description_en",
            "$page_description_es",
            "$page_description_fr",
            "$page_description_it",
            "$page_tags",
            "$page_status",
            "$page_unique_id"
        ];

        // Run Update Query
        if($this->query($pageUpdateQuery, $pageUpdateParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;

    }

    public function deletePage($pageID)
    {
        // Page Delete Query
        $pageDeleteQuery = "DELETE FROM `pages` WHERE `page_unique_id` = ?";

        // Page Delete Params
        $pageDeleteParams = [$pageID];

        // Run Delete Query
        if($this->query($pageDeleteQuery, $pageDeleteParams)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
    }

}

?>