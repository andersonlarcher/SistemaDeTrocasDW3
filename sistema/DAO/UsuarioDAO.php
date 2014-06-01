<?php
require_once './sistema/Conexao.php';

class UsuarioDAO {
    
    function __construct() {
         $this->db = Conexao::conecta();
         $this->insereUsu = $this->db->prepare("insert into usuario (nome, email,telefone, login, senha) values (?,?,?,?,?)");      
    }
    
    public function insereUser($usuario){
        $this->insereUsu->bindValue(1,$usuario->getNome());   
        $this->insereUsu->bindValue(2,$usuario->getEmail());   
        $this->insereUsu->bindValue(3,$usuario->getTel());   
        $this->insereUsu->bindValue(4,$usuario->getLogin());   
        $this->insereUsu->bindValue(5,$usuario->getSenha());   
        if($this->insereUsu->execute()){
            echo "<script>
                alert('Cadastro realizado com sucesso');
                location.href='cadastra.html';
            </script>";
        }else{
            echo "<script>
                alert('Ocorreu um erro durante a gravação');
                location.href='cadastra.html';
            </script>";
        }
    }
    
    public function loga($usuario){
        $this->db = Conexao::conecta();
        $this->verifica = $this->db->prepare("select login from usuario where login = ? and senha = ?");
        $this->verifica->bindValue(1,$usuario->getLogin());
        $this->verifica->bindValue(2,$usuario->getSenha());
        $this->verifica->execute();
        
        if($this->verifica->rowCount() == 1){
            session_start();
            $_SESSION['login'] = $usuario->getLogin();
            $_SESSION['senha'] = $usuario->getSenha();
        }else{
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            echo "<script>location.href='logar.html'</script>";
        }
    }
}   

