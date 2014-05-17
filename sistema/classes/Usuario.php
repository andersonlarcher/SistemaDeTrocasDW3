<?php

/**
 * Description of Usuario
 *
 * @author Anderson
 */
class Usuario {
    private $cod;
    private $nome;
    private $email;
    private $tel;
    
    public function getCod() {
        return $this->cod;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTel() {
        return $this->tel;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTel($tel) {
        $this->tel = $tel;
    }


}
