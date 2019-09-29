<?php
    session_start();
    include("../controller/ClassCrud.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $crud = new ClassCrud();
    $BFetch=$crud->selectDB("*", "cadastro","where usuario ='$usuario' and senha ='$senha'", array($iduser));

    $row = msql_num_row($BFetch);
    if($row > 0){
        $_SESSION['login'] = true;
        "admin.php");
    }
    else{
        echo"<script>alert('Usuario ou senha errado')</script>";
        include("login.php");
    }
?>