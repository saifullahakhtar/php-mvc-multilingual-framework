<?php

// Generate Slugs
function slugify($string)
{
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
}

// Sessions Check
function checkSession($sessionName)
{
    if(isset($_SESSION[$sessionName])):
        return($_SESSION[$sessionName]);
    endif;
}

// Form Submission URL
function goToUrl($path)
{
    $url = BASEURL . "/" . $path;
    echo($url);
}

// Redirect Url PHP
function redirectUrlPHP($path)
{
    header("location: " . BASEURL . "/" . $path);
}

// Redirect Url Javascript
function redirectUrlJavaScript($path)
{
    echo("<script> window.open('/$path','_self'); </script>");
}

?>