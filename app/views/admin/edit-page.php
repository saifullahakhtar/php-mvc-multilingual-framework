<?php
attachViews("admin/components/top");
linkCSS("admin-assets/css/plugins/summernote-bs4.css"); // CSS Only For This Page
linkCSS("admin-assets/css/summernote-custom.css"); // CSS Only For This Page
attachViews("admin/components/header");
attachViews("admin/components/sidebar");
?>

<!-- Get Edit Page Data Start -->
<?php
// Data English
$page_url_en         = $data->url_en;
$page_title_en       = $data->title_en;
$meta_title_en       = $data->meta_title_en;
$meta_keyword_en     = $data->meta_keyword_en;
$meta_description_en = $data->meta_description_en;
$page_description_en = $data->description_en;
// Data Italian
$page_url_it         = $data->url_it;
$page_title_it       = $data->title_it;
$meta_title_it       = $data->meta_title_it;
$meta_keyword_it     = $data->meta_keyword_it;
$meta_description_it = $data->meta_description_it;
$page_description_it = $data->description_it;
// Data French
$page_url_fr         = $data->url_fr;
$page_title_fr       = $data->title_fr;
$meta_title_fr       = $data->meta_title_fr;
$meta_keyword_fr     = $data->meta_keyword_fr;
$meta_description_fr = $data->meta_description_fr;
$page_description_fr = $data->description_fr;
// Data Spanish
$page_url_es         = $data->url_es;
$page_title_es       = $data->title_es;
$meta_title_es       = $data->meta_title_es;
$meta_keyword_es     = $data->meta_keyword_es;
$meta_description_es = $data->meta_description_es;
$page_description_es = $data->description_es;
// Data German
$page_url_de         = $data->url_de;
$page_title_de       = $data->title_de;
$meta_title_de       = $data->meta_title_de;
$meta_keyword_de     = $data->meta_keyword_de;
$meta_description_de = $data->meta_description_de;
$page_description_de = $data->description_de;
// Data For All
$page_unique_id      = $data->page_unique_id;
$page_tags           = $data->page_tags;
?>
<!-- Get Edit Page Data End -->

<div class="content-body">

<!-- Page Alert Alert Start -->
<?php
if(isset($_GET['update'])):
    $this->flash("pageUpdated","alert alert-success mt-5");
    $this->flash("pageUpdatingError","alert alert-danger mt-5");
endif;
?>
<!-- Page Update Alert End -->

