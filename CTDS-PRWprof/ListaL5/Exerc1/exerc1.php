<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Funções em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Prática com funções de usuário - resultado da média calcualada </h1>

 <?php
  //área de definição das funções
  function calcularMedia($x1, $x2)
   {
   $media = ($x1 + $x2) / 2;
   return $media;
   }


  function testarAprovado($media)
   {
    if($media >= 6)
     {
      echo "<p> O aluno com média <span> $media </span> está <span> APROVADO! </span> </p>";
     }
    else 
     {
      echo "<p> O aluno com média <span> $media Não foi aprovado! </span> </p>";  
     }
   }

  //========================================================

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