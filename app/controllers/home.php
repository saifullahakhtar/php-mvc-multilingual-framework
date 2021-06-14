<?php

class home extends baseController {

    public function __construct()
    {
        $this->helper("link");
        $this->helper("functions");
    }

    public function index()
    {
        $this->view("index", 'index');        
    }

}

?>