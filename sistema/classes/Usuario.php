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
    private $login;
    private $senha;
    
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

    public function getLogin() {
        return $this->login;
    }
    
    public function getSenha() {
        return $this->senha;
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

     public function setLogin($login) {
        $this->login = $login;
    }
    
     public function setSenha($senha) {
        $this->senha = $senha;
    }

}
