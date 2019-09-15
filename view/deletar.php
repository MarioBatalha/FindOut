<?php 
include_once("../controller/ClassCrud.php");
include_once("../includes/variaveis.php");
     $crud = new ClassCrud();
     $iduser=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
     $crud->deleteDB("Cadastro", "id=?", array($iduser));

     echo"Dado apagado com sucesso";
?>