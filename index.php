<?php
include_once("controller\controller.php");
if (isset($post["login"])) {
    //redirecionar
}
else {
    $controller = new controller();
    $controller->pagina_principal();
}
?>