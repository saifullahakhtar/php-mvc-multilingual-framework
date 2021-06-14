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
            <h3>Posts <span>/ Manage Posts</span></h3>
        </div>
    </div><!-- Page Heading End -->

</div><!-- Page Headings End -->

<div class="row">

    <!--Manage Product List Start-->
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-vertical-middle">
                <thead>
                    <tr>
                        <th>Post ID</th>
                        <th>Image</th>
                        <th>Post Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#MSP40022</td>
                        <td><img src="assets/images/product/list-product-1.jpg" alt="" class="product-image rounded-circle"></td>
                        <td><a href="#">Spro 4 Laptop</a></td>
                        <td>13 Feb 2018</td>
                        <td><span class="badge badge-success">Publish</span></td>
                        <td>
                            <div class="table-action-buttons">
                                <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--Manage Product List End-->

</div>

</div>
<!-- Content Body End -->

<?php
// Footer
attachViews("admin/components/bottom");
?>