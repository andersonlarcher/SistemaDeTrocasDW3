<?php
require_once'./sistema/verificaSession.php';
require_once './sistema/Router.php';
$router = new Router();
$router->route();
