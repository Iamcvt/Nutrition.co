<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Linkando o Style - Fonte  -->
    <link rel="stylesheet" href="style/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Linkando a favicon do site  -->
    <link rel="shortcut icon" href="img/favicon.png">   
         
    <!-- Titulo da página -->
    <title>Nutrition.co - Login</title>
</head>
<body>

    <!-- Inicializando o main-->
    <main>
        <h1>Login</h1>
        <p class="pgf">Bem vindo Administrador! Faça login ou <a class="cdt" href="cadastro_adm.php">Cadastre-se</a></p>
        <form action="login_bd_adm.php" method="POST">
            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>
            <label for="senha">
                <span>Senha</span>
                <input type="password" id="password" name="senha">
            </label><br>
            <input type="submit" name="submit" value="Entrar" id="button">
        </form>
    </main>

    <!-- Seção das imagens da página -->
    <section class="images">
        <img src="img/mobile.svg" alt="Mobile">
        <div class="circle"></div>
    </section>
</body>
</html>