<?php
attachViews("admin/components/top");
linkCSS("admin-assets/css/plugins/summernote-bs4.css"); // CSS Only For This Page
linkCSS("admin-assets/css/summernote-custom.css"); // CSS Only For This Page
attachViews("admin/components/header");
attachViews("admin/components/sidebar");
?>

<div class="content-body">
<form action="" method="POST">

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
                <button class="button button-outline button-primary" name="publish-page">Save & Publish</button>
                <button class="button button-outline button-info" name="draft-page">Save to Draft</button>
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
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-en" value="<?php echo($this->recoverText('page-title-en')); ?>">
                                        <span class="text-danger"> <?php echo($this->formErrors('page-title-en')); ?> </span>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-en" value="<?php echo($this->recoverText('meta-title-en')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-en" value="<?php echo($this->recoverText('meta-keyword-en')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-en" value="<?php echo($this->recoverText('meta-description-en')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-en" class="summernote"><?php echo($this->recoverText('page-description-en')); ?></textarea>
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
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-it" value="<?php echo($this->recoverText('page-title-it')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-it" value="<?php echo($this->recoverText('meta-title-it')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-it" value="<?php echo($this->recoverText('meta-keyword-it')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-it" value="<?php echo($this->recoverText('meta-description-it')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-it" class="summernote"><?php echo($this->recoverText('page-description-it')); ?></textarea>
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
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-fr" value="<?php echo($this->recoverText('page-title-fr')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-fr" value="<?php echo($this->recoverText('meta-title-fr')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-fr" value="<?php echo($this->recoverText('meta-keyword-fr')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-fr" value="<?php echo($this->recoverText('meta-description-fr')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-fr" class="summernote"><?php echo($this->recoverText('page-description-fr')); ?></textarea>
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
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-es" value="<?php echo($this->recoverText('page-title-es')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-es" value="<?php echo($this->recoverText('meta-title-es')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-es" value="<?php echo($this->recoverText('meta-keyword-es')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-es" value="<?php echo($this->recoverText('meta-description-es')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-es" class="summernote"><?php echo($this->recoverText('page-description-es')); ?></textarea>
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
                                        <input class="form-control" type="text" placeholder="Page Name / Title*" name="page-title-de" value="<?php echo($this->recoverText('page-title-de')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-de" value="<?php echo($this->recoverText('meta-title-de')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-de" value="<?php echo($this->recoverText('meta-keyword-de')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-de" value="<?php echo($this->recoverText('meta-description-de')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="page-description-de" class="summernote"><?php echo($this->recoverText('page-description-de')); ?></textarea>
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
                                    <input class="form-control slug" id="url_en" type="text" placeholder="Page Url English (SEO URL)*" name="page-url-en" value="<?php echo($this->recoverText('page-url-en')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-en')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_it" type="text" placeholder="Page Url Italian (SEO URL)*" name="page-url-it" value="<?php echo($this->recoverText('page-url-it')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-it')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_fr" type="text" placeholder="Page Url French (SEO URL)*" name="page-url-fr" value="<?php echo($this->recoverText('page-url-fr')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-fr')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_es" type="text" placeholder="Page Url Spanish (SEO URL)*" name="page-url-es" value="<?php echo($this->recoverText('page-url-es')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('page-url-es')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_de" type="text" placeholder="Page Url German (SEO URL)*" name="page-url-de" value="<?php echo($this->recoverText('page-url-de')); ?>" autocomplete="off">
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