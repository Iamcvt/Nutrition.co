<?php
//Verifica se não tem sessão, se nao tiver ele inicia uma nova
if(!isset($_SESSION)) {
    session_start();
}
//depois dessa sessão ela é destruida ao apertar o botão "Sair"
session_destroy();


header("Location: index.php");
?>