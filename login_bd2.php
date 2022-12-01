<?php
include('conexao.php');

if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['senha'])) {

   

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_code= "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'";
        $sql_query= $connect ->query($sql_code) or die("Falha na execução do código SQL:" . $connect ->error);

       

        if(mysqli_num_rows($sql_query) > 0) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] =$usuario['id'];
            $_SESSION['nome'] =$usuario['nome'];

        header("Location: calculadora.php");

        } 
        else {            
              
            echo "<script>alert('Email ou Senha incorretos!');location.href=\"login.php\";</script>";   
        }

   

}
?>