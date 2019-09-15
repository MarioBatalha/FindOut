<?Php
//input ação
if(isset($_POST['acao'])){
    $acao = filter_input(INPUT_POST,'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['acao'])){
    $acao = filter_input(INPUT_GET,'acao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $acao="";
} 
//input nome
if(isset($_POST['id'])){
    $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
    $id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id="";
} 
//input nome
if(isset($_POST['Nome'])){
    $Nome = filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Nome'])){
    $Nome = filter_input(INPUT_GET,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Nome="";
} 
//inpuut area
if(isset($_POST['area'])){
    $area = filter_input(INPUT_POST,'area', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['area'])){
    $area = filter_input(INPUT_GET,'area', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $area="";
} 
//input titular 
if(isset($_POST['tutela'])){
    $tutela = filter_input(INPUT_POST,'tutela', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['tutela'])){
    $tutela = filter_input(INPUT_GET,'tutela', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $tutela="";
}
//input local 
if(isset($_POST['local'])){
    $local = filter_input(INPUT_POST,'local', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['local'])){
    $local = filter_input(INPUT_GET,'local', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $local="";
} 
//input descrição
if(isset($_POST['descricao'])){
    $descricao = filter_input(INPUT_POST,'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_['descricao'])){
    $descricao = filter_input(INPUT_GET,'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $descricao="";
} 
//input Rotas
if(isset($_POST['rotas'])){
    $rotas = filter_input(INPUT_POST,'rotas', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_['rotas'])){
    $rotas = filter_input(INPUT_GET,'rotas', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $rotas="";
} 
?>