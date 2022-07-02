<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Resultado do desempenho do aluno </h1>

 <?php
  /*Recebendo os dados do formulário que foram fornecidos pelo usuário*/
  $aluno = $_POST["aluno"];
  $nota1 = $_POST["nota1"];
  $peso1 = $_POST["peso1"];
  $nota2 = $_POST["nota2"];
  $peso2 = $_POST['peso2'];

  //Calculando a média ponderada do aluno
  $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);

  echo "<p> Caro(a) aluno(a) $aluno, de acordo com os dados fornecidos, sua média na UC Programação Web é igual a $media </p>";
  ?>    
</body> 
</html> 