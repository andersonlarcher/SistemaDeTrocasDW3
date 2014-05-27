<?php

class Router {

    
    public function __construct() {
        
        require_once './sistema/View.php';
        //require_once './sistema/model/Produto.php';
    }

    public function route() {

        $controlador = "Paginas";
        $acao = "index";
        if (isset($_GET["controlador"])) {
            $controlador = $_GET["controlador"];
        }
        if (isset($_GET["acao"])) {
            $acao = $_GET["acao"];
        }

        $acaoFinal = $this->camelToTrain($acao);
        $controladorController = $controlador . "Controller";

        require_once "./sistema/controller/{$controladorController}.php";

        $controller = new $controladorController();
        $controller->$acaoFinal();
    }

    private function camelToTrain($camel) {
        $words = explode("-", $camel);
        $train = $words[0];
        for ($i = 1; $i < count($words); $i++) {
            $train.=strtoupper($i);
        }
        return $train;
    }

}