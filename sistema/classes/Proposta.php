<?php

/**
 * Description of Proposta
 *
 * @author Anderson
 */
class Proposta {
    private $usuario;
    private $oferta;
    private $desejo;
    
    
    public function __construct($usuario, $oferta) {
        $this->Usuario = $usuario;
        $this->Oferta = $oferta;
    }
}
