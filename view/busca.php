<!DOCTYPE html>
<html lang="pt-pt">
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
<div class="container">
<h2 class="text-center">Resultado da pesquisa</h2> 
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
<tbody>
<?php 
  include_once("../controller/ClassCrud.php"); 
    // Instaciamento da class crud
    $crud = New ClassCrud();
    $BFetch=$crud->selectDB("*","cadastro","where nome=?", array());   
    while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){
    ?>   
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
</body>
</html>