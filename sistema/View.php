<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Foo
 *
 * @author curso
 */
class View {
    private $arquivo;
    private $dados;
            
    function __construct($arquivo = null) {
        $this->dados = array();
        if($arquivo !== null){
            $this->setArquivo("./sistema/view/$arquivo.php");
        }else {
            $this->arquivo = $arquivo;
        }
    }

    
    public function getArquivo() {
        return $this->arquivo;
    }

    public function setArquivo($arquivo) {
        if(file_exists($arquivo)){
        $this->arquivo = $arquivo;
        }else{
            throw new Exception("Arquivo inexistente!");
        }
    }

        
     public function exibir(){
         require_once $this->getArquivo();
     }
     
     public function setDado($chave, $valor){
         $this->dados[$chave] = $valor;
     }
     
     public function  getDado($chave){
         if(isset($this->dados[$chave])){
            return $this->dados[$chave];
         }else {
             throw new Exception("Dado não definido");
         }
     }
     
}

?>
