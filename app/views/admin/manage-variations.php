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
            <h3>eCommerce <span>/ Manage Variations</span></h3>
        </div>
    </div>
    <!-- Page Heading End -->

    <!-- Variations Add Alert Start -->
    <div class="col-12">
        <?php $this->flash("variationsAdded","alert alert-success mt-5"); ?>
        <?php $this->flash("variationsAddingError","alert alert-danger mt-5"); ?>
    </div>
    <!-- Variations Add Alert End -->

    <!-- Variations Delete Alert Start -->
    <div class="col-12">
        <?php
        if(isset($_GET['delete'])):
            $this->flash("variationDeleted","alert alert-success mt-5");
            $this->flash("variationDeletingError","alert alert-danger mt-5");
        endif;
        ?>
    </div>
    <!-- Variations Delete Alert End -->

</div>
<!-- Page Headings End -->

<div class="row">

    <!--Manage Product List Start-->
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-vertical-middle">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Collection Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($data !== "Variations Not Found"):
                    foreach($data as $result):
                        $productID      = $result->product_unique_id;
                        $collectionName = $result->variation_collection_name;

                    ?>
                    <tr>
                        <td>#<?php echo($productID); ?></td>
                        <td><a href="#"><?php echo($collectionName); ?></a></td>
                        <td>
                            <div class="table-action-buttons">
                                <a href="/admin/editVariations/<?php echo($productID); ?>" class="edit button button-box button-xs button-info"><i class="zmdi zmdi-edit"></i></a>
                                <a onclick="confirmation(event)" href="/admin/manageVariations/delete/<?php echo($productID); ?>" class="delete button button-box button-xs button-danger"><i class="zmdi zmdi-delete"></i></a>
                            </div>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--Manage Product List End-->

</div>

</div>
<!-- Content Body End -->

<!-- Live Scripts Only For This Page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
// Footer
attachViews("admin/components/bottom");
?>