<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Funções em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Prática com funções de usuário e includes - resultado da média calculada </h1>

 <?php
  //inserindo o comando para invocar e utilizar as duas funções que estão em um arquivo externo
  $nomeDaInclude = "exercicio5.txt";
  include $nomeDaInclude;

  //área do script principal
  //recebendo as duas notas do aluno
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];

  //invocando a função que calcula a média
  $media = calcularMedia($nota1, $nota2);

  //invocando a segunda função, que mostra a média e a mensagem dizendo se o aluno está aprovado ou reprovado
  testarAprovado($media);    
  ?>    
</body> 
</html> 