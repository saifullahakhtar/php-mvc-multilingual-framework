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
            <h3>Orders <span>/ Invoice List</span></h3>
        </div>
    </div>
    <!-- Page Heading End -->

</div>
<!-- Page Headings End -->

<div class="row mbn-30">

    <!--Alert Start-->
    <div class="col-12 mb-30">
        <div class="alert alert-primary">
            <button class="close" data-dismiss="alert"><i class="zmdi zmdi-close"></i></button>
            <i class="zmdi zmdi-alert-polygon"></i> This page has been enhanced for download. Click the print button at the bottom of the invoice to <a href="#" class="alert-link">download.</a>
        </div>
    </div>
    <!--Alert End-->

    <!-- Invoice List Start -->
    <div class="col-12 mb-30">
        <div class="table-responsive">
            <table class="table table-bordered mb-0">

                <!-- Table Head Start -->
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Date</th>
                        <th>Invoice ID</th>
                        <th>Order No</th>
                        <th>Customer</th>
                        <th>Due</th>
                        <th>Balance</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!-- Table Head End -->

                <!-- Table Body Start -->
                <tbody>
                    <tr>
                        <td>#01</td>
                        <td>11 March 2019</td>
                        <td>IAD-101</td>
                        <td>SPRO-128715</td>
                        <td>Tyler Meyer</td>
                        <td>20 April 2019</td>
                        <td>$575185</td>
                        <td>$266452</td>
                        <td>
                            <div class="table-action-buttons">
                                <a class="view button button-box button-xs button-primary" href="invoice-details.html"><i class="zmdi zmdi-more"></i></a>
                                <a class="edit button button-box button-xs button-info" href="#"><i class="zmdi zmdi-edit"></i></a>
                                <a class="delete button button-box button-xs button-danger" href="#"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <!-- Table Body End -->

            </table>
        </div>
    </div>
    <!-- Invoice List End -->

</div>

</div>
<!-- Content Body End -->

<?php
// Footer
attachViews("admin/components/bottom");
?>