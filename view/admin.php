<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../font/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font/font awesome/fontawesome.min.css">
    <link rel="stylesheet" href="../font/js/bootstrap.min.js">
    <title>Administrador</title>
</head>
<body>

<?php
include "header.php";
?>
<div class="jumbotron">
 <h2 class=" lead text-center">Bem-Vindo ao painel do administrador</h2>
 <strong>Admin</strong>- Mario Batalha
 <P>Configuração de conta</P>
</div>
    <!DOCTYPE html>

  <table class="table table-striped w-90">
    <thead class="">
      <tr>
        <th scope="col">Logo</th>
        <th scope="col">Nome</th>
        <th scope="col">Área</th>
        <th scope="col">Tutela</th>
        <th scope="col">Localização</th>
        <th scope="col">Descrição</th>
        <th scope="col">Opções</th>
      </tr>
    </thead>
<?php 
  include_once("../controller/ClassCrud.php"); 
  include_once("../includes/variaveis.php"); 


    // Instaciamento da class crud
    $crud = New ClassCrud();
    $BFetch=$crud->selectDB("*","cadastro","", array());
        
    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
    ?>    
    <tbody>
      <tr>
        <th scope="row">img</th>
        <th scope="row"><?php echo $Fetch['Nome']; ?></th>
        <td><?php echo $Fetch['area'];?></td>
        <td><?php echo $Fetch['tutela'];?></td>
        <td><?php echo $Fetch['local'];?></td>
        <td><?php echo $Fetch['descricao'];?></td>
        <th scope="row">
          <a href="<?php echo "cadastro.php?id={$Fetch['id']}"; ?>">Editar</a>
          <a href="<?php echo "deletar.php?id={$Fetch['id']}"; ?>">Apagar</a>
        </th>
      </tr>
    </tbody>
  <?php } ?>
</table>
<button type="button" class="btn btn-outline-primary"><a href="cadastro.php">Cadastrar</a></button>
</div>  
<?php
include "footer.php";
?>
</body>
</html>