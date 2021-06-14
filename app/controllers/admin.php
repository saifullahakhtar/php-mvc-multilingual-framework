<?php

####################################
### Main Admin Controller Class ###
####################################
 
class admin extends baseController {

    ####################################################################
    ### Auto Run Construct Function => Redirecting & Checking Login  ###
    ####################################################################

    public function __construct()
    {
        // Helpers
        $this->helper("link");
        $this->helper("functions");

        // Auto Models
        $loginModel  = $this->model("asaldiLogin");

        // Check Session And Return To Login Page If Session Doesn't Exist
        if(!$this->getSession("userUniqueId")):

            // Run Login Submission
            if(isset($_POST['sign-in-to-admin'])):
                $data = [
                    'username' => $this->validate("username-email","Username / Email","required"),
                    'password' => $this->validate("password","Password","required")
                ];
                if($this->formSubmission()):
                    if($loginData = $loginModel->login($data)):
                        $this->setSession("userUniqueId", $loginData);
                        redirectUrlJavaScript("admin/index");
                    else:
                        if($this->setFlash("loginError", "<b>information is incorrect please try again.</b>")):
                            redirectUrlJavaScript("admin/login");
                        endif;
                    endif;
                endif;
            endif;

            // View Login Page
            $this->view("admin/login");

            // Stop Execution Without Login
            exit();

        endif;
    }

    ########################
    ### Index Controller ###
    ########################

    public function index()
    {
        // View Index Page
        $this->view("admin/index");
    }

    #############################
    ### Ecommerce Controllers ###
    #############################

    public function addProduct()
    {
        // Add Product Model
        $productsModel = $this->model("asaldiProducts");

        // Run Product Submission
        if(isset($_POST["publish-product"]) || isset($_POST['draft-product'])):

            $data = [
                // Data
                'product-url-en'            => slugify($this->validate("product-url-en","Product Url English", "required")),
                'product-title-en'          => $this->validate("product-title-en", "Product Title", "required"),
                'meta-title-en'             => $this->input("meta-title-en"),
                'product-description-en'    => $this->input("product-description-en", "text"),
                'meta-keyword-en'           => $this->input("meta-keyword-en"),
                'meta-description-en'       => $this->input("meta-description-en"),
                'short-description-en'      => $this->input("short-description-en", "text"),
                // Data Italian
                'product-url-it'            => slugify($this->validate("product-url-it","Product Url Italian", "required")),
                'product-title-it'          => $this->input("product-title-it"),
                'meta-title-it'             => $this->input("meta-title-it"),
                'product-description-it'    => $this->input("product-description-it", "text"),
                'meta-keyword-it'           => $this->input("meta-keyword-it"),
                'meta-description-it'       => $this->input("meta-description-it"),
                'short-description-it'      => $this->input("short-description-it", "text"),
                // Data French
                'product-url-fr'            => slugify($this->validate("product-url-fr","Product Url French", "required")),
                'product-title-fr'          => $this->input("product-title-fr"),
                'meta-title-fr'             => $this->input("meta-title-fr"),
                'product-description-fr'    => $this->input("product-description-fr", "text"),
                'meta-keyword-fr'           => $this->input("meta-keyword-fr"),
                'meta-description-fr'       => $this->input("meta-description-fr"),
                'short-description-fr'      => $this->input("short-description-fr", "text"),
                // Data Spanish
                'product-url-es'            => slugify($this->validate("product-url-es","Product Url Spanish", "required")),
                'product-title-es'          => $this->input("product-title-es"),
                'meta-title-es'             => $this->input("meta-title-es"),
                'product-description-es'    => $this->input("product-description-es", "text"),
                'meta-keyword-es'           => $this->input("meta-keyword-es"),
                'meta-description-es'       => $this->input("meta-description-es"),
                'short-description-es'      => $this->input("short-description-es", "text"),
                // Data German
                'product-url-de'            => slugify($this->validate("product-url-de","Product Url German", "required")),
                'product-title-de'          => $this->input("product-title-de"),
                'meta-title-de'             => $this->input("meta-title-de"),
                'product-description-de'    => $this->input("product-description-de", "text"),
                'meta-keyword-de'           => $this->input("meta-keyword-de"),
                'meta-description-de'       => $this->input("meta-description-de"),
                'short-description-de'      => $this->input("short-description-de", "text"),
                // Images Data
                'single-image-name'         => $this->input("single-image-name"),
                'multiple-images-names'     => $this->input("multiple-images-names"),
                // Data For All
                'product-price-euro'        => $this->validate("product-price-euro", "Product Price Euro", "required"),
                'discount-price-euro'       => $this->input("discount-price-euro"),
                'product-price-pound'       => $this->validate("product-price-pound", "Product Price Pound", "required"),
                'discount-price-pound'      => $this->input("discount-price-pound"),
                'product-stock'             => $this->input("product-stock"),
                'product-sku'               => $this->input("product-sku"),
                'product-categories'        => implode("|",$this->input("product-categories", "text"))
            ];

            // Set Product Status
            if(isset($_POST['publish-product'])):
                $data['product-status'] = "publish";
            elseif(isset($_POST['draft-product'])):
                $data['product-status'] = "draft";
            endif;

            // Run Add Product Submission
            if($this->formSubmission()):
                if($submitProduct = $productsModel->createProduct($data)):
                    if($this->setFlash("productCreated", "<b>Product Added Successfully.</b>")):
                        redirectUrlJavaScript("admin/manageProducts");
                    endif;
                else:
                    if($this->setFlash("productCreatingError", "<b>Failed To Add Product, Please Try Again.</b>")):
                        redirectUrlJavaScript("admin/addProduct");
                    endif;
                endif;
            endif;

        endif;

        // View Add New Products Page
        $this->view("admin/add-new-product");
    }

