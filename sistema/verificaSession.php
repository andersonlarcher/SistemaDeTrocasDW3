<?php

session_start();
 
if(!isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
    //Destrói
    session_destroy();
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    echo "<script>location.href='logar.html'</script>";
}
