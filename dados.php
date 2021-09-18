<?php

//entrada de dados
$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = $peso / $altura**2;
$classificacao = '';

//processamento dos dados
if(isset($_POST['nome']) && isset($_POST['peso']) && isset($_POST['altura'])){
     
    if($imc < 18){
        $classificacao = "abaixo do peso";
    }elseif($imc < 25){
        $classificacao = "com o peso ideal. Parabens!";
    }elseif($imc < 30){
        $classificacao = "levemente acima do peso";
    }elseif($imc < 35){
        $classificacao = "com obesidade grau I";
    }elseif($imc < 40){
        $classificacao = "com obesidade grau II";
    }else {
        $classificacao = "com obesidade grau III";
    }

}else{
    header("location: .");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="res">
            <?php
             //saida dos dados
             echo "Ola ".$nome."<br>"."Seu peso e: ".$peso."<br>"."Sua altura e: ".$altura."<br>"."Classificacao e: ".$classificacao; 
            ?>
        </div>
        <div>
            <form action=index.php>
            <button type="submit">Voltar</button>
            </form>
        </div>
</body>
</html>