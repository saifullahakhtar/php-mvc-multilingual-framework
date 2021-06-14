<?php
attachViews("admin/components/top");
linkCSS("admin-assets/css/plugins/summernote-bs4.css"); // CSS Only For This Page
linkCSS("admin-assets/css/add-product-custom-style.css"); // CSS Only For This Page
linkCSS("admin-assets/css/dropzone-custom.css"); // CSS Only For This Page
?>
<!-- Dropzone CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />
<?php
attachViews("admin/components/header");
attachViews("admin/components/sidebar");
?>

<div class="content-body">
<form action="" method="POST" enctype="multipart/form-data">

    <!-- Page Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">
        <!-- Page Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>eCommerce <span>/ Add New Product</span></h3>
            </div>
        </div>
        <!-- Page Heading End -->
        <!-- Page Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="buttons-group">
                <button class="button button-outline button-primary submit-add-btn" name="publish-product">Save & Publish</button>
                <button class="button button-outline button-info submit-add-btn" name="draft-product">Save to Draft</button>
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
                            <!-- Add or Edit Product Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">About Product In English</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Product Name / Title*" name="product-title-en" value="<?php echo($this->recoverText('product-title-en')); ?>">
                                        <span class="text-danger"> <?php echo($this->formErrors('product-title-en')); ?> </span>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-en" value="<?php echo($this->recoverText('meta-title-en')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea class="summernote" name="product-description-en"><?php echo($this->recoverText('product-description-en')); ?></textarea>
                                        <span class="text-danger"> <?php echo($this->formErrors('short-description-en')); ?> </span>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-en" value="<?php echo($this->recoverText('meta-keyword-en')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-en" value="<?php echo($this->recoverText('meta-description-en')); ?>">
                                    </div>
                                    <div class="col-lg-12 col-12 mb-30">
                                        <textarea class="form-control" type="text" placeholder="Short Description" name="short-description-en"><?php echo($this->recoverText('short-description-en')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Product End -->
                        </div>

                        <!-- ########## Italian Start ########## -->
                        <div class="tab-pane fade" id="Italian">
                            <!-- Add or Edit Product Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">About Product In Italian</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Product Name / Title*" name="product-title-it" value="<?php echo($this->recoverText('product-title-it')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-it" value="<?php echo($this->recoverText('meta-title-it')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea class="summernote" name="product-description-it"><?php echo($this->recoverText('product-description-it')); ?></textarea>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-it" value="<?php echo($this->recoverText('meta-keyword-it')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-it" value="<?php echo($this->recoverText('meta-description-it')); ?>">
                                    </div>
                                    <div class="col-lg-12 col-12 mb-30">
                                        <textarea class="form-control" type="text" placeholder="Short Description" name="short-description-it"><?php echo($this->recoverText('short-description-it')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Product End -->
                        </div>

                        <!-- ########### French Start ########## -->
                        <div class="tab-pane fade" id="French">
                            <!-- Add or Edit Product Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">About Product In French</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Product Name / Title*" name="product-title-fr" value="<?php echo($this->recoverText('product-title-fr')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-fr" value="<?php echo($this->recoverText('meta-title-fr')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea class="summernote" name="product-description-fr"><?php echo($this->recoverText('product-description-fr')); ?></textarea>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-fr" value="<?php echo($this->recoverText('meta-keyword-fr')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-fr" value="<?php echo($this->recoverText('meta-description-fr')); ?>">
                                    </div>
                                    <div class="col-lg-12 col-12 mb-30">
                                        <textarea class="form-control" type="text" placeholder="Short Description" name="short-description-fr"><?php echo($this->recoverText('short-description-fr')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Product End -->
                        </div>
                        
                        <!-- ########### Spanish Start ######### -->
                        <div class="tab-pane fade" id="Spanish">
                            <!-- Add or Edit Product Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">About Product In Spanish</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Product Name / Title*" name="product-title-es" value="<?php echo($this->recoverText('product-title-es')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-es" value="<?php echo($this->recoverText('meta-title-es')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea class="summernote" name="product-description-es"><?php echo($this->recoverText('product-description-es')); ?></textarea>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-es" value="<?php echo($this->recoverText('meta-keyword-es')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-es" value="<?php echo($this->recoverText('meta-description-es')); ?>">
                                    </div>
                                    <div class="col-lg-12 col-12 mb-30">
                                        <textarea class="form-control" type="text" placeholder="Short Description" name="short-description-es"><?php echo($this->recoverText('short-description-es')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Product End -->
                        </div>

                        <!-- ########### German Start ########## -->
                        <div class="tab-pane fade" id="German">
                            <!-- Add or Edit Product Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">About Product In German</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Product Name / Title*" name="product-title-de" value="<?php echo($this->recoverText('product-title-de')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-de" value="<?php echo($this->recoverText('meta-title-de')); ?>">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="product-description-de" class="summernote"><?php echo($this->recoverText('product-description-de')); ?></textarea>
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-de" value="<?php echo($this->recoverText('meta-keyword-de')); ?>">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-de" value="<?php echo($this->recoverText('meta-description-de')); ?>">
                                    </div>
                                    <div class="col-lg-12 col-12 mb-30">
                                        <textarea class="form-control" type="text" placeholder="Short Description" name="short-description-de"><?php echo($this->recoverText('short-description-de')); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Product End -->
                        </div>

                        <!-- ############ Info For All ########### -->
                        <div class="add-edit-product-wrap col-12"><hr>
                            <div class="product-upload-gallery row flex-wrap">
                                <div class="col-6 mb-30">
                                    <p class="form-help-text mt-0"><h4>Featured Image</h4> (Upload Maximum 800 x 800 px & Max size 2mb.)</p>
                                    <a href="#" class="button button-primary" data-toggle="modal" data-target="#Modal1"><i class="fa fa-cloud-upload"></i> Featured Image</a>
                                    <input id="singleImageText" name="single-image-name" type="hidden">
                                    <img id="singleImageSrc" src="" alt="Image Not Selected" width="80%">
                                </div>
                                <div class="col-6 mb-30">
                                    <p class="form-help-text mt-0"><h4>Image Gallery</h4> (Upload Maximum 800 x 800 px & Max size 2mb.)</p>
                                    <a href="#" class="button button-primary" data-toggle="modal" data-target="#Modal2"><i class="fa fa-cloud-upload"></i> Images Gallery</a>
                                    <input id="MultipleImageText" name="multiple-images-names" type="hidden">
                                    <img id="MultipleImageSrc" src="" alt="Images Not Selected" width="80%">
                                </div>
                            </div>

                            <h4 class="title">Product Information</h4>

                            <div class="row">
                                <div class="col-lg-6 col-12 mb-30">
                                    <input class="form-control" type="text" placeholder="Product Price (Euro)*" name="product-price-euro" value="<?php echo($this->recoverText('product-price-euro')); ?>">
                                    <span class="text-danger"> <?php echo($this->formErrors('product-price-euro')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input class="form-control" type="text" placeholder="Discount Price (Euro)" name="discount-price-euro" value="<?php echo($this->recoverText('discount-price-euro')); ?>">
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input class="form-control" type="text" placeholder="Product Price (Pound)*" name="product-price-pound" value="<?php echo($this->recoverText('product-price-pound')); ?>">
                                    <span class="text-danger"> <?php echo($this->formErrors('product-price-pound')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input class="form-control" type="text" placeholder="Discount Price (Pound)" name="discount-price-pound" value="<?php echo($this->recoverText('discount-price-pound')); ?>">
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input class="form-control" type="number" placeholder="Stock  Quantity" name="product-stock" value="<?php echo($this->recoverText('product-stock')); ?>">
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input class="form-control" type="text" placeholder="SKU Number" name="product-sku" value="<?php echo($this->recoverText('product-sku')); ?>">
                                </div>
                                <!--Multiple Select-->
                                <div class="col-lg-6 col-12 mb-30">
                                    <select class="form-control select2" name="product-categories[]" multiple>
                                        <option selected>Uncategorize</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                    </select>
                                </div>
                                <!--Multiple Select-->
                            </div>

                            <h4 class="title">Multilingual URLs</h4>
                            <p class="form-help-text mt-0 mb-0"><span class="text-warning">Note:</span> All Product URLs must be unique</p>
                            <p class="form-help-text mt-0"><span class="text-warning">Note:</span> Copy / Paste functions will not work in URL fields</p>

                            <div class="row">
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_en" type="text" placeholder="Product Url English (SEO URL)*" name="product-url-en" value="<?php echo($this->recoverText('product-url-en')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('product-url-en')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_it" type="text" placeholder="Product Url Italian (SEO URL)*" name="product-url-it" value="<?php echo($this->recoverText('product-url-it')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('product-url-it')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_fr" type="text" placeholder="Product Url French (SEO URL)*" name="product-url-fr" value="<?php echo($this->recoverText('product-url-fr')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('product-url-fr')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_es" type="text" placeholder="Product Url Spanish (SEO URL)*" name="product-url-es" value="<?php echo($this->recoverText('product-url-es')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('product-url-es')); ?> </span>
                                </div>
                                <div class="col-lg-6 col-6 mb-30">
                                    <input class="form-control slug" id="url_de" type="text" placeholder="Product Url German (SEO URL)*" name="product-url-de" value="<?php echo($this->recoverText('product-url-de')); ?>" autocomplete="off">
                                    <span class="text-danger"> <?php echo($this->formErrors('product-url-de')); ?> </span>
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

<!-- Single Media Model View Start -->
<div class="modal fade" id="Modal1" style="margin-top: 0px;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select / Upload Image</h5>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <!--Basic Tab Start-->
                <div class="box">
                    <div class="box-body">
                        <ul class="nav nav-tabs mb-15">
                            <li class="nav-item" style="width: 50%;">
                                <a class="nav-link active" data-toggle="tab" href="#select1">Select Image</a>
                            </li>
                            <li class="nav-item" style="width: 50%;">
                                <a class="nav-link" data-toggle="tab" href="#upload1">Upload Image</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="select1">
                                <div class="col-md-12 reload-btn">
                                    <span class="display">Refresh Images <span class="fa fa-refresh"></span></span>
                                </div>
                                <hr>
                                <div id="singleImage"></div>
                            </div>
                            <div class="tab-pane fade" id="upload1">
                                <form action="<?php goToUrl("admin/upload"); ?>" id="singleImageDrop" class="dropzone"></form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Basic Tab End-->
            </div>
            <div class="modal-footer">
                <button class="button button-danger" data-dismiss="modal">Close</button>
                <button id="selectSingle" class="button button-primary" data-dismiss="modal">Select Image</button>
            </div>
        </div>
    </div>
</div>
<!-- Single Media Model View End -->

<!-- Multiple Media Model View Start -->
<div class="modal fade" id="Modal2" style="margin-top: 0px;">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select / Upload Image</h5>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <!--Basic Tab Start-->
                <div class="box">
                    <div class="box-body">
                        <ul class="nav nav-tabs mb-15">
                            <li class="nav-item" style="width: 50%;">
                                <a class="nav-link active" data-toggle="tab" href="#select2">Select Image</a>
                            </li>
                            <li class="nav-item" style="width: 50%;">
                                <a class="nav-link" data-toggle="tab" href="#upload2">Upload Image</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="select2">
                                <div class="col-md-12 reload-btn">
                                    <span class="display">Refresh Images <span class="fa fa-refresh"></span></span>
                                </div>
                                <hr>
                                <div id="multipleImages"></div>
                            </div>
                            <div class="tab-pane fade" id="upload2">
                                <form action="<?php goToUrl("admin/upload"); ?>" id="multipleImagesDrop" class="dropzone"></form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Basic Tab End-->
            </div>
            <div class="modal-footer">
                <button class="button button-danger" data-dismiss="modal">Close</button>
                <button id="selectMultiple" class="button button-primary" data-dismiss="modal">Select Images</button>
            </div>
        </div>
    </div>
</div>
<!-- Multiple Media Model View End -->

<!-- Drop Zone Code JS -->
<script>
Dropzone.autoDiscover = false;
$(function(){
    // Dropzone Single Image
    var myDropzoneSingle = new Dropzone("#singleImageDrop", {
        url: '<?php goToUrl("admin/upload"); ?>',
        paramName: 'file',
        maxFilesize: 2,
        maxFiles: 1,
        acceptedFiles: '.jpg, .jpeg, .png, .svg'
    });
    // Dropzone Multiple Image
    var myDropzoneMultiple = new Dropzone("#multipleImagesDrop", {
        url: '<?php goToUrl("admin/upload"); ?>',
        paramName: 'file',
        maxFilesize: 2,
        maxFiles: 10,
        acceptedFiles: '.jpg, .jpeg, .png, .svg'
    });
});
</script>

<!-- Live Scripts Only For This Page -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js" integrity="sha512-9WciDs0XP20sojTJ9E7mChDXy6pcO0qHpwbEJID1YVavz2H6QBz5eLoDD8lseZOb2yGT8xDNIV7HIe1ZbuiDWg==" crossorigin="anonymous"></script>

<!-- Refresh Dive & Images Handler Code JS -->
<script>
$(document).ready(function(){
    
    // Single Image
    $.get("<?php goToUrl("admin/retrieveImages/single"); ?>", function(data, status){
        $("#singleImage").html(data);
    });

    // Single Image Reload
    $(".display").click(function(){
        $(".fa-refresh").addClass("fa-spin");
        $.get("<?php goToUrl("admin/retrieveImages/single"); ?>", function(data, status){
            $("#singleImage").html(data);
        });
        setTimeout(function(){
            $(".fa-refresh").removeClass("fa-spin");
        }, 3000);
    });

    // Multiple Images
    $.get("<?php goToUrl("admin/retrieveImages/multiple"); ?>", function(data, status){
        $("#multipleImages").html(data);
    });

    // Multiple Images Reload
    $("#display").click(function(){
        $(".fa-refresh").addClass("fa-spin");
        $.get("<?php goToUrl("admin/retrieveImages/multiple"); ?>", function(data, status){
            $("#multipleImages").html(data);
        });
        setTimeout(function(){
            $(".fa-refresh").removeClass("fa-spin");
        }, 3000);
    });
    
});
</script>

<?php
// Plugins Only For This Page
linkJS("admin-assets/js/media-handle.js");
linkJS("admin-assets/js/seo-url-validation.js");
linkJS("admin-assets/js/plugins/select2/select2.full.min.js");
linkJS("admin-assets/js/plugins/select2/select2.active.js");
linkJS("admin-assets/js/plugins/summernote/summernote-bs4.js");
linkJS("admin-assets/js/plugins/summernote/summernote.active.js");
linkJS("admin-assets/js/plugins/nice-select/jquery.nice-select.min.js");
linkJS("admin-assets/js/plugins/nice-select/niceSelect.active.js");
// Footer
attachViews("admin/components/bottom");
?>