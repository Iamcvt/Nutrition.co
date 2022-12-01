<?php
//se verificar e não tiver sessão ele inicia uma
if(!isset($_SESSION)){

    session_start();

}
//mas se não tiver nenhuma seção de id logada, ele da o erro de que você não esta logado.
if(!isset($_SESSION['id'])) {
 echo "<script>alert('Você não está logado, para acessar a pagina faça o login!');location.href=\"login_adm.php\";</script>" ;
}

?>