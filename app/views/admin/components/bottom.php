
</div>
<!-- Main Wrapper Ending -->

<!-- CDNs -->
<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href'); //use currentTarget because the click may be on the nested i tag and not a tag causing the href to be empty
    console.log(urlToRedirect); // verify if this is the right URL
    swal({
    title: "Are you sure to delete?",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })
    .then((willDelete) => {
    // redirect with javascript here as per your logic after showing the alert using the urlToRedirect value
    if(willDelete){
        window.location = urlToRedirect;
    }else{
        swal("Your data is safe!");
    }
    });
}
</script>

<?php
// Global Vendor, plugins & Activation JS
linkJS("admin-assets/js/vendor/modernizr-3.6.0.min.js");
linkJS("admin-assets/js/vendor/jquery-3.3.1.min.js");
linkJS("admin-assets/js/vendor/popper.min.js");
linkJS("admin-assets/js/vendor/bootstrap.min.js");

// Plugins JS
linkJS("admin-assets/js/plugins/perfect-scrollbar.min.js");
linkJS("admin-assets/js/plugins/tippy4.min.js.js");

// Main JS
linkJS("admin-assets/js/main.js");

// Plugins & Activation JS For Only This Page
// Moment
linkJS("admin-assets/js/plugins/moment/moment.min.js");

// Daterange Picker
linkJS("admin-assets/js/plugins/daterangepicker/daterangepicker.js");
linkJS("admin-assets/js/plugins/daterangepicker/daterangepicker.active.js");

// Echarts
linkJS("admin-assets/js/plugins/chartjs/Chart.min.js");
linkJS("admin-assets/js/plugins/chartjs/chartjs.active.js");

// VMap
linkJS("admin-assets/js/plugins/vmap/jquery.vmap.min.js");
linkJS("admin-assets/js/plugins/vmap/maps/jquery.vmap.world.js");
linkJS("admin-assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js");
linkJS("admin-assets/js/plugins/vmap/vmap.active.js");
?>

</body>

</html>