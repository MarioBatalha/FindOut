<?php
// classe de conexão com banco de dados
class ClassConexao{
    public function connectDB(){
        try{
            $con = new PDO("mysql:host=localhost;dbname=FindOut","","");
            return $con;
        }catch (PDOExpection $erro){
            return $erro-> getMessage();
        }
    }
}
?>
