<?php
attachViews("admin/components/top");
attachViews("admin/components/header");
attachViews("admin/components/sidebar");
?>

<!-- Content Body Start -->
<div class="content-body">

<form action="" method="POST">

<!-- Count Inputs -->
<input type="hidden" id="countFields" value="" name="count-fields">

<!-- Page Headings Start -->
<div class="row justify-content-between align-items-center mb-10">
    <!-- Page Heading Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="page-heading">
            <h3>eCommerce <span>/ Add New Variations</span></h3>
        </div>
    </div>
    <!-- Page Heading End -->
    <!-- Page Button Group Start -->
    <div class="col-12 col-lg-auto mb-20">
        <div class="buttons-group">
            <button class="button button-outline button-primary submit-add-btn" name="publish-variations">Add Variations To Product</button>
        </div>
    </div>
    <!-- Page Button Group End -->
</div>
<!-- Page Headings End -->

<div class="row">

    <!-- Add New Category Start -->
    <div class="col-12" style="background: #161824;">
        <div class="row">
            <div class="col-lg-12 col-12 mb-30 mt-30">
                <h4>Create New Variations</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-30">
                <input type="text" class="form-control" name="collection-name" placeholder="Attribute Collection Name">
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-30">
                <select class="form-control select2" name="product-unique-id">
                    <option value="">Select Product For Variations*</option>
                    <?php
                        foreach($data as $list):
                            $productID   = $list->product_unique_id;
                            $productName = $list->title_en;
                            echo("<option value='$productID'>$productName</option>");
                        endforeach;
                    ?>
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-12 ml-2 mb-10">
                <h5 class="title">Variation Fields</h5>
                <p class="form-help-text mt-0 mb-0"><span class="text-warning">Note:</span> For multple aariation values, Please use pipe sign (|) between values. <br> <span class="text-warning">For Example:</span> value1|value2|value3</p>
            </div>
            <div id="vboxMain" class="col-12">
                <div class="variation_box col-12 row">
                    <div class="col-lg-3 col-md-3 col-12 mb-30">
                        <input type="text" class="form-control" name="var-name-en[]" placeholder="Variation Name (English)*" required>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 mb-30">
                        <input type="text" class="form-control" name="var-value-en[]" placeholder="Variation Values (English)*" required>
                    </div>
                    <div class='col-lg-3 col-md-3 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-name-it[]" placeholder='Variation Name (Italian)*' required>
                    </div>
                    <div class='col-lg-9 col-md-9 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-value-it[]" placeholder='Variation Values (Italian)*' required>
                    </div>
                    <div class='col-lg-3 col-md-3 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-name-fr[]" placeholder='Variation Name (French)*' required>
                    </div>
                    <div class='col-lg-9 col-md-9 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-value-fr[]" placeholder='Variation Values (French)*' required>
                    </div>
                    <div class='col-lg-3 col-md-3 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-name-es[]" placeholder='Variation Name (Spanish)*' required>
                    </div>
                    <div class='col-lg-9 col-md-9 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-value-es[]" placeholder='Variation Values (Spanish)*' required>
                    </div>
                    <div class='col-lg-3 col-md-3 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-name-de[]" placeholder='Variation Name (German)*' required>
                    </div>
                    <div class='col-lg-9 col-md-9 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-value-de[]" placeholder='Variation Values (German)*' required>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12 ml-2 mb-10">
                    <h5 class="title">Add More</h5>
                </div>

            </div>
            <div class="col-12 mb-30">
                <button id="addNew" class="btn btn-success" type="button">Add New Variation Field</button>
            </div>
        </div>
    </div>
    <!-- Add New Category End -->

</div>

</form>

</div>
<!-- Content Body End -->

<!-- Live Scripts Only For This Page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('#addNew'); //Add button selector
    var wrapper = $('#vboxMain'); //Input field wrapper
    var fieldHTML = "<div class='variation_box col-12 row vbox'><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-en[]' placeholder='Variation Name (English)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-en[]' placeholder='Variation Values (English)*' required></div><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-it[]' placeholder='Variation Name (Italian)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-it[]' placeholder='Variation Values (Italian)*' required></div><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-fr[]' placeholder='Variation Name (French)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-fr[]' placeholder='Variation Values (French)*' required></div><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-es[]' placeholder='Variation Name (Spanish)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-es[]' placeholder='Variation Values (Spanish)*' required></div><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-de[]' placeholder='Variation Name (German)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-de[]' placeholder='Variation Values (German)*' required></div><div class='col-lg-12 col-md-12 col-12 mb-30'><a href='javascript:removeIt();' class='btn btn-danger pull-right delBtn'>Remove</a></div></div>"; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
            // Value Increment
            $('#countFields').val( function(i, oldval) {
                return ++oldval;
            });
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.delBtn', function(e){
        e.preventDefault();
        $(this).closest('.vbox').remove(); //Remove field html
        x--; //Decrement field counter
        // Value Decrement
        $('#countFields').val( function(i, oldval) {
            return --oldval;
        });
    });
});
</script>

<?php
// Footer
attachViews("admin/components/bottom");
?>