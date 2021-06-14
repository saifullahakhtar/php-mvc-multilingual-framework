<?php

// Base Controller
class baseController {
    
    // Variables
    public $errors     = [];
    public $bulkImages = [];

    // View Function
    public function view($viewName, $langViewName = "", $data = [], $extraData = [])
    {
        if(file_exists("../app/languages/" . LANGUAGE . "/" . $langViewName . ".php")):
            require_once("../app/languages/" . LANGUAGE . "/" . $langViewName . ".php");
        endif;

        if(file_exists("../app/views/".$viewName.".php")):
            require_once("../app/views/".$viewName.".php");
        else:
            require_once("../app/views/errorPages/pageNotFound.php");
            exit;
        endif;
    }

    // Model Function
    public function model($modelName)
    {
        $modelRename = str_replace("-","_",$modelName);
        if(file_exists("../app/models/".$modelName.".php")):
            require_once("../app/models/".$modelName.".php");
            return(new $modelName);
        else:
            require_once("../app/views/errorPages/functionNotFound.php");
            exit;
        endif;
    }
    
    // Input Function
    public function input($inputName, $type = "")
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"):
            if($type == "text"):
                return($_POST[$inputName]);
            else:
                return(trim(strip_tags($_POST[$inputName])));
            endif;
        elseif($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get"):
            if($type == "text"):
                return($_GET[$inputName]);
            else:
                return(trim(strip_tags($_GET[$inputName])));
            endif;
        endif;
    }
    
    // Required Input Validation Function
    public function validate($inputName, $label="", $rules="")
    {
        // Split rule string on pipe sign
        $allRules = explode("|", $rules);
        $inputField = $this->input($inputName);
        
        // Check required rule in the array
        if(in_array("required", $allRules)):
            if(empty($inputField)):
                return($this->errors[$inputName] = $label . " is required");
            else:
                return($this->input($inputName));
            endif;
        else:
            return($this->input($inputName));
        endif;
    }
    
    // Form Submission Function
    public function formSubmission(){
        if(empty($this->errors)):
            return(TRUE);
        else:
            return(FALSE);
        endif;
    }

    // Recover Form Data (It works only in POST methods)
    public function recoverText($inputName)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"):
            return($_POST[$inputName]);
        else:
            return("");
        endif;
    }
    
    // Show Errors
    public function formErrors($inputName)
    {
        if(!empty($this->errors[$inputName])):
            echo $this->errors[$inputName];
        endif;
    }

    // Helper Function
    public function helper($helperName)
    {
        if(file_exists("../system/helpers/".$helperName.".php")):
            require_once("../system/helpers/".$helperName.".php");
        else:
            require_once("../app/views/errorPages/helperNotFound.php");
            exit;
        endif;
    }
    
    // Set Session Function
    public function setSession($sessionName, $sessionValue)
    {
        if(!empty($sessionName) && !empty($sessionValue)):
            $_SESSION[$sessionName] = $sessionValue;
        endif;
    }
    
    // Get Session Function
    public function getSession($sessionName)
    {
        if(isset($_SESSION[$sessionName])):
            return($_SESSION[$sessionName]);
        else:
            return(FALSE);
        endif;
    }
    
    // Unset Session
    public function unsetSession($sessionName)
    {
        if(!empty($sessionName)):
            unsset($_SESSION[$sessionName]);
        endif;
    }
    
    // Destroy All Sessions
    public function destroySessions()
    {
        session_destroy();
    }
    
    // Set Flash Message
    public function setFlash($sessionName, $msg)
    {
        if(!empty($sessionName) && !empty($msg)):
            $_SESSION[$sessionName] = $msg;
            return(TRUE);
        endif;
    }
    
    // Get Flash Message
    public function flash($sessionName, $className)
    {
        if(!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName])):
            $msg = $_SESSION[$sessionName];
            echo("<div class='$className'>" . $msg . "<button class='close' data-dismiss='alert'><i class='fa fa-close'></i></button></div>");
            unset($_SESSION[$sessionName]);
        endif;
    }

}

?>