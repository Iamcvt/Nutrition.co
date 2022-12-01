<?php
include("conexao.php");
include("proteção_ADM.php");

$consulta = "SELECT * FROM feedback";
$con = $connect->query($consulta) or die ($connect->error);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linkando o Style - Fonte  -->
    <link rel="stylesheet" href="style/css/feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Feedbacks</title>
</head>
<body>

   <!-- Iniciando o Nav -->
   <div class="roxo">
        <div class="container">
            <nav> 
                <div class="logo">
                    <a href="index.php">Nutrition.co</a>
                </div>
                <ul>
                <a class="btns" href="logout.php"> Sair</a>
                </ul>
            </nav>
        </div>  
    </div> 

    <h1 class="heading">  Tabela de Feedback</h1>

    <div class="txt-tb">
            <p>
            Tabela com exibição dos feedbacks dos usuários
            </p> 
        </div>
    </div>  

    <div class="tabela">
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Feedback</th>
            </tr>
            <?php while($dado = $con->fetch_array()){?>
            <tr>
                <td><?php echo $dado['id']; ?></td>
                <td><?php echo $dado['nome']; ?></td>
                <td><?php echo $dado['email']; ?></td>
                <td><?php echo $dado['celular']; ?></td>
                <td><?php echo $dado['feedback']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div><br><br><br><br><br><br><br><br>

    <!-- Inicializando footer-->
    <footer>
        <div class="container-footer">
            <h3>Nutrition.co</h3>
            <p>Nutrition.co é um site desenvolvido para ajudar pessoas a manter uma vida saudável, através da alimentação correta!</p>
        </div>
        <br>
        <div class="fim-footer">
            <p> Nutrition.co &copy;2022</p>
        </div>
    </footer>
    <!-- Finalizando footer -->
</body>
</html>