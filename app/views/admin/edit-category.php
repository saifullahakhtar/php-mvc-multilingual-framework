<?php
attachViews("admin/components/top");
linkCSS("admin-assets/css/dropzone-custom.css"); // CSS Only For This Page
?>
<!-- Dropzone CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />
<?php
attachViews("admin/components/header");
attachViews("admin/components/sidebar");
?>

<!-- Content Body Start -->
<div class="content-body">

<!-- Category Update Alert Start -->
<?php
if(isset($_GET['update'])):
    $this->flash("categoryUpdated","alert alert-success mt-5");
    $this->flash("categoryUpdatingError","alert alert-danger mt-5");
endif;
?>
<!-- Category Update Alert End -->

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>eCommerce <span>/ Manage Categories / Edit Category</span></h3>
        </div>
    </div>
    <!-- Page Heading End -->

    <!-- Category Added Alert Start -->
    <div class="col-12">
        <?php
        // Category Added Alert
        if(isset($_GET['add'])):
            $this->flash("categoryCreated","alert alert-success mt-5");
            $this->flash("categoryCreatingError","alert alert-danger mt-5");
        endif;
        ?>
    </div>
    <!-- Category Added Alert End -->

</div>
<!-- Page Headings End -->

<div class="row">

    <?php
        $category_unique_id = $data->category_unique_id;
        $category_name_de   = $data->category_name_de;
        $category_name_en   = $data->category_name_en;
        $category_name_es   = $data->category_name_es;
        $category_name_fr   = $data->category_name_fr;
        $category_name_it   = $data->category_name_it;
        $selected_category  = $data->parent_category_id;
        $current_image      = $data->category_image;
    ?>

    <!--Add New Category-->
    <div class="col-4" style="background: #161824;">
        <form action="" id="resetit" method="POST">
            <div class="col-lg-12 col-12 mb-30 mt-30">
                <h4>Create New Category</h4>
            </div>
            <input type="hidden" name="category-unique-id" value="<?php echo($category_unique_id) ?>">
            <div class="col-lg-12 col-12 mb-30">
                <input type="text" class="form-control mt-20" name="category-name-en" placeholder="Category Name (English)*" value="<?php echo($category_name_en); ?>">
                <span class="text-danger"> <?php echo($this->formErrors('category-name-en')); ?> </span>
                <input type="text" class="form-control mt-20" name="category-name-it" placeholder="Category Name (Italian)*" value="<?php echo($category_name_it); ?>">
                <span class="text-danger"> <?php echo($this->formErrors('category-name-it')); ?> </span>
                <input type="text" class="form-control mt-20" name="category-name-fr" placeholder="Category Name (French)*" value="<?php echo($category_name_fr); ?>">
                <span class="text-danger"> <?php echo($this->formErrors('category-name-fr')); ?> </span>
                <input type="text" class="form-control mt-20" name="category-name-es" placeholder="Category Name (Spanish)*" value="<?php echo($category_name_es); ?>">
                <span class="text-danger"> <?php echo($this->formErrors('category-name-es')); ?> </span>
                <input type="text" class="form-control mt-20" name="category-name-de" placeholder="Category Name (German)*" value="<?php echo($category_name_de); ?>">
                <span class="text-danger"> <?php echo($this->formErrors('category-name-de')); ?> </span>
            </div>
            <div class="col-lg-12 col-12 mb-30">
                <label for="select-parent">Select Parent Category</label>
                <select class="form-control select2" name="parent-category">
                    <option value="">Select Parent Category</option>
                    <?php
                    if($data !== "Categories Not Found"):
                        foreach($extraData as $result):
                            $categoryID     = $result->category_unique_id;
                            $categoryNameEn = $result->category_name_en;
                            $categoryParent = $result->parent_category_id;
                            // Selected Value
                            if($selected_category == $categoryParent):
                                $selected = "selected";
                            else:
                                $selected = "";
                            endif;
                            // Hide Sub Categories
                            if($categoryParent == 0):
                                echo("<option value='$categoryID' $selected>$categoryNameEn</option>");
                            else:
                                continue;
                            endif;
                        endforeach;
                    endif;
                    ?>
                </select>
            </div>
            <div class="col-12 mb-30">
                <p class="form-help-text mt-0"><h4>Category Image</h4> (Upload Maximum 800 x 800 px & Max size 2mb.)</p>
                <a href="#" class="button button-primary" data-toggle="modal" data-target="#Modal1"><i class="fa fa-cloud-upload"></i> Select Category Image</a>
                <input id="singleImageText" name="category-image-name" type="hidden" value="<?php echo($current_image); ?>">
                <img id="singleImageSrc" src="/media/<?php echo($current_image); ?>" alt="Image Not Selected" width="80%">
            </div>
            <div class="col-12 mb-30">
                <button class="btn btn-success" name="update-category">Update Category</button>
            </div>
        </form>
    </div>

</div>

</div>
<!-- Content Body End -->

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
});
</script>

<script>
$('.delete_row').click(function(){
    return confirm("Are you sure you want to delete?");
});
</script>

<!-- Live Scripts Only For This Page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    
});
</script>

<?php
// Plugins Only For This Page
linkJS("admin-assets/js/media-handle.js");
linkJS("admin-assets/js/plugins/filepond/filepond.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond-plugin-image-preview.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond.active.js");
// Footer
attachViews("admin/components/bottom");
?>