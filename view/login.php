<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/font awesome/fontawesome.min.css">
    <link rel="stylesheet" href="../font/js/bootstrap.min.js">
    <title>Document</title>
</head>
<body class="bg-primary">
<?php 
include("loginVerifica.php");
include("../includes/variaveis.php");

?>
    <div class="container">
        <div class="card"  style="width: 28rem; margin: 20rem; height: 20rem;">
            <form name="login" id="login" action="admin.php">
            <h3 class="text-center"  style=" margin: 2rem;">Painel do administrador</h3>
             <div class="form-group">
                <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="usuHelp" placeholder="Usuário"  style=" margin: 5rem;margin-top: 2rem; width: 18rem; float: center;">
            </div>
            <div class="form-group">
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password" style=" margin: 5rem;width: 18rem; margin-top: -4rem;">
            </div>
            <button type="submit" name="login" style=" margin: 5rem; margin-top: -4rem;" class="btn btn-primary">Login</button>
            <a href="#" style="margin: -10rem;">Esqueceu a senha?</a>
        </form>
    </div>
</div>
</body>
</html>