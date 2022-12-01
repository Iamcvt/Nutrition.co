<?php
include("conexao.php");

// Recebendo dados digitados da página cadastro_aluno.php (Via POST)
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//Comando sql para gravar na tabela do banco de dados MySql e MariaDB
$comando_sql = "insert into cadastro(nome, email, senha)
values
('$nome', '$email', '$senha');";

//Comando sql para executar a gravação na tabela do banco de dados MySql ou MariaDB
if(mysqli_query($connect, $comando_sql))
{

  echo "<script>alert('Usuário cadastrado com sucesso!');location.href=\"login.php\";</script>";
}
else
{
	echo "<script>alert('Falha ao fazer o seu cadastro, tente novamente!');location.href=\"cadastro.php\";</script>";
}
?>
