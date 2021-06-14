<?php

//  A Href Link
function linkHref($path)
{
    echo "href='/".LANGUAGE."/".$path."'";
}

// Link CSS
function linkCSS($path)
{
    $url = BASEURL . "/" . $path;
    echo("<link rel='stylesheet' href='".$url."'>
    ");
}

// Link JS
function linkJS($path)
{
    $url = BASEURL . "/" . $path;
    echo("<script src='".$url."'></script>
    ");
}

// Link Image
function imagePath($path)
{
    $url = BASEURL . "/" . $path;
    echo($url);
}

// Link Attach Files
function attachViews($path)
{
    include("../app/views/".$path.".php");
}

?>