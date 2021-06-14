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
            <h3>eCommerce <span>/ Manage Product</span></h3>
        </div>
    </div>
    <!-- Page Heading End -->

    <!-- Product Added Alert Start -->
    <div class="col-12">
        <?php $this->flash("productCreated","alert alert-success mt-5"); ?>
        <?php $this->flash("productCreatingError","alert alert-danger mt-5"); ?>
    </div>
    <!-- Product Added Alert End -->

    <!-- Product Delete Alert Start -->
    <div class="col-12">
        <?php
        if(isset($_GET['delete'])):
            $this->flash("productDeleted","alert alert-success mt-5");
            $this->flash("productDeletingError","alert alert-danger mt-5");
        endif;
        ?>
    </div>
    <!-- Product Delete Alert End -->

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
                        <th>Photo</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Sales</th>
                        <th>In Stock</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($data !== "Products Not Found"):
                    foreach($data as $result):
                        $productID     = $result->product_unique_id;
                        $productImg    = $result->featured_image;
                        $productTitle  = $result->title_en;
                        $productPrice  = $result->prodcut_price_euro;
                        $productSales  = $result->sales;
                        $productStock  = $result->product_stock;
                        $productDate   = substr($result->publish_date, 0, 10);
                        $productStatus = $result->product_status;
                        // Product Status
                        if($productStatus == "publish"):
                            $showStatus = "<span class='badge badge-primary'>Published</span>";
                        elseif($productStatus == "draft"):
                            $showStatus = "<span class='badge badge-warning'>Draft</span>";
                        endif;
                        // Product Out Of Stock
                        if($productStock == 0):
                            $showStatus = "<span class='badge badge-danger'>Out Of Stock</span>";
                        endif;
                    ?>
                    <tr>
                        <td>#<?php echo($productID); ?></td>
                        <td><img src="/media/<?php echo($productImg); ?>" alt="Product-image-not-found" width="60" class="product-image rounded-circle"></td>
                        <td><a href="updateProduct/<?php echo($productID); ?>"><?php echo($productTitle); ?></a></td>
                        <td>€<?php echo($productPrice); ?></td>
                        <td><?php echo($productSales); ?></td>
                        <td><?php echo($productStock); ?></td>
                        <td><?php echo($productDate); ?></td>
                        <td><?php echo($showStatus); ?></td>
                        <td>
                            <div class="table-action-buttons">
                                <a href="/admin/editProduct/<?php echo($productID); ?>" class="edit button button-box button-xs button-info"><i class="zmdi zmdi-edit"></i></a>
                                <a onclick="confirmation(event)" href="/admin/manageProducts/delete/<?php echo($productID); ?>" class="delete button button-box button-xs button-danger"><i class="zmdi zmdi-delete"></i></a>
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

<?php
// Footer
attachViews("admin/components/bottom");
?>