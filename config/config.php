<?php

################################################################################
#############   Developed By SaifUllah Akhtar from (itssaif.com)   #############
################################################################################

#################################
#### Database Configurations ####
#################################

define("HOST", "localhost");
define("USER", "root");
define("DATABASE", "oneclod");
define("PASSWORD", "");

#################################
###  Base Url Configration   ####
#################################

define("BASEURL", "");

#################################
######## Environment Type #######
#################################

$environment = "development";

if($environment == "development"):
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
elseif($environment == "live"):
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
endif;

?>