    public function manageProducts($action = "", $productID = "")
    {
        // Add Product Model
        $productsModel = $this->model("asaldiProducts");

        // Delete Product
        if($action == "delete" && !empty($productID)):
            if($submitDelete = $productsModel->deleteProduct($productID)):
                if($this->setFlash("productDeleted", "<b>Product Successfully Deleted.</b>")):
                    redirectUrlJavaScript("admin/manageProducts/?delete=true");
                endif;
            else:
                if($this->setFlash("productDeletingError", "<b>Failed To Delete Product, Please Try Again.</b>")):
                    redirectUrlJavaScript("admin/manageProducts/?delete=false");
                endif;
            endif;
        endif;

        // View Manage Products Page
        if($manageProductsData = $productsModel->readAllProducts()):
            $this->view("admin/manage-products", NULL, $manageProductsData);
        endif;
    }

    public function editProduct($productID)
    {
        // Add Product Model
        $productsModel = $this->model("asaldiProducts");

        // Run Update Product Submission
        if(isset($_POST["update-product"]) || isset($_POST['move-to-draft'])):

            $data = [
                // Data
                'product-url-en'            => slugify($this->validate("product-url-en","Product Url English", "required")),
                'product-title-en'          => $this->validate("product-title-en", "Product Title", "required"),
                'meta-title-en'             => $this->input("meta-title-en"),
                'product-description-en'    => $this->input("product-description-en", "text"),
                'meta-keyword-en'           => $this->input("meta-keyword-en"),
                'meta-description-en'       => $this->input("meta-description-en"),
                'short-description-en'      => $this->input("short-description-en", "text"),
                // Data Italian
                'product-url-it'            => slugify($this->validate("product-url-it","Product Url Italian", "required")),
                'product-title-it'          => $this->input("product-title-it"),
                'meta-title-it'             => $this->input("meta-title-it"),
                'product-description-it'    => $this->input("product-description-it", "text"),
                'meta-keyword-it'           => $this->input("meta-keyword-it"),
                'meta-description-it'       => $this->input("meta-description-it"),
                'short-description-it'      => $this->input("short-description-it", "text"),
                // Data French
                'product-url-fr'            => slugify($this->validate("product-url-fr","Product Url French", "required")),
                'product-title-fr'          => $this->input("product-title-fr"),
                'meta-title-fr'             => $this->input("meta-title-fr"),
                'product-description-fr'    => $this->input("product-description-fr", "text"),
                'meta-keyword-fr'           => $this->input("meta-keyword-fr"),
                'meta-description-fr'       => $this->input("meta-description-fr"),
                'short-description-fr'      => $this->input("short-description-fr", "text"),
                // Data Spanish
                'product-url-es'            => slugify($this->validate("product-url-es","Product Url Spanish", "required")),
                'product-title-es'          => $this->input("product-title-es"),
                'meta-title-es'             => $this->input("meta-title-es"),
                'product-description-es'    => $this->input("product-description-es", "text"),
                'meta-keyword-es'           => $this->input("meta-keyword-es"),
                'meta-description-es'       => $this->input("meta-description-es"),
                'short-description-es'      => $this->input("short-description-es", "text"),
                // Data German
                'product-url-de'            => slugify($this->validate("product-url-de","Product Url German", "required")),
                'product-title-de'          => $this->input("product-title-de"),
                'meta-title-de'             => $this->input("meta-title-de"),
                'product-description-de'    => $this->input("product-description-de", "text"),
                'meta-keyword-de'           => $this->input("meta-keyword-de"),
                'meta-description-de'       => $this->input("meta-description-de"),
                'short-description-de'      => $this->input("short-description-de", "text"),
                // Images Data
                'single-image-name'         => $this->input("single-image-name"),
                'multiple-images-names'     => $this->input("multiple-images-names"),
                // Data For All
                'product-price-euro'        => $this->validate("product-price-euro", "Product Price Euro", "required"),
                'discount-price-euro'       => $this->input("discount-price-euro"),
                'product-price-pound'       => $this->validate("product-price-pound", "Product Price Pound", "required"),
                'discount-price-pound'      => $this->input("discount-price-pound"),
                'product-stock'             => $this->input("product-stock"),
                'product-sku'               => $this->input("product-sku"),
                'product-categories'        => implode("|",$this->input("product-categories", "text")),
                'product-unique-id'         => $this->input("product-unique-id")
            ];

            // Set Product Status
            if(isset($_POST['update-product'])):
                $data['product-status'] = "publish";
            elseif(isset($_POST['move-to-draft'])):
                $data['product-status'] = "draft";
            endif;

            // Run Add Product Submission
            if($this->formSubmission()):
                if($submitProduct = $productsModel->updateProduct($data)):
                    if($this->setFlash("productUpdated", "<b>Product Updated Successfully.</b>")):
                        $reUrl = "admin/editProduct/" . $data['product-unique-id'] . "/?update=true";
                        redirectUrlJavaScript($reUrl);
                    endif;
                else:
                    if($this->setFlash("productUpdatingError", "<b>Failed To Update Product, Please Try Again.</b>")):
                        $reUrl = "admin/editProduct/" . $data['product-unique-id'] . "/?update=false";
                        redirectUrlJavaScript($reUrl);
                    endif;
                endif;
            endif;

        endif;

        // Delete Product
        if(isset($_POST['delete-product'])):
            $productID = $this->input("product-unique-id");
            if($submitDelete = $productsModel->deleteProduct($productID)):
                if($this->setFlash("productDeleted", "<b>Product Successfully Deleted.</b>")):
                    redirectUrlJavaScript("admin/manageProducts/?delete=true");
                endif;
            else:
                if($this->setFlash("productDeletingError", "<b>Failed To Delete Product, Please Try Again.</b>")):
                    redirectUrlJavaScript("admin/manageProducts/?delete=false");
                endif;
            endif;
        endif;

        // View Edit Products Page
        if($editProductsData = $productsModel->readSingleProduct($productID)):
            $this->view("admin/edit-product", NULL, $editProductsData);
        endif;
    }

