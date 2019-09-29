<?Php
include_once("../includes/variaveis.php");
    include_once("ClassCrud.php");
    //Instanciação da classe
    $crud = New ClassCrud();
    if($acao == 'cadastrar'){
    $crud->insertDB("cadastro","?,?,?,?,?,?,?,?",array($id, $Nome, $area, $tutela, $local, $descricao, $rotas, $img));
    }
    else{
        
    }
?>
  