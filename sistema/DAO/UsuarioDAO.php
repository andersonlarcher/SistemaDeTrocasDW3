<?php
require_once './sistema/Conexao.php';

class UsuarioDAO {
    
    function __construct() {
         $this->db = Conexao::conecta();
         $this->insereUsu = $this->db->prepare("insert into usuario (nome, email,telefone, login, senha) values ");
}
   
}
