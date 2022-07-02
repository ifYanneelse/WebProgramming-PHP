<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Resultado do desempenho da turma </h1>

 <?php
  /*item a) Recebendo os dados do formulário que foram fornecidos pelo usuário*/
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $nota3 = $_POST["nota3"];

  //agora, a partir das três variáveis simples criadas para receber cada nota digitada no formulário, montamos o nosso vetor com índice numérico
  $notas[0] = $nota1;
  $notas[1] = $nota2;
  $notas[2] = $nota3;

  /*$notas[] = $nota1;
  $notas[] = $nota2;
  $notas[] = $nota3;*/

  //outras maneiras de criarmos o mesmo vetor
  $notas = array($nota1, $nota2, $nota3);
  $notas = [$nota1, $nota2, $nota3];
  $notas = [$_POST["nota1"], $_POST["nota2"], $_POST["nota3"]];

  //mostrar os dados do vetor
  echo "<pre>";
  print_r($notas);
  echo "</pre>";

  //item b) usar uma função do PHP para tratamento de vetores a fim de calcularmos a média de notas dos três alunos
  $media =  array_sum($notas)/count($notas);

  $mediaFormatada = number_format($media, 1, ",", ".");
  echo "<p> A média de notas dos alunos cadastrados é igual a <span> $mediaFormatada </span> </p>";

  
  ?>    
</body> 
</html> 