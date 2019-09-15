<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/font awesome/fontawesome.min.css">
    <link rel="stylesheet" href="../font/js/bootstrap.min.js">
    <title>Cadastro</title>
</head>
<title></title>
<body>
<?php include_once("header.php");?>
<div class="jumbotron">
<?php 
include_once("../controller/ClassCrud.php");
include_once("../includes/variaveis.php");
    $crud = new ClassCrud();
    $iduser=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    $BFetch=$crud->selectDB("*", "cadastro","where id=?", array($iduser));
    $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    echo $_GET['id'];
?>
    <h1>Perfil</h1>
    <strong>Nome: </strong><?php echo $Fetch['Nome']; ?><br>
    <strong>Area: </strong><?php echo $Fetch['area']; ?><br>
    <strong>Localização: </strong><?php echo $Fetch['local']; ?>
</div>
<div></div>
<?php include_once("footer.php");?>
</body>
</html>