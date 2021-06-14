<?php

class rout {
    
    protected $language   = 'en';    // Default Language
    protected $controller = "home";  // Default Controller
    protected $method     = "index"; // Default Method
    protected $params     = [];      // Default Parameters

    public function __construct()
    {
        // Set Url
        $url = $this->url();

        /* 
        * GET request should be in the following form : URL/language/controller/method/parameters
        */

        // Check Language
        if($url != NULL && file_exists("../app/languages/" . $url[0])):
            define('LANGUAGE', array_shift($url)); 
        else:
            define('LANGUAGE', $this->language);
        endif;

        // Check Controller Existance
        if(!empty($url)):
            if(file_exists("../app/controllers/" . $url[0] . ".php")):
                $this->controller = $url[0];
                unset($url[0]);
            else:
                require_once("../app/views/errorPages/controllerNotFound.php");
            endif;
        endif;

        // Add & Run Controller
        require_once("../app/controllers/".$this->controller.".php");
        $this->controller = new $this->controller;

        // Check Method Existance
        if(isset($url[1]) && !empty($url[1])):
            if(method_exists($this->controller, $url[1])):
                $this->method = $url[1];
                unset($url[1]);
            else:
                require_once("../app/views/errorPages/methodNotFound.php");
            endif;
        endif;

        // Check Parameters
        if(isset($url)):
            $this->params = $url;
        else:
            $this->params = [];
        endif;

        // Call Conrtoller & Methods
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function url()
    {
        if(isset($_GET['url'])):
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return($url);
        endif;
    }

}

?>