<form action="" method="POST">

    <!-- Product Unique ID -->
    <input type="hidden" name="page-unique-id" value="<?php echo($page_unique_id); ?>">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">
        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Pages <span>/ Add New Page</span></h3>
            </div>
        </div>
        <!-- Page Heading End -->
        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="buttons-group">
                <button class="button button-outline button-primary" name="update-page">Update</button>
                <button class="button button-outline button-info" name="move-to-draft">Move To Draft</button>
                <button class="button button-outline button-danger" name="delete-page">Delete Page</button>
            </div>
        </div>
        <!-- Page Button Group End -->
    </div>
    <!-- Page Headings End -->

    <!--Add New Product Start-->
    <div class="col-lg-12 col-12 mb-30">
        <div class="box">
            <div class="box-body">
                <div class="row mbn-15">
                    <div class="col-md-2 col-12 mb-15">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#English">English</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#Italian">Italian</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#French">French</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#Spanish">Spanish</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#German">German</a></li>
                        </ul>
                    </div>
                    <div class="col-md-10 col-12 mb-15">
                        <div class="tab-content">
                        
                        <!-- ########## English Start ########## -->
                        <div class="tab-pane fade show active" id="English">
                            <!-- Add or Edit Page Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Page In English</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-en" value="<?php echo($page_title_en); ?>">
                                        <span class="text-danger"> <?php echo($this->formErrors('page-title-en')); ?> </span>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-en" value="<?php echo($meta_title_en); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-en" value="<?php echo($meta_keyword_en); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-en" value="<?php echo($meta_description_en); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-en" class="summernote"><?php echo($page_description_en); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Page End -->
                        </div>

                        <!-- ########## Italian Start ########## -->
                        <div class="tab-pane fade" id="Italian">
                            <!-- Add or Edit Page Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Page In Italian</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-it" value="<?php echo($page_title_it); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-it" value="<?php echo($meta_title_it); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-it" value="<?php echo($meta_keyword_it); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-it" value="<?php echo($meta_description_it); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-it" class="summernote"><?php echo($page_description_it); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Page End -->
                        </div>

                        <!-- ########### French Start ########## -->
                        <div class="tab-pane fade" id="French">
                            <!-- Add or Edit Page Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Page In French</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-fr" value="<?php echo($page_title_fr); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-fr" value="<?php echo($meta_title_fr); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-fr" value="<?php echo($meta_keyword_fr); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-fr" value="<?php echo($meta_description_fr); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-fr" class="summernote"><?php echo($page_description_fr); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Page End -->
                        </div>
                        
                        <!-- ########### Spanish Start ######### -->
                        <div class="tab-pane fade" id="Spanish">
                            <!-- Add or Edit Page Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Page In Spanish</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-es" value="<?php echo($page_title_es); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-es" value="<?php echo($meta_title_es); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-es" value="<?php echo($meta_keyword_es); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-es" value="<?php echo($meta_description_es); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-es" class="summernote"><?php echo($page_description_es); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Page End -->
                        </div>

                        <!-- ########### German Start ########## -->
                        <div class="tab-pane fade" id="German">
                            <!-- Add or Edit Page Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Page In German</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-de" value="<?php echo($page_title_de); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-de" value="<?php echo($meta_title_de); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-de" value="<?php echo($meta_keyword_de); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-de" value="<?php echo($meta_description_de); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-de" class="summernote"><?php echo($page_description_de); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Page End -->
                        </div>

                        <!-- ############ Info For All ########### -->
                        <div class="add-edit-product-wrap col-12"><hr>

                            <h4 class="title">Additional Information</h4>

                            <div class="row">
                                <div class="col-lg-12 col-12 mb-30">
                                    <input class="form-control" type="text" placeholder="Tags" name="page-tags">
                                </div>
                            </div>
                            

                            <h4 class="title">Multilingual URLs</h4>
                            <p class="form-help-text mt-0 mb-0"><span class="text-warning">Note:</span> All Page URLs must be unique</p>
                            <p class="form-help-text mt-0"><span class="text-warning">Note:</span> Copy / Paste functions will not work in URL fields</p>

                            <div class="row">
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_en" type="text" placeholder="Page Url English (SEO URL)*" name="page-url-en" value="<?php echo($page_url_en); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-en')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_it" type="text" placeholder="Page Url Italian (SEO URL)*" name="page-url-it" value="<?php echo($page_url_it); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-it')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_fr" type="text" placeholder="Page Url French (SEO URL)*" name="page-url-fr" value="<?php echo($page_url_fr); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-fr')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_es" type="text" placeholder="Page Url Spanish (SEO URL)*" name="page-url-es" value="<?php echo($page_url_es); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-es')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_de" type="text" placeholder="Page Url German (SEO URL)*" name="page-url-de" value="<?php echo($page_url_de); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-de')); ?> </span>
                                </div>
                                <div id="urLMsg" class="col-lg-12 col-12 mb-30">
                                    <!-- Here Goes The Urls Error -->
                                </div>
                            </div>

                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
</form>
</div>

<!-- Live Scripts Only For This post -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
// Plugins Only For This post
linkJS("admin-assets/js/seo-url-validation.js");
linkJS("admin-assets/js/plugins/summernote/summernote-bs4.js");
linkJS("admin-assets/js/plugins/summernote/summernote.active.js");
// Footer
attachViews("admin/components/bottom");
?>