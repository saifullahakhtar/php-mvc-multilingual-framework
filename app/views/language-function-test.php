<form method="post">
    <select name='languageSet' onchange='this.form.submit()'>
         <option value='en' <?php if(LANGUAGE == "en"): echo("selected"); endif; ?>>EN</option>
         <option value='it' <?php if(LANGUAGE == "it"): echo("selected"); endif; ?>>IT</option>
    </select>
</form>

<?php
if(isset($_POST['languageSet'])):
    $newLang = $_POST['languageSet'];
    $this->setSession("lang", $newLang);
    $lang = $this->getSession("lang");
    $url = $_GET['url'];
    $explodeURL = explode("/", $url);
    $explodeURL[0] = $lang;
    $redirectURL = implode("/", $explodeURL);
    header("location: /$redirectURL");
endif;
?>