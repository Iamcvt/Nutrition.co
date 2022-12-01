<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linkando o Style - Fonte  -->
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Linkando a favicon do site  -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Linkando o bootstrap  -->
    <link rel="stylesheet" href="bootstrap-4.1.3/css/bootstra.min.css">
    <script type="text/javascript" src="bootstrap-4.1.3/js/bootstrap.min.j"></script>

    <!-- Titulo da página -->
    <title>Índice de Massa Corporal</title>
</head>
<body>

    <!-- Nav inicializado -->
    <div class="roxo">
        <div class="container">
            <nav> 
                <div class="logo">
                    <a href="index.php">Nutrition.co</a>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="imc.php">IMC</a></li>
                    <li><a href="card.php">quem somos</a></li>
                    <a class="btn" href="login.php"> Login </a>
                </ul>
                <div class="menu">
                    <img src="img/menu.png">
                </div>
            </nav>
            <!-- Nav Finalizado -->

            <!-- Iniciando o Main da página -->
            <main>
                <div class="text-bx">
                    <h1>Entenda sobre <b>índice de Massa Corporal</b></h1>
                    <p>
                        O IMC é um cálculo simples que permite avaliar se a pessoa está dentro do peso que é considerado ideal para a sua altura. 
                        Também conhecido como Índice de Massa Corporal, o IMC é uma fórmula utilizada por vários profissionais de saúde.
                    </p>
                    <br><br><br>
                    <div class="medias">
                        <a href="https://www.instagram.com/nutrition.ltda/"><i  class="fa fa-instagram"></i></a>
                        <a href="#"><i  class="fa fa-github"></i></a> 
                    </div>
                </div>

                <div class="img-bx">
                    <img src="img/capa.png" alt="">
                </div>
            </main>
        </div>
        <br><br><br>
    </div>
    <!-- Finalizando o Main -->

    <!-- Seção do Veja Sobre-->    
    <section class="features" id="features">

        <h1 class="heading"> Veja Sobre </h1>
    
        <div class="box-container">
    
            <!-- Cards Informativos -->
            <div class="box">
                <img src="img/icon1.png" alt="">
                <h3>O que é IMC?</h3>
                <p>O IMC é um cálculo simples que permite avaliar se a pessoa está dentro do peso que é considerado ideal para a sua altura. 
                    Também conhecido como Índice de Massa Corporal, o IMC é uma fórmula utilizada por vários profissionais de saúde.</p>
                <br><br><br><br>
                <a href="imc.php" class="btn">Leia Mais</a>
            </div>

            <!-- Cards Informativos -->
            <div class="box">
                <img src="img/icon2.png" alt="">
                <h3>Como melhorar seu IMC</h3>
                <p>O IMC é calculado dividindo o peso pela altura elevada ao quadrado. Ou seja, de forma mais simples, você multiplica sua altura por ela mesma e depois divide seu peso pelo resultado da última conta. </p>
                <br><br><br><br><br><br><br>
                <a href="imc.php" class="btn">Leia Mais</a>
            </div>

            <!-- Cards Informativos -->
            <div class="box">
                <img src="img/icon3.png" alt="">
                <h3>Por que é importante manter um peso ideal?</h3>
                <p>Não existe fórmula mágica: combinar dieta e atividade física é a maneira mais eficaz de evitar o sobrepeso e a obesidade. Mas não adianta mudar de uma hora para outra. É importante fazer isso deve ser feito de maneira gradual e com um cardápio saudável e variado.</p>
                <br><br>
                <a href="imc.php" class="btn">Leia Mais</a>
            </div>
        </div>
        <br><br><br><br>
    </section>   
    <!-- Secão cards finalizada -->

    <!-- Seçaõ da calcuadora de IMC-->
    <section class="calculo">
         <h1 class="heading"> Calculadora IMC</h1>
         <div class="txt-c">
            <p>
            Para calcular seu IMC faça login ou cadastre-se 
            </p> 
        </div><br>
        <div class="divaltura">
            <label class="txt-calc" for="altura">Informe sua altura</label>
            <input type="number" id="altura" placeholder="Altura (M)">
        </div>
        <div class="divpeso">
            <label class="txt-calc" for="peso">Informe seu peso</label>
            <input type="number" id="peso" placeholder="Peso (KG)">
        </div>            
        <br><br>
        <a href="login.php" class="btn">Calcule</a>
        </div>
    </section>
    <!-- Seção da calculadora finalizada -->

    <!-- Seçaõ do feedback -->
    <section class="feedback">
        <h1 class="heading">Feedback</h1>
        <div class="feed-center">
            <div class="img-feedback">
                <img class="ft-feed"src="img/img-feedback.png">
            </div>
            <div class="form-feedback">
                <form method="POST" class="to-feedback" action="Feedback_bd.php">
                    <label for="">Nome</label>
                    <input type="text" name="nome" placeholder="Digite seu nome" required>
                    <label for="">E-mail</Em></label>
                    <input type="email" name="email" placeholder="nutrition@etec.sp.gov.br" required>
                    <label for="">Celular</label>
                    <input type="#" name="celular" placeholder="(00) 00000-0000" required>
                    <label for="">Seu Feedback</label>
                    <textarea name="feedback" id="" cols="20" rows="8" placeholder="Deixa seu feedback"></textarea>
                    <button class="btns">Enviar</button>
                </for>
            </div>
        </div>
    </section>
    <!-- Seção do feedback finalizado -->

    <!-- Inicializando footer-->
    <footer>
        <div class="container-footer">
            <h3>Nutrition.co</h3>
            <p>Nutrition.co é um site desenvolvido para ajudar pessoas a manter uma vida saudável, através da alimentação correta!</p>
            <ul class="medias">
                <a href="#"><i class="fa fa-github"></i></a>
            </ul>
        </div>
        <br>
        <div class="fim-footer">
            <p> Nutrition.co &copy;2022</p>
        </div>
    </footer>
    <!-- Finalizando footer -->

    <!-- Linkando o javascript: função para  a responsividade da página -->
    <script src="js/main.js"></script>


</body>
</html>