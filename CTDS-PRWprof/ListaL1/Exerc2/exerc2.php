<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Resultado do processamento dos dados da viagem </h1>

 <?php
  //recebendo os dados a serem entregues pelo navegador e que foram fornecidos no formulário

  $distancia = $_POST['distancia'];
  $consumo   = $_POST['consumo'];

  /*Armazenar o preço do litro de combustível em uma constante do PHP*/
  define("PRECO_LITRO", $_POST["preco-combustivel"]);

  //calculando a quantidade de litros de combustível gasto para a execução da viagem
  $quantosLitrosGastos = $distancia / $consumo;

  //calculando o gasto, em dinheiro, com a viagem
  $gastoEmReais = $quantosLitrosGastos * PRECO_LITRO;
  
  echo "<p> Resultado do proocessamento dos dados da viagem: <br>
        Distância da viagem = <span> $distancia km </span> <br>
        Autonomia do carro = <span> $consumo litros </span> <br>
        Quantidade de litros de combustível gasta = <span> $quantosLitrosGastos litros </span> <br>
        Gasto em reais com a viagem = <span> R$$gastoEmReais </span> <br>
        Preço do litro de combustível = <span> R$ ", PRECO_LITRO, "</span> </p>";
 ?> 
</body> 
</html> 