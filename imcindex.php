<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="imc.css">
    <title>Melhor calculadora de IMC</title>
</head>
<body>
    <fieldset>
        <legend>Calculadora de IMC</legend>
        <br>
        <form action="imcindex.php" method="POST">
            <label for="altura">Sua altura:</label>
            <input type="text" name="altura" id="altura">
            <br> <br>
            <label for="peso">Seu peso:</label>
            <input type="text" name="peso" id="peso">
            <br> <br>
            <button type="submit" name="evniar">Enviar</button>
            <button type="reset" name="resetar">Limpar</button>
        </form>
        <P>
            <?php
                //variaveis
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                $imc = $peso / $altura **2;
                if ($imc < 18.5) {
                    $clasimc = "Você está muito magro.";
                } else if ($imc >= 18.5 and $imc <= 24.9 ) {
                    $clasimc = "Você está Normal.";
                } else if ($imc >= 25 and  $imc <= 29.9) {
                    $clasimc = "Você tem Sobrepeso.";
                } else if ($imc >= 30 and $imc <= 39.9) {
                    $clasimc = "Você tem Obesidade grau II.";
                } else if ($imc >= 40) {
                    $clasimc = "Você tem Obesidade grau III.";
                }
                //código para deixar poucos digitos
                if(strlen($imc) > 4){
                    $nimc = substr($imc, 0, 4);
                    } else{
                    $nimc= $imc;
                    }
            
                echo "Seu IMC é de $nimc. $clasimc";
            ?>
        </P>
        <p class="centro"><a href="../"><button>Voltar para página inicial</button></a></p>
    </fieldset>
</body>
</html>