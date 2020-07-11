<?php
include("ClassConexao.php");
Class ClassCrud extends ClassConexao{
    private $FindOut;
    private $contador;

    #Métodos e preparação das query
    public function  preparedstatements($query, $parametros){

        $this->countparametros($parametros);
        $this->FindOut=$this->connectDB()->prepare($query);

        if($this->contador > 0){
            for($i=1; $i<=$this->contador; $i++ ){
                $this->FindOut->bindValue($i, $parametros[$i-1]);
            } 
        }
      $this->FindOut->execute();  
    }
     #Contador de parametros
    public function countparametros($parametros){
        $this->contador=count($parametros);
    }

    #Inserir informações na BD
    public function insertDB($tabela, $condicao, $parametros){
        $this->preparedstatements("INSERT INTO {$tabela} VALUES ({$condicao})", $parametros);
        return $this->FindOut; 
    } 
    #Seleção de  informações na BD
    public function selectDB($campos, $tabela, $condicao, $parametros){
        $this->preparedstatements("SELECT {$campos} FROM {$tabela} {$condicao}", $parametros);
        return $this->FindOut; 
        } 
    #Apagar de  informações na BD
    public function deleteDB($tabela, $condicao, $parametros){
        $this->preparedstatements("DELETE FROM {$tabela} WHERE {$condicao}", $parametros);
        return $this->FindOut; 
        }
    #update de  informações na BD
    public function updateDB($tabela, $set, $condicao, $parametros){
        $this->preparedstatements("UPDATE {$tabela} SET {$set} WHERE {$condicao}", $parametros);
        return $this->crud; 
        } 
    #search na BD
    Public function searchDB($campos, $tabela, $condicao, $parametros){
        $this->preparedstatements("SELECT FROM {$tabela} {$condicao}", $parametros);
        return $this->FindOut;
    }    
    #Login
    Public function loginDB($campos, $tabela, $condicao, $parametros){
        $this->preparedstatements("SELECT FROM {$tabela} {$condicao}", $parametros);
        return $this->FindOut;
    } 
  }                                
?>