    public function manageCategories($action = "", $categoryID = "")
    {
        // Add Category Model
        $categoriesModel = $this->model("asaldiCategories");

        // Add New Category
        if(isset($_POST['add-new-category'])):

            $data = [
                'category-name-en' => $this->validate("category-name-en", "Category Name In English", "required"),
                'category-name-it' => $this->validate("category-name-it", "Category Name In Italian", "required"),
                'category-name-fr' => $this->validate("category-name-fr", "Category Name In French", "required"),
                'category-name-es' => $this->validate("category-name-es", "Category Name In Spanish", "required"),
                'category-name-de' => $this->validate("category-name-de", "Category Name In German", "required"),
                'category-slug-en' => slugify($this->input("category-name-en")),
                'category-slug-it' => slugify($this->input("category-name-it")),
                'category-slug-fr' => slugify($this->input("category-name-fr")),
                'category-slug-es' => slugify($this->input("category-name-es")),
                'category-slug-de' => slugify($this->input("category-name-de")),
                'category-image'   => $this->input("category-image-name"),
                'parent-category'  => $this->input("parent-category")
            ];

            // Run Add Category Submission
            if($this->formSubmission()):
                if($submitCategory = $categoriesModel->createCategory($data)):
                    if($this->setFlash("categoryCreated", "<b>Category Added Successfully.</b>")):
                        redirectUrlJavaScript("admin/manageCategories/?add=true");
                    endif;
                else:
                    if($this->setFlash("categoryCreatingError", "<b>Failed To Create Category, Please Try Again.</b>")):
                        redirectUrlJavaScript("admin/manageCategories/?add=false");
                    endif;
                endif;
            endif;

        endif;

        // Delete Category
        if($action == "delete" && !empty($categoryID)):
            if($submitDelete = $categoriesModel->deleteCategory($categoryID)):
                if($this->setFlash("categoryDeleted", "<b>Category Successfully Deleted.</b>")):
                    redirectUrlJavaScript("admin/manageCategories/?delete=true");
                endif;
            else:
                if($this->setFlash("categoryDeletingError", "<b>Failed To Delete Category, Please Try Again.</b>")):
                    redirectUrlJavaScript("admin/manageCategories/?delete=false");
                endif;
            endif;
        endif;

        // View Manage Categories Page
        if($manageCategoriesData = $categoriesModel->readAllCategories()):
            $this->view("admin/manage-categories", NULL, $manageCategoriesData);
        endif;
    }

