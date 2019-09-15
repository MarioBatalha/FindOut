<?php
include("ClassConexao.php");
Class ClassCrud extends ClassConexao{
    private $crud;
    private $contador;

    #Métodos e preparação das query
    public function  preparedstatements($query, $parametros){

        $this->countparametros($parametros);
        $this->crud=$this->connectDB()->prepare($query);

        if($this->contador > 0){
            for($i=1; $i<=$this->contador; $i++ ){
                $this->crud->bindValue($i, $parametros[$i-1]);
            } 
        }
      $this->crud->execute();  
    }
     #Contador de parametros
    public function countparametros($parametros){
        $this->contador=count($parametros);
    }

    #Inserir informações na BD
    public function insertDB($tabela, $condicao, $parametros){
        $this->preparedstatements("INSERT INTO {$tabela} VALUES ({$condicao})", $parametros);
        return $this->crud; 
    } 
    #Seleção de  informações na BD
    public function selectDB($campos, $tabela, $condicao, $parametros){
        $this->preparedstatements("SELECT {$campos} FROM {$tabela} {$condicao}", $parametros);
        return $this->crud; 
        } 
    #Apagar de  informações na BD
    public function deleteDB($tabela, $condicao, $parametros){
        $this->preparedstatements("DELETE FROM {$tabela} WHERE {$condicao}", $parametros);
        return $this->crud; 
        }
    #update de  informações na BD
    public function updateDB($tabela, $set, $condicao, $parametros){
        $this->preparedstatements("UPDATE {$tabela} SET {$set} WHERE {$condicao}", $parametros);
        return $this->crud; 
        } 
}                                
?>