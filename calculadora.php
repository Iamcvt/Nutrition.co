<!DOCTYPE html>
<?php
//incluindo a proteção.
include('proteção.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Linkando o Style - Fonte  -->
    <link rel="stylesheet" href="style/css/calculadora.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Linkando a favicon do site  -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Linkando o bootstrap  -->
    <link rel="stylesheet" href="bootstrap-4.1.3/css/bootstra.min.css">
    <script type="text/javascript" src="bootstrap-4.1.3/js/bootstrap.min.j"></script>

    <!-- Titulo da página -->
    <title>Calculadora de IMC</title>
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
    <!-- Iniciando a seção da calculadora -->
    <section class="calculo">
         <h1 class="heading"> Calculadora IMC</h1>
         <div class="txt-tb">
            <p>
            Preencha os dados abaixos e calcule o seu Índice de massa Corporal
            </p> 
        </div>
        <div class="divaltura">
            <label class="txt-calc" for="altura">Informe sua altura</label>
            <input type="number" id="altura" placeholder="Altura (M)">
        </div>
        <div class="divpeso">
            <label class="txt-calc" for="peso">Informe seu peso</label>
            <input type="number" id="peso" placeholder="Peso (KG)">
        </div>            
        <br><br>
        <button id="open-modal" class="btn">Veja seu resultado</button>
        <div id="modal" class="hide">
            <div class="modal-header">
                <h2>Meu IMC</h2>
                <button class="bt-fechar" id="close-modal">Fechar</button>
            </div>
            <div class="modal-body">
                <img class="img-modal"src="img/modal.png">
                <br><br>    
                <span class="result" id="resultado"></span>
                <br><br>
                <div class="a">
                    <div class="b">
                        <button class="btn-result" onclick="calcIMC()">Ver resultado</button>     
                    </div>
                    <br><br><br>
                </div>
            </div>
        </div>
    </section><br><br><br><br>
        
    <!-- Iniciando seções explicativa -->
    <section class="sec2">
        <h1 class="heading"> Entenda o seu IMC</h1><BR><BR>
        <h1 class="heading1">Abaixo do Peso</h1>
        <div class="txt-tb">
            <p>
            Caracterizada por um IMC abaixo de 16, a magreza grave é uma condição que pode ser causada por desnutrição severa. Consulte um médico, pois esse peso é uma ameaça à saúde.
            </p> 
        </div>
        <br><br><br>
    </section>
    <section>
        <h1 class="heading1"> Peso Normal</h1>      
        <div class="txt-tb">
            <p>
            Essa classificação garante um risco menor para diversas doenças que variam de anemia a infarto. Estar nessa classificação é estar no peso ideal para seu corpo, mas é bom lembrar de verificar a circunferência da cintura em busca de excesso de gordura.
            </p> 

            <p>
            Para mulheres, a cintura deve ter até 80 cm. Para homens, até 94 cm. A cintura deve ser medida logo abaixo das costelas.      
            </p>
        </div>
        <br><br><br><br>
    </section>
    <section class="sec2">
        <h1 class="heading1">Acima do Peso</h1> 

        <div class="txt-tb">
            <p>
            O Sobrepeso pode causar alguns problemas de circulação no corpo, além de fadiga, mas assim como a magreza leve, se o IMC estiver pouco acima de 25, não é preocupante. Uma dieta com um pouco menos de calorias ou um pouco mais de exercícios na rotina pode resolver a situação.
            </p>
            
        </div>
        <br><br><br><br>
    </section>
    <section>
        <h1 class="heading1">Obesidade grau I</h1>      
        
        <div class="txt-tb">
            <p>
            Acima do IMC 30 a pessoa é considerada obesa, o que por si só já é uma doença. Graças ao peso, o risco para diversas condições aumenta consideravelmente. Um médico pode indicar um meio ideal para a regulação do peso.
            </p> 
        </div>
        <br><br><br><br>
    </section>
    <section class="sec2">
        <h1 class="heading1">Obesidade grau II</h1> 

        <div class="txt-tb">
            <p>
            Estar com obesidade grau II é ter riscos elevados de diabetes, hipertensão, além de câncer e infarto. Procure um médico para lidar com a situação.
            </p>
            
        </div>
        <br><br><br><br>
    </section>
    <section>
        <h1 class="heading1">Obesidade grau III</h1>      
        
        <div class="txt-tb">
            <p>
            Chamada de obesidade mórbida, esta condição representa sérios riscos à saúde. Procure ajuda médica.
            </p> 
        </div>
        <br><br><br><br>
    </section>

    <!-- Iniciando o footer -->
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

    <!-- Linkando javascript: função para abrir o modal e função para calcular imc   -->
    <script src="js/modal.js"></script>
    <script src="js/script.js"></script>

</body>

</html>