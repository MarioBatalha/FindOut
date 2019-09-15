<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/font awesome/fontawesome.min.css">
    <link rel="stylesheet" href="../font/js/bootstrap.min.js">
    <title></title>
</head>
<body>
<?php
    include_once("header.php");
    include_once("../controller/ClassCrud.php");
?>   
<div class="jumbotron">
    <h1 class="text-center">Editar</h1>
</div>
</div>
<div class="container">
    <form method="POST" name="formCadastro" id="formCadastro" action="../controller/controllerCadastro.php">
    <input name="acao" id="acao" type="hidden" value="">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Nome</label>
        <input type="text" name="Nome" class="form-control" id="Nome" placeholder="nome do/a titular ex: Organizações chanas">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Área</label>
        <input type="text" name="area" class="form-control" id="area" placeholder="Ex: saúde">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Tutela</label>
        <input type="text" name="tutela"class="form-control" id="tutela" placeholder="Estado/privado">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Localização</label>
        <input type="text" name="local" class="form-control" id="local" placeholder="Luanda-Patriota">
        </div>
        <div class="form-group col-md-6">
        <label for="inputCity">Descrição</label>
        <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Hospital especializado com 456 valências">
        </div>
        <div class="form-group col-md-6">
        <label for="inputCity">Rotas</label>
        <input type="text" name="rotas" class="form-control" id="rotas" placeholder="Rotas possiveis">
        </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div> 
<div>
</div>
<?php include_once("footer.php"); ?>    
</body>
</html>