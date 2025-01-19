<?php
include_once(".\model\model.php");

class Controller{
    private $model;
    function __construct(){
        $this-> model = new Model();
    }
    function pagina_principal(){
        include_once("./view/index.html");
    }
}

?>