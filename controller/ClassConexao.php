<?php
// classe de conexão com banco de dados
class ClassConexao{
    public function connectDB(){
        try{
            $con=new PDO("mysql:host=localhost;dbname=crud","root","");
            return $con;
        }catch (PDOExpection $erro){
            return $erro-> getMessage();
        }
    }
}
?>
