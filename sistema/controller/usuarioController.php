<?php
include './sistema/Conexao.php';
include './sistema/classes/Usuario.php';
include './sistema/DAO/UsuarioDAO.php';

class usuarioController {

    public function cadastra() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $usuario = new Usuario();
            $usuario->setNome($_POST['nome']);
            $usuario->setEmail($_POST['email']);
            $usuario->setTel($_POST['telefone']);
            $usuario->setLogin($_POST['login']);
            $usuario->setSenha($_POST['senha']);
            $dao = new UsuarioDAO();
            $dao->insereUser($usuario);
        } else {
            $visao = new View("cadastra-usuario");
            $visao->exibir();
        }
    }
    
    public function logar(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $usuario = new Usuario();
            $usuario->setLogin($_POST['login']);
            $usuario->setSenha($_POST['senha']);
            var_dump($usuario->getLogin());
            var_dump($usuario->getSenha());
            $dao = new UsuarioDAO();
            $dao->loga($usuario);
        }else{
            $visao = new View("login-usuario");
            $visao->exibir();
        }
    }

    public function index() {
      $visao = new View("cadastra-usuario");
      $visao->exibir();
    }

}
