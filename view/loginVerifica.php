<?php
    session_start();
    include("../controller/ClassCrud.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $message = "";
    $crud = new ClassCrud(); 
    
    if(isset($_POST['login'])){
        if(empty($_POST['usuario']) || empty($_POST['senha']){
            $message = "<label> Campos vázios</label>";
        }else{
            $BFetch=$crud->selectDB("*","login","WHERE usuario = :usuario AND senha = :senha", array()); 
            $crud ->loginDB(
                array(
                    'usuario' => $_POST['usuario'],
                    'senha' => $_POST['senha'];
                )
            );
            $count = $crud->rowcount();
            if($count > 0){
                $_SESSION['usuario'] = $_POST['usuario'];
                header("location:admin.php");
            }else{
                $message = "<label>Usuário ou senha errada!</label>"
            }    
        }
    }
?>