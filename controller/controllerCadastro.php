<?Php
include_once("../includes/variaveis.php");
    include_once("ClassCrud.php");
    //Instanciação da classe
    $FindOut = New ClassCrud();
    if($acao == 'cadastrar'){
    $FindOut->insertDB("cadastro","?,?,?,?,?,?,?,?",array($id, $Nome, $area, $tutela, $local, $descricao, $rotas, $img));
    }
    else{
        
    }
    $if(isset($_POST['search'])){
        $iduser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $BFetch=$crud->searchDB("*","cadastro","where id = :id", array($iduser));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
    }
?>
  