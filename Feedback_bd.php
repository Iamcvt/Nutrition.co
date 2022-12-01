<?php
include("conexao2.php");

// Recebendo dados digitados da página cadastro_aluno.php (Via POST)
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$feedback = $_POST['feedback'];


//Comando sql para gravar na tabela do banco de dados MySql e MariaDB
$comando_sql = "insert into feedback(nome, email, celular, feedback)
values
('$nome', '$email', '$celular', '$feedback');";

//Comando sql para executar a gravação na tabela do banco de dados MySql ou MariaDB
if(mysqli_query($connect, $comando_sql))
{
	echo "<script>alert('Feedback enviado com sucesso!');location.href=\"index.php\";</script>";
}
else
{
	echo "<script>alert('Falha ao enviar o seu feedback, tente novamente!');location.href=\"cadastro.php\";</script>";
}
?>
