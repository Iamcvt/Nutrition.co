<?php
include('conexao.php');
//verificão de variáveis existentes ou não.
if(isset($_POST['submit']) && isset($_POST['email']) && isset($_POST['senha'])) {

   

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql_code= "SELECT * FROM cadastro_adm WHERE email = '$email' and senha = '$senha'";
        //rodar a sql_query. Se não funcionar ele morre "die", e mostra um erro de execução no código.
        $sql_query= $connect ->query($sql_code) or die("Falha na execução do código SQL:" . $connect ->error);

       

        if(mysqli_num_rows($sql_query) > 0) {
            
            //trás tudo para o usuario, direto da query.
            $usuario = $sql_query->fetch_assoc();

            //depois ele verifica se essa seção existe, se não existir ele inicia uma nova seção
            if(!isset($_SESSION)) {
                session_start();
            }

            //e dentro dessa seção eu jogo o meu usuario direto, email,id etc.
            $_SESSION['id'] =$usuario['id'];
            $_SESSION['nome'] =$usuario['nome'];

            //se der certo essa seção, ele vai direto para a página do feedback.
        header("Location: feedback.php");

        } 
        else {            
              //se os dados registrados no login estiverem incorretos ele mostra um erro de senha ou email digitados incorretamente  
            echo "<script>alert('Email ou Senha incorretos!');location.href=\"login_adm.php\";</script>";   
        }

   //obs: o que é uma sessão: tipo de variavel que continua valida mesmo quando a pessoa troca de pagina, isso se ela não deslogar de seu login.
        

}
?>
