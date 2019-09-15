<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="font/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/font awesome/fontawesome.min.css">
    <link rel="stylesheet" href="font/js/bootstrap.min.js">
</head>
    <title>FindOut</title>
</head>
<body >
<?php
  include "view/header.php";
?>
  <div class="jumbotron">
    <h1 class="display-4">Find Out</h1>
    <p class="lead">Find Out é um site opensource de ajuda pública que coloca a disposição de quem precisa, informações
    de vários sectores e serviços da nossa sociedade, poderás procurar qualquer serviço aqui apenas digitando o nome ou a localização 
    ou o tipo de serviço que necessitas e  dispomos para si várias opções.</p>
  </div> 
  <table class="table table-striped w-90">
    <thead class="">
      <tr>
        <th scope="col">Logo</th>
        <th scope="col">Nome</th>
        <th scope="col">Área</th>
        <th scope="col">Tutela</th>
        <th scope="col">Localização</th>
        <th scope="col">Descrição</th>
        <th scope="col">Rotas</th>
      </tr>
    </thead>
<?php 
  include_once("controller/ClassCrud.php"); 
    // Instaciamento da class crud
    $crud = New ClassCrud();
    $BFetch=$crud->selectDB("*","cadastro","", array());
        
    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
    ?>    
    <tbody>
      <tr>
        <th scope="row">img</th>
        <th scope="row"><?php echo $Fetch['Nome'];?></th>
        <td><?php echo $Fetch['area'];?></td>
        <td><?php echo $Fetch['tutela'];?></td>
        <td><?php echo $Fetch['local'];?></td>
        <td><?php echo $Fetch['descricao'];?></td>
        <th scope="row">
          <a href="<?php echo "view/visualizar.php?id={$Fetch['id']}"; ?>">Visualizar</a>
        </th>
      </tr>
    </tbody>
  <?php } ?>
</table>
</div>  
     <?php 
      include "view/footer.php";   
    ?>
</body>
</html>