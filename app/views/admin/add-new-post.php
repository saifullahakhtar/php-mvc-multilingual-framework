<?php
attachViews("admin/components/top");
linkCSS("admin-assets/css/plugins/summernote-bs4.css"); // CSS Only For This Page
linkCSS("admin-assets/css/summernote-custom.css"); // CSS Only For This Page
attachViews("admin/components/header");
attachViews("admin/components/sidebar");
?>

<div class="content-body">
<form method="POST" action="google.com">

    <!-- post Headings Start -->
    <div class="row justify-content-between align-items-center mb-10">
        <!-- post Heading Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="page-heading">
                <h3>Posts <span>/ Add New Post</span></h3>
            </div>
        </div>
        <!-- post Heading End -->
        <!-- post Button Group Start -->
        <div class="col-12 col-lg-auto mb-20">
            <div class="buttons-group">
                <button class="button button-outline button-primary" name="publish-product">Save & Publish</button>
                <button class="button button-outline button-info">Save to Draft</button>
            </div>
        </div>
        <!-- post Button Group End -->
    </div>
    <!-- post Headings End -->

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
                            <!-- Add or Edit Post Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Post In English</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Post Name / Title*" name="post-title-en">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-en">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-en">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-en">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="post-description-en" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Post End -->
                        </div>

                        <!-- ########## Italian Start ########## -->
                        <div class="tab-pane fade" id="Italian">
                            <!-- Add or Edit Post Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Post In Italian</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Post Name / Title*" name="post-title-it">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-it">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-it">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-it">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="post-description-it" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Post End -->
                        </div>

                        <!-- ########### French Start ########## -->
                        <div class="tab-pane fade" id="French">
                            <!-- Add or Edit Post Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Post In French</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Post Name / Title*" name="post-title-fr">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-fr">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-fr">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-fr">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="post-description-fr" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Post End -->
                        </div>
                        
                        <!-- ########### Spanish Start ######### -->
                        <div class="tab-pane fade" id="Spanish">
                            <!-- Add or Edit Post Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Post In Spanish</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Post Name / Title*" name="post-title-es">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-es">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-es">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-es">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="post-description-es" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Post End -->
                        </div>

                        <!-- ########### German Start ########## -->
                        <div class="tab-pane fade" id="German">
                            <!-- Add or Edit post Start -->
                            <div class="add-edit-product-wrap col-12">
                            <div class="add-edit-product-form">
                                <h4 class="title">Post In German</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Post Name / Title*" name="post-title-de">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Title" name="meta-title-de">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Keyword" name="meta-keyword-de">
                                    </div>
                                    <div class="col-lg-6 col-12 mb-30">
                                        <input class="form-control" type="text" placeholder="Meta Description" name="meta-description-de">
                                    </div>
                                    <div class="col-12 mb-30">
                                        <textarea name="post-description-de" class="summernote"></textarea>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!-- Add or Edit Post End -->
                        </div>

                        <!-- ############ Info For All ########### -->
                        <div class="add-edit-product-wrap col-12"><hr>
                            <div class="product-upload-gallery row flex-wrap col-md-6">
                                <div class="col-4 mb-30">
                                    <p class="form-help-text mt-0"><h4>Featured Image</h4> (Upload Maximum 800 x 800 px & Max size 2mb.)</p>
                                    <input class="file-pond-1" type="file" accept="image/x-png,image/gif,image/jpeg" name="product-featured-image">
                                </div>
                            </div>

                            <h4 class="title">Additional Information</h4>

                            <div class="row">
                                <div class="col-lg-6 col-12 mb-30">
                                    <input class="form-control" type="text" placeholder="Tags" name="post-url">
                                </div>
                                <div class="col-lg-6 col-12 mb-30">
                                    <input class="form-control" type="text" placeholder="SEO Url" name="post-url">
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
linkJS("admin-assets/js/plugins/summernote/summernote-bs4.js");
linkJS("admin-assets/js/plugins/summernote/summernote.active.js");
linkJS("admin-assets/js/plugins/nice-select/jquery.nice-select.min.js");
linkJS("admin-assets/js/plugins/nice-select/niceSelect.active.js");
linkJS("admin-assets/js/plugins/filepond/filepond.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond-plugin-image-preview.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond.active.js");
// Footer
attachViews("admin/components/bottom");
?>