    public function editCategory($categoryID)
    {
        // Add Category Model
        $categoriesModel = $this->model("asaldiCategories");

        // Run Update Product Submission
        if(isset($_POST['update-category'])):

            $data = [
                'category-name-en'   => $this->validate("category-name-en", "Category Name In English", "required"),
                'category-name-it'   => $this->validate("category-name-it", "Category Name In Italian", "required"),
                'category-name-fr'   => $this->validate("category-name-fr", "Category Name In French", "required"),
                'category-name-es'   => $this->validate("category-name-es", "Category Name In Spanish", "required"),
                'category-name-de'   => $this->validate("category-name-de", "Category Name In German", "required"),
                'category-slug-en'   => slugify($this->input("category-name-en")),
                'category-slug-it'   => slugify($this->input("category-name-it")),
                'category-slug-fr'   => slugify($this->input("category-name-fr")),
                'category-slug-es'   => slugify($this->input("category-name-es")),
                'category-slug-de'   => slugify($this->input("category-name-de")),
                'category-image'     => $this->input("category-image-name"),
                'parent-category'    => $this->input("parent-category"),
                'category-unique-id' => $this->input("category-unique-id")
            ];

            // Run Update Category Submission
            if($this->formSubmission()):
                if($updateCategory = $categoriesModel->updateCategory($data)):
                    if($this->setFlash("categoryUpdated", "<b>Category Updated Successfully.</b>")):
                        $reUrl = "admin/editCategory/" . $data['category-unique-id'] . "/?update=true";
                        redirectUrlJavaScript($reUrl);
                    endif;
                else:
                    if($this->setFlash("categoryUpdatingError", "<b>Failed To Update Category, Please Try Again.</b>")):
                        $reUrl = "admin/editCategory/" . $data['category-unique-id'] . "/?update=false";
                        redirectUrlJavaScript($reUrl);
                    endif;
                endif;
            endif;

        endif;

        // View Edit Category Page
        if($editCategoriesData = $categoriesModel->readSingleCatrgory($categoryID)):
            $manageCategoriesData = $categoriesModel->readAllCategories($categoryID);
            $this->view("admin/edit-category", NULL, $editCategoriesData, $manageCategoriesData);
        endif;
    }

