<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linkando o Style - Fonte  -->
    <link rel="stylesheet" href="style/css/cadastro_adm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Linkando a favicon do site  -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Linkando o bootstrap  -->
    <link rel="stylesheet" href="bootstrap-4.1.3/css/bootstra.min.css">
    <script type="text/javascript" src="bootstrap-4.1.3/js/bootstrap.min.j"></script>

    <!-- Titulo da página -->
    <title>Formulário</title>
</head>
<body>
    
    <!-- Seção do formulário de cadastro -->
    <div class="container">
          <!-- Imagem do formulário -->
        <div class="form-image">
            <img src="img/img-section-2.png" alt="">
        </div>
          <!-- Formulário-->
        <div class="form">
            <form method="POST" action="BD_ADM.php">
                <div class="form-header">
                    <div class="title">
                        <h3>Cadastre-se como Administrador</h3>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="firstname" type="text" name="nome" placeholder="Digite seu primeiro nome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>                    
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="confpassword" type="password" name="senha" placeholder="Confirme sua senha" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Confirme Senha</label>
                        <input id="confpassword" type="password" name="confsenha" placeholder="Digite sua senha" required>
                    </div>

                </div>
                <div class="continue-button">
                    <button name="submit" type="submit"><a href="#">Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>