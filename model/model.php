<?php
//essa parte chamara a conexao com o banco de dados
include_once(".\config\conexao.php");
class Model{
    private $conexao;

    function __construct(){
        $this-> conexao = new Database();
    }
}

?>