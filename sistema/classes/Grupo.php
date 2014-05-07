<?php

class Grupo {
    private $cod;
    private $titulo;
    private $descricao;
    private $fase;
    
    public function getCod() {
        return $this->cod;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getFase() {
        return $this->fase;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setFase($fase) {
        $this->fase = $fase;
    }


}