    public function addVariations()
    {
        // Add Variations Model
        $variationsModel = $this->model("asaldiVariations");

        // Run Add Variations Submission
        if(isset($_POST['publish-variations'])):

            $data = [
                'product-unique-id' => $this->input("product-unique-id", "text"),
                'collection-name'   => $this->input("collection-name", "text"),
                'count-fields'      => $this->input("count-fields", "text"),
                'var-name-en'       => $this->input("var-name-en", "text"),
                'var-name-it'       => $this->input("var-name-it", "text"),
                'var-name-fr'       => $this->input("var-name-fr", "text"),
                'var-name-es'       => $this->input("var-name-es", "text"),
                'var-name-de'       => $this->input("var-name-de", "text"),
                'var-value-en'      => $this->input("var-value-en", "text"),
                'var-value-it'      => $this->input("var-value-it", "text"),
                'var-value-fr'      => $this->input("var-value-fr", "text"),
                'var-value-es'      => $this->input("var-value-es", "text"),
                'var-value-de'      => $this->input("var-value-de", "text"),
            ];

            // Run Update Variations Submission
            if($this->formSubmission()):
                if($addVariations = $variationsModel->createVariations($data)):
                    if($this->setFlash("variationsAdded", "<b>Variations Added Successfully.</b>")):
                        redirectUrlJavaScript("admin/manageVariations");
                    endif; 
                else:
                    if($this->setFlash("variationsAddingError", "<b>Failed To Add Variations, Please Try Again.</b>")):
                        redirectUrlJavaScript("admin/manageVariations");
                    endif;
                endif;
            endif;
            
        endif;

        // View Add Variations Page
        if($getProductsList = $variationsModel->readAllProducts()):
            $this->view("admin/add-new-variations", NULL, $getProductsList);
        endif;
    }

    public function manageVariations($action = "", $variationProductID = "")
    {
        // Add Variations Model
        $variationsModel = $this->model("asaldiVariations");

        // Delete Variations
        if($action == "delete" && !empty($variationProductID)):
            if($submitDelete = $variationsModel->deleteVariation($variationProductID)):
                if($this->setFlash("variationDeleted", "<b>Variations Successfully Deleted.</b>")):
                    redirectUrlJavaScript("admin/manageVariations/?delete=true");
                endif;
            else:
                if($this->setFlash("variationDeletingError", "<b>Failed To Delete Variations, Please Try Again.</b>")):
                    redirectUrlJavaScript("admin/manageVariations/?delete=false");
                endif;
            endif;
        endif;
        
        // View Manage Variations Page
        if($manageVariationsData = $variationsModel->readAllVariations()):
            $this->view("admin/manage-variations", NULL, $manageVariationsData);
        endif;
    }

