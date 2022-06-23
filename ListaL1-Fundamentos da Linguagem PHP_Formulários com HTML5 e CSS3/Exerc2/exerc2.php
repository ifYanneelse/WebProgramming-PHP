<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação web com PHP - Curso CTDS - Segunda fase </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
    <h1> Resultado do processamento dos dados da viagem</h1>

    <?php
    $distancia = $_POST ["distancia"];
    $consumo = $_POST ["consumo"];

    define("PRECO_LITRO", $_POST["preco-combustivel"]);

    $quantosLitrosGastos = $distancia / $consumo;
    $gastosEmReais = $quantosLitrosGastos * PRECO_LITRO;

    echo "<p> Resultado do processamento dos dados da viagem
    <br><br>
            Distância da viagem = <span> $distancia km </span>
            <br>
            Autonomia do carro = <span> $consumo litros </span>
            <br>
            Quantidade de litros de combustível gasta = <span>
            $quantosLitrosGastos litros </span> <br>
            Gasto em reais com a viagem = <span> R$ $gastosEmReais </span>
            <br>
            Preço do litro de combustível = <span> R$ ", PRECO_LITRO , "
            </span>
            </p>"; 

    ?>
    
</body> 
</html> 