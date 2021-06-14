<?php
attachViews("admin/components/top");
attachViews("admin/components/header");
attachViews("admin/components/sidebar");
?>

<!-- Content Body Start -->
<div class="content-body">

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">

    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>Media <span>/ Add New Media</span></h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->

<div class="row">

    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Upload Media</h3>
            </div>
            <div class="box-body">
                <input class="file-pond-1" type="file" multiple>
            </div>
        </div>
    </div>

</div>

</div>
<!-- Content Body End -->

<!-- Live Scripts Only For This Page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
// Plugins Only For This Page
linkJS("admin-assets/js/plugins/filepond/filepond.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond-plugin-image-exif-orientation.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond-plugin-image-preview.min.js");
linkJS("admin-assets/js/plugins/filepond/filepond.active.js");
// Footer
attachViews("admin/components/bottom");
?>