    public function editVariations($variationID)
    {
        // Add Variations Model
        $variationsModel = $this->model("asaldiVariations");

        // Run Update Variations Submission
        if(isset($_POST['update-variations'])):

            // Updated Data
            $dataUpdate = [
                'variation-unique-id' => $this->input("variation-unique-id", "text"),
                'product-unique-id'   => $this->input("product-unique-id", "text"),
                'collection-name'     => $this->input("collection-name", "text"),
                'count-fields-update' => $this->input("count-fields", "text"),
                'var-name-en-update'  => $this->input("var-name-en-update", "text"),
                'var-name-it-update'  => $this->input("var-name-it-update", "text"),
                'var-name-fr-update'  => $this->input("var-name-fr-update", "text"),
                'var-name-es-update'  => $this->input("var-name-es-update", "text"),
                'var-name-de-update'  => $this->input("var-name-de-update", "text"),
                'var-value-en-update' => $this->input("var-value-en-update", "text"),
                'var-value-it-update' => $this->input("var-value-it-update", "text"),
                'var-value-fr-update' => $this->input("var-value-fr-update", "text"),
                'var-value-es-update' => $this->input("var-value-es-update", "text"),
                'var-value-de-update' => $this->input("var-value-de-update", "text"),
            ];

            // New Data
            $dataNew = [                
                'product-unique-id'   => $this->input("product-unique-id", "text"),
                'collection-name'     => $this->input("collection-name", "text"),
                'count-fields'        => $this->input("count-fields", "text"),
                'var-name-en'         => $this->input("var-name-en", "text"),
                'var-name-it'         => $this->input("var-name-it", "text"),
                'var-name-fr'         => $this->input("var-name-fr", "text"),
                'var-name-es'         => $this->input("var-name-es", "text"),
                'var-name-de'         => $this->input("var-name-de", "text"),
                'var-value-en'        => $this->input("var-value-en", "text"),
                'var-value-it'        => $this->input("var-value-it", "text"),
                'var-value-fr'        => $this->input("var-value-fr", "text"),
                'var-value-es'        => $this->input("var-value-es", "text"),
                'var-value-de'        => $this->input("var-value-de", "text"),
            ];

            // Delete Data
            $dataDelete = [
                'removed-variations'  => $this->input("removed-variations", "text"),
            ];

            // Run Update Variations Submission
            if($this->formSubmission()):
                if($updateVariations = $variationsModel->updateVariation($dataUpdate, $dataNew, $dataDelete)):
                    if($this->setFlash("variationsUpdated", "<b>Variations Updated Successfully.</b>")):
                        $reUrl = "admin/editVariations/" . $dataUpdate['product-unique-id'] . "/?update=true";
                        redirectUrlJavaScript($reUrl);
                    endif; 
                else:
                    if($this->setFlash("variationsUpdatingError", "<b>Failed To Update Variations, Please Try Again.</b>")):
                        $reUrl = "admin/editVariations/" . $dataUpdate['product-unique-id'] . "/?update=false";
                        redirectUrlJavaScript($reUrl);
                    endif;
                endif;
            endif;
            
        endif;

        // Delete Variation
        if(isset($_POST['delete-variations'])):
            $variationProductID = $this->input("variation-delete-id");
            if($submitDelete = $variationsModel->deleteVariation($variationProductID)):
                if($this->setFlash("variationDeleted", "<b>Variations Successfully Deleted.</b>")):
                    redirectUrlJavaScript("admin/manageVariations/?delete=true");
                endif;
            else:
                if($this->setFlash("variationDeletingError", "<b>Failed To Delete Variations, Please Try Again.</b>")):
                    redirectUrlJavaScript("admin/manageVariations/?delete=false");
                endif;
            endif;
        endif;

        // View Manage Variations Page
        if($editVariationsData = $variationsModel->readSingleVariation($variationID)):
            $getProductsList = $variationsModel->readAllProducts();
            $this->view("admin/edit-variations", NULL, $editVariationsData, $getProductsList);
        endif;

    }

    #########################
    ### Pages Controllers ###
    #########################

    public function addPage()
    {
        // Add Product Model
        $pagesModel = $this->model("asaldiPages");

        // Run Product Submission
        if(isset($_POST["publish-page"]) || isset($_POST['draft-page'])):

            $data = [
                // Data
                'page-url-en'            => slugify($this->validate("page-url-en","Page Url English", "required")),
                'page-title-en'          => $this->validate("page-title-en", "Page Title", "required"),
                'meta-title-en'          => $this->input("meta-title-en"),
                'meta-keyword-en'        => $this->input("meta-keyword-en"),
                'meta-description-en'    => $this->input("meta-description-en"),
                'page-description-en'    => $this->input("page-description-en", "text"),
                // Data Italian
                'page-url-it'            => slugify($this->validate("page-url-it","Page Url Italian", "required")),
                'page-title-it'          => $this->input("page-title-it"),
                'meta-title-it'          => $this->input("meta-title-it"),
                'meta-keyword-it'        => $this->input("meta-keyword-it"),
                'meta-description-it'    => $this->input("meta-description-it"),
                'page-description-it'    => $this->input("page-description-it", "text"),
                // Data French
                'page-url-fr'            => slugify($this->validate("page-url-fr","Page Url French", "required")),
                'page-title-fr'          => $this->input("page-title-fr"),
                'meta-title-fr'          => $this->input("meta-title-fr"),
                'meta-keyword-fr'        => $this->input("meta-keyword-fr"),
                'meta-description-fr'    => $this->input("meta-description-fr"),
                'page-description-fr'    => $this->input("page-description-fr", "text"),
                // Data Spanish
                'page-url-es'            => slugify($this->validate("page-url-es","Page Url Spanish", "required")),
                'page-title-es'          => $this->input("page-title-es"),
                'meta-title-es'          => $this->input("meta-title-es"),
                'meta-keyword-es'        => $this->input("meta-keyword-es"),
                'meta-description-es'    => $this->input("meta-description-es"),
                'page-description-es'    => $this->input("page-description-es", "text"),
                // Data German
                'page-url-de'            => slugify($this->validate("page-url-de","Page Url German", "required")),
                'page-title-de'          => $this->input("page-title-de"),
                'meta-title-de'          => $this->input("meta-title-de"),
                'meta-keyword-de'        => $this->input("meta-keyword-de"),
                'meta-description-de'    => $this->input("meta-description-de"),
                'page-description-de'    => $this->input("page-description-de", "text"),
                // Data For All
                'page-tags'              => $this->input("page-tags")
            ];

            // Set Product Status
            if(isset($_POST['publish-page'])):
                $data['page-status'] = "publish";
            elseif(isset($_POST['draft-page'])):
                $data['page-status'] = "draft";
            endif;

            // Run Add Page Submission
            if($this->formSubmission()):
                if($submitPage = $pagesModel->createPage($data)):
                    if($this->setFlash("pageCreated", "<b>Page Added Successfully.</b>")):
                        redirectUrlJavaScript("admin/managePages");
                    endif;
                else:
                    if($this->setFlash("pageCreatingError", "<b>Failed To Add Page, Please Try Again.</b>")):
                        redirectUrlJavaScript("admin/addPage");
                    endif;
                endif;
            endif;

        endif;

        // View Add New Pages Page
        $this->view("admin/add-new-page");
    }

