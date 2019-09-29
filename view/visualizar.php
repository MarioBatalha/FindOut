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
?>
    <h1>Perfil</h1>
    <i class="fa fa-user-circle"></i><strong>Nome: </strong><?php echo $Fetch['Nome']; ?><br>
    <i class="fas fa-arrow-down"></i><strong>Area: </strong><?php echo $Fetch['area']; ?><br>
    <i class="fas fa-arrow-dow "></i><strong>Localização: </strong><?php echo $Fetch['local']; ?>
</div>
<div>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 80%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA35f7xRq2H71Nas_8PBs-oG60dLpSX2yA&callback=initMap"
    async defer></script>
</div>
<?php include_once("footer.php");?>
</body>
</html>