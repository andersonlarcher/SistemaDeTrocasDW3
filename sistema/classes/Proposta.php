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
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getOferta() {
        return $this->oferta;
    }

    public function getDesejo() {
        return $this->desejo;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setOferta($oferta) {
        $this->oferta = $oferta;
    }

    public function setDesejo($desejo) {
        $this->desejo = $desejo;
    }


}
