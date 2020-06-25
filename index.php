<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="font/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/css/style.css">
    <link rel="stylesheet" href="font/font awesome/all.css">
    <link rel="stylesheet" href="font/js/bootstrap.min.js">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
    <title>FindOut</title>
</head>
<body >
<?php
  include "view/header.php";
?>
  <div class="top-body">
    <div>
      <img src="font/img/background.png" alt="">
    </div>
    <div>
        <h2>FindOut</h2>
        <h3>A sua agenda pública virtual </h3>
    </div>
   </div>

<main>
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
          <th scope="row"><?php echo $Fetch['img'];?></th>
          <th scope="row"><?php echo $Fetch['Nome'];?></th>
          <td><?php echo $Fetch['area'];?></td>
          <td><?php echo $Fetch['tutela'];?></td>
          <td><?php echo $Fetch['local'];?></td>
          <td><?php echo $Fetch['descricao'];?></td>
          <th scope="row">
            <a href="<?php echo "view/visualizar.php?id={$Fetch['id']}"; ?>"><i class="fas fa-american-sign-language-interpreting"></i></a>
          </th>
        </tr>
      </tbody>
    <?php } ?>
  </table>
</main>
</div>  
     <?php 
      include "view/footer.php";   
    ?>
</body>
</html>