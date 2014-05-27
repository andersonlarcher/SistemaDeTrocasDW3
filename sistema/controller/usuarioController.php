<?php

include 'sistema/classes/Usuario.php';

class usuarioController {

    public function cadastra() {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $usuario = new Usuario();
            $usuario->setNome($_POST['nome']);
            $usuario->setEmail($_POST['email']);
            $usuario->setTel($_POST['telefone']);
            $usuario->setLogin($_POST['login']);
            $usuario->setSenha($_POST['senha']);
            var_dump($usuario->getEmail());
            header('Location: index.html');
        } else {
            $visao = new View("cadastra-usuario");
            $visao->exibir();
        }
    }

    public function index() {
      $visao = new View("cadastra-usuario");
      $visao->exibir();
    }

}