    public function managePages($action = "", $pageID = "")
    {
        // Add Product Model
        $pagesModel = $this->model("asaldiPages");

        // Delete Page
        if($action == "delete" && !empty($pageID)):
            if($submitDelete = $pagesModel->deletePage($pageID)):
                if($this->setFlash("pageDeleted", "<b>Page Successfully Deleted.</b>")):
                    redirectUrlJavaScript("admin/managePages/?delete=true");
                endif;
            else:
                if($this->setFlash("pageDeletingError", "<b>Failed To Delete Page, Please Try Again.</b>")):
                    redirectUrlJavaScript("admin/managePages/?delete=false");
                endif;
            endif;
        endif;

        // View Manage Pages Page
        if($managePagesData = $pagesModel->readAllPages()):
            $this->view("admin/manage-pages", NULL, $managePagesData);
        endif;
    }

    public function editPage($pageID)
    {
        // Add Product Model
        $pagesModel = $this->model("asaldiPages");

        // Run Product Submission
        if(isset($_POST["update-page"]) || isset($_POST['move-to-draft'])):

            $data = [
                // Data
                'page-url-en'            => slugify($this->validate("page-url-en","Page Url English", "required")),
                'page-title-en'          => $this->validate("page-title-en", "Page Title", "required"),
                'meta-title-en'          => $this->input("meta-title-en"),
                'meta-keyword-en'        => $this->input("meta-keyword-en"),
                'meta-description-en'    => $this->input("meta-description-en"),
                'page-description-en'    => $this->input("page-description-en", "text"),
                // Data Italian
                'page-url-it'            => slugify($this->validate("page-url-it","Page Url Italian", "required")),
                'page-title-it'          => $this->input("page-title-it"),
                'meta-title-it'          => $this->input("meta-title-it"),
                'meta-keyword-it'        => $this->input("meta-keyword-it"),
                'meta-description-it'    => $this->input("meta-description-it"),
                'page-description-it'    => $this->input("page-description-it", "text"),
                // Data French
                'page-url-fr'            => slugify($this->validate("page-url-fr","Page Url French", "required")),
                'page-title-fr'          => $this->input("page-title-fr"),
                'meta-title-fr'          => $this->input("meta-title-fr"),
                'meta-keyword-fr'        => $this->input("meta-keyword-fr"),
                'meta-description-fr'    => $this->input("meta-description-fr"),
                'page-description-fr'    => $this->input("page-description-fr", "text"),
                // Data Spanish
                'page-url-es'            => slugify($this->validate("page-url-es","Page Url Spanish", "required")),
                'page-title-es'          => $this->input("page-title-es"),
                'meta-title-es'          => $this->input("meta-title-es"),
                'meta-keyword-es'        => $this->input("meta-keyword-es"),
                'meta-description-es'    => $this->input("meta-description-es"),
                'page-description-es'    => $this->input("page-description-es", "text"),
                // Data German
                'page-url-de'            => slugify($this->validate("page-url-de","Page Url German", "required")),
                'page-title-de'          => $this->input("page-title-de"),
                'meta-title-de'          => $this->input("meta-title-de"),
                'meta-keyword-de'        => $this->input("meta-keyword-de"),
                'meta-description-de'    => $this->input("meta-description-de"),
                'page-description-de'    => $this->input("page-description-de", "text"),
                // Data For All
                'page-tags'              => $this->input("page-tags"),
                'page-unique-id'         => $this->input("page-unique-id")
            ];

            // Set Product Status
            if(isset($_POST['update-page'])):
                $data['page-status'] = "publish";
            elseif(isset($_POST['move-to-draft'])):
                $data['page-status'] = "draft";
            endif;

            // Run Add Page Submission
            if($this->formSubmission()):
                if($submitPage = $pagesModel->updatePage($data)):
                    if($this->setFlash("pageUpdated", "<b>Page Updated Successfully.</b>")):
                        $reUrl = "admin/editPage/" . $data['page-unique-id'] . "/?update=true";
                        redirectUrlJavaScript($reUrl);
                    endif;
                else:
                    if($this->setFlash("pageUpdatingError", "<b>Failed To Update Page, Please Try Again.</b>")):
                        $reUrl = "admin/editPage/" . $data['page-unique-id'] . "/?update=true";
                        redirectUrlJavaScript($reUrl);
                    endif;
                endif;
            endif;

        endif;

        // View Manage Pages Page
        if($editPagesData = $pagesModel->readSinglePage($pageID)):
            $this->view("admin/edit-page", NULL, $editPagesData);
        endif;
    }

