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
<body>
<?php
    include_once("header.php");
    include_once("../controller/ClassCrud.php");
?>  
<?php
    //Edição de dados
    if(isset($_GET['id'])){
        $acao = "editar";
        $crud = new classCrud();
        $BFetch=$crud->selectDB("*","cadastro","where id=?", array($_GET['id']));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $Nome = $Fetch['Nome'];
        $area = $Fetch['area'];
        $tutela = $Fetch['tutela'];
        $local = $Fetch['local'];
        $descricao = $Fetch['descricao'];
        $rotas = $Fetch['rotas'];
    }
    //Cadastro de dados
    else{
        $acao = "cadastrar";
        $Nome = "";
        $area = "";
        $tutela = "";
        $local = "";
        $descricao = "";
        $rotas = "";
    }
?> 
<div class="jumbotron">
    <h1 class="text-center">Cadastro</h1>
</div>
</div>
<div class="container">
    <form method="POST" name="formCadastro" id="formCadastro" action="../controller/controllerCadastro.php">
    <input name="acao" id="acao" type="hidden" value="<?php echo $acao; ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Nome</label>
        <input type="text" name="Nome" class="form-control" id="Nome" placeholder="nome do/a titular ex: Organizações chanas" value="<?php echo $Nome; ?>">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Área</label>
        <input type="text" name="area" class="form-control" id="area" placeholder="Ex: saúde" value="<?php echo $area; ?>">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Tutela</label>
        <input type="text" name="tutela"class="form-control" id="tutela" placeholder="Estado/privado" value="<?php echo $tutela; ?>">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputCity">Localização</label>
        <input type="text" name="local" class="form-control" id="local" placeholder="Luanda-Patriota" value="<?php echo $local; ?>">
        </div>
        <div class="form-group col-md-6">
        <label for="inputCity">Descrição</label>
        <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Hospital especializado com 456 valências" value="<?php echo $descricao; ?>">
        </div>
        <div class="form-group col-md-6">
        <label for="inputCity">Rotas</label>
        <input type="text" name="rotas" class="form-control" id="rotas" placeholder="Rotas possiveis" value="<?php echo $rotas; ?>">
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