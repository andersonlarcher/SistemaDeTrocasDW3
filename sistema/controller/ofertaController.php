<?php

class ofertaController {
    
    public function insere(){ 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $oferta = new Oferta();
            $oferta->setUsuario($_POST['usuario']);
            
        }
        
    }
    
    
}
