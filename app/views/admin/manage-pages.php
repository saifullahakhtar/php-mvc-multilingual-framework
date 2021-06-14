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
            <h3>Pages <span>/ Manage Pages</span></h3>
        </div>
    </div>
    <!-- Page Heading End -->

    <!-- Page Added Alert Start -->
    <div class="col-12">
        <?php $this->flash("pageCreated","alert alert-success mt-5"); ?>
        <?php $this->flash("pageCreatingError","alert alert-danger mt-5"); ?>
    </div>
    <!-- Page Added Alert End -->

    <!-- Page Delete Alert Start -->
    <div class="col-12">
        <?php
        if(isset($_GET['delete'])):
            $this->flash("pageDeleted","alert alert-success mt-5");
            $this->flash("pageDeletingError","alert alert-danger mt-5");
        endif;
        ?>
    </div>
    <!-- Page Delete Alert End -->

</div>
<!-- Page Headings End -->

<div class="row">

    <!--Manage Product List Start-->
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-vertical-middle">
                <thead>
                    <tr>
                        <th>Page ID</th>
                        <th>Page Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($data !== "Products Not Found"):
                    foreach($data as $result):
                        $pageID     = $result->page_unique_id;
                        $pageTitle  = $result->title_en;
                        $pageDate   = substr($result->publish_date, 0, 10);
                        $pageStatus = $result->page_status;
                        // Product Status
                        if($pageStatus == "publish"):
                            $showStatus = "<span class='badge badge-primary'>Published</span>";
                        elseif($pageStatus == "draft"):
                            $showStatus = "<span class='badge badge-warning'>Draft</span>";
                        endif;
                    ?>
                    <tr>
                        <td>#<?php echo($pageID); ?></td>
                        <td><a href="#"><?php echo($pageTitle); ?></a></td>
                        <td><?php echo($pageDate); ?></td>
                        <td><?php echo($showStatus); ?></td>
                        <td>
                            <div class="table-action-buttons">
                                <a href="/admin/editPage/<?php echo($pageID); ?>" class="edit button button-box button-xs button-info"><i class="zmdi zmdi-edit"></i></a>
                                <a onclick="confirmation(event)" href="/admin/managePages/delete/<?php echo($pageID); ?>" class="delete button button-box button-xs button-danger"><i class="zmdi zmdi-delete"></i></a>
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