<?php

class PaginasController {

    function __construct() {
        
    }

    function index() {

        $visao = new View("paginas-index");
        $visao->exibir();
    }

    function proibido() {
        $visao = new View("acesso-negado");
        $visao->exibir();
    }

}