    #########################
    ### Posts Controllers ###
    #########################

    public function addPost()
    {
        // View Add New Post Page
        $this->view("admin/add-new-post");
    }

    public function managePosts()
    {
        // View Manage Posts Page
        $this->view("admin/manage-posts");
    }

    #########################
    ### Media Controllers ###
    #########################

    public function manageMedia()
    {
        // View Manage Media Page
        $this->view("admin/manage-media");
    }

    public function addMedia()
    {
        // View Add New Media Page
        $this->view("admin/add-new-media");
    }

    public function retrieveImages($type)
    {
        // Add Image Retrieve Model
        $imagesModel = $this->model("asaldiImages");
        $returnMedia = $imagesModel->retrieve();
        // Single
        if($type == "single"):
            echo("<table class='table'>");
            echo("<thead>");
                echo("<tr>");
                    echo("<td>Select</td>");
                    echo("<td>Image</td>");
                    echo("<td>Name</td>");
                echo("</tr>");
            echo("</thead>");
            echo("<tbody>");
            echo("<form method='POST'>");
            foreach($returnMedia as $allMedia):
                echo("<tr>");
                    echo("<th><input name='selectSingleImage[]' value='$allMedia' type='radio'></th>");
                    echo("<th><img src='/media/$allMedia' width='70'></th>");
                    echo("<th>$allMedia</th>");
                echo("</tr>");
            endforeach;
            echo("</form>");
            echo("</tbody>");
            echo("</table>");
        // Multiple
        elseif($type == "multiple"):
            echo("<table class='table'>");
            echo("<thead>");
                echo("<tr>");
                    echo("<td>#</td>");
                    echo("<td>Image</td>");
                    echo("<td>Name</td>");
                echo("</tr>");
            echo("</thead>");
            echo("<tbody>");
            echo("<form method='POST'>");
            foreach($returnMedia as $allMedia):
                echo("<tr>");
                    echo("<th><input name='selectMultipleImages[]' value='$allMedia' type='checkbox'></th>");
                    echo("<th><img src='/media/$allMedia' width='70'></th>");
                    echo("<th>$allMedia</th>");
                echo("</tr>");
            endforeach;
            echo("</form>");
            echo("</tbody>");
            echo("</table>");
        endif;
    }

    public function upload()
    {
        // Add Image Upload Model
        $imagesModel = $this->model("asaldiImages");
        $imagesModel->upload($_FILES);
    }

    ##########################
    ### Orders Controllers ###
    ##########################

    public function ordersList()
    {
        // View Order List Page
        $this->view("admin/orders-list");
    }

    public function invoiceList()
    {
        // View Invoices List Page
        $this->view("admin/invoice-list");
    }

    #########################
    ### Users Controllers ###
    #########################

    public function users()
    {
        // View Users Page
        $this->view("admin/users");
    }

}

?>