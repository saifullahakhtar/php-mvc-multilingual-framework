<?php
attachViews("admin/components/top");
attachViews("admin/components/header");
attachViews("admin/components/sidebar");
?>

<!-- Content Body Start -->
<div class="content-body">

<!-- Variations Update Alert Start -->
<?php
if(isset($_GET['update'])):
    $this->flash("variationsUpdated","alert alert-success mt-5");
    $this->flash("variationsUpdatingError","alert alert-danger mt-5");
endif;
?>
<!-- Variations Update Alert End -->

<form action="" method="POST">

<!-- Count Inputs -->
<input type="hidden" id="countFields" value="" name="count-fields">

<!-- Removed Variations -->
<input type="hidden" id="removedVariations" value="" name="removed-variations">

<!-- Variation Product ID For Delete Variation -->
<input type="hidden" value="<?php echo($data[0]->product_unique_id); ?>" name="variation-delete-id">

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
            <button class="button button-outline button-primary submit-add-btn" name="update-variations">Update Variations</button>
            <button class="button button-outline button-danger" name="delete-variations">Delete Variations</button>
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
                <input type="text" class="form-control" name="collection-name" value="<?php echo($data[0]->variation_collection_name); ?>" placeholder="Attribute Collection Name">
            </div>
            <div class="col-lg-6 col-md-6 col-12 mb-30">
                <select class="form-control select2" name="product-unique-id">
                    <?php
                    foreach($extraData as $list):
                        $productID   = $list->product_unique_id;
                        $productName = $list->title_en;
                        if($productID == $data[0]->product_unique_id):
                            $selected = "selected";
                        else:
                            $selected = "";
                        endif;
                        echo("<option value='$productID' $selected>$productName</option>");
                    endforeach;
                    ?>
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-12 ml-2 mb-10">
                <h5 class="title">Variation Fields</h5>
                <p class="form-help-text mt-0 mb-0"><span class="text-warning">Note:</span> For multple aariation values, Please use pipe sign (|) between values. <br> <span class="text-warning">For Example:</span> value1|value2|value3</p>
            </div>
            <div id="vboxMain" class="col-12">

                <?php
                $numCount = 0;
                foreach($data as $variationsData):
                    $varUnique  = $variationsData->variation_unique_id;
                    $varNameEn  = $variationsData->var_name_en;
                    $varNameEs  = $variationsData->var_name_es;
                    $varNameFr  = $variationsData->var_name_fr;
                    $varNameIt  = $variationsData->var_name_it;
                    $varNameDe  = $variationsData->var_name_de;
                    $varValueEn = $variationsData->var_value_en;
                    $varValueEs = $variationsData->var_value_es;
                    $varValueFr = $variationsData->var_value_fr;
                    $varValueIt = $variationsData->var_value_it;
                    $varValueDe = $variationsData->var_value_de;
                ?>

                <div class="col-lg-6 col-md-6 col-12 ml-2 mb-10 <?php echo($varUnique); ?>">
                    <h5 class="title">Variation <?php echo($numCount + 1); ?></h5>
                </div>

                <div class="variation_box col-12 row <?php echo($varUnique); ?>">
                    <div class="col-lg-3 col-md-3 col-12 mb-30">
                        <input type="text" class="form-control" name="var-name-en-update[]" value="<?php echo($varNameEn); ?>" placeholder="Variation Name (English)*" required>
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 mb-30">
                        <input type="text" class="form-control" name="var-value-en-update[]" value="<?php echo($varValueEn); ?>" placeholder="Variation Values (English)*" required>
                    </div>
                    <div class='col-lg-3 col-md-3 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-name-it-update[]" value="<?php echo($varNameIt); ?>" placeholder='Variation Name (Italian)*' required>
                    </div>
                    <div class='col-lg-9 col-md-9 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-value-it-update[]" value="<?php echo($varValueIt); ?>" placeholder='Variation Values (Italian)*' required>
                    </div>
                    <div class='col-lg-3 col-md-3 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-name-fr-update[]" value="<?php echo($varNameFr); ?>" placeholder='Variation Name (French)*' required>
                    </div>
                    <div class='col-lg-9 col-md-9 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-value-fr-update[]" value="<?php echo($varValueFr); ?>" placeholder='Variation Values (French)*' required>
                    </div>
                    <div class='col-lg-3 col-md-3 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-name-es-update[]" value="<?php echo($varNameEs); ?>" placeholder='Variation Name (Spanish)*' required>
                    </div>
                    <div class='col-lg-9 col-md-9 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-value-es-update[]" value="<?php echo($varValueEs); ?>" placeholder='Variation Values (Spanish)*' required>
                    </div>
                    <div class='col-lg-3 col-md-3 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-name-de-update[]" value="<?php echo($varNameDe); ?>" placeholder='Variation Name (German)*' required>
                    </div>
                    <div class='col-lg-9 col-md-9 col-12 mb-30'>
                        <input type='text' class='form-control' name="var-value-de-update[]" value="<?php echo($varValueDe); ?>" placeholder='Variation Values (German)*' required>
                    </div>
                    <div class='col-lg-12 col-md-12 col-12 mb-30'>
                        <button type="button" onclick="removeOld(<?php echo($varUnique); ?>)" class="btn btn-danger pull-right">Remove</button>
                    </div>
                </div>

                <!-- Count Inputs -->
                <input type="hidden" value="<?php echo($varUnique); ?>" name="variation-unique-id[]">
                <input type="hidden" value="<?php echo($varUnique); ?>" name="count-fields-update[]">

                <?php
                $numCount++;
                endforeach;
                ?>
                
                <div class="col-lg-6 col-md-6 col-12 ml-2 mb-10">
                    <h5 class="title">Add More</h5>
                </div>

                <div class="col-12 mb-30">
                    <button id="addNew" class="btn btn-success" type="button">Add New Variation Field</button>
                </div>

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

// Remove Old Variation
const removeOld = (idCode) => {
    $('.'+idCode).remove();
    let OldRemoved = $('#removedVariations').val();
    if(OldRemoved.length === 0){
        $('#removedVariations').val(idCode);
    }else{
        $('#removedVariations').val(OldRemoved + "|" + idCode);
    }
}

$(document).ready(function(){

    let maxField = 10; //Input fields increment limitation
    let addButton = $('#addNew'); //Add button selector
    let wrapper = $('#vboxMain'); //Input field wrapper

    let fieldHTML = "<div class='variation_box col-12 row vbox'><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-en[]' placeholder='Variation Name (English)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-en[]' placeholder='Variation Values (English)*' required></div><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-it[]' placeholder='Variation Name (Italian)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-it[]' placeholder='Variation Values (Italian)*' required></div><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-fr[]' placeholder='Variation Name (French)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-fr[]' placeholder='Variation Values (French)*' required></div><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-es[]' placeholder='Variation Name (Spanish)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-es[]' placeholder='Variation Values (Spanish)*' required></div><div class='col-lg-3 col-md-3 col-12 mb-30'><input type='text' class='form-control' name='var-name-de[]' placeholder='Variation Name (German)*' required></div><div class='col-lg-9 col-md-9 col-12 mb-30'><input type='text' class='form-control' name='var-value-de[]' placeholder='Variation Values (German)*' required></div><div class='col-lg-12 col-md-12 col-12 mb-30'><a href='javascript:removeIt();' class='btn btn-danger pull-right delBtn'>Remove</a></div></div>"; //New input field html

    let x = 1; //Initial field counter is 1
    
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