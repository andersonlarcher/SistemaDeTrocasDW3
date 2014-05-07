<?php
class Oferta{
  private $cod;
  private $usuario;
  private $item;
  private $descricao;
  
  public function getUsuario() {
      return $this->usuario;
  }

  public function getItem() {
      return $this->item;
  }

  public function getDescricao() {
      return $this->descricao;
  }

  public function setUsuario($usuario) {
      $this->usuario = $usuario;
  }

  public function setItem($item) {
      $this->item = $item;
  }

  public function setDescricao($descricao) {
      $this->descricao = $descricao;
  }


}
