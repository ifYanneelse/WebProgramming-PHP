<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Prática com matrizes - resultado do desempenho da turma </h1>

 <?php
  /*item a) Recebendo os dados do formulário que foram fornecidos pelo usuário e vamos guardar estes dados em 9 variáveis simples*/
  $media1 = $_POST["media1"];
  $media2 = $_POST["media2"];
  $media3 = $_POST["media3"];

  $nome1 = $_POST["aluno1"];
  $nome2 = $_POST["aluno2"];
  $nome3 = $_POST["aluno3"];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  //vamos criar a matriz, com o índice associativo da matriz sendo a matrícula do aluno
  
  $alunos[$matric1] = [$nome1, $media1];
  $alunos[$matric2] = [$nome2, $media2];
  $alunos[$matric3] = [$nome3, $media3];


  //item b) Percorrer a matriz e descobrir qual a maior média individual cadastrada. Para isso, vamos criar um vetor temporário que irá armazenar apenas a média individual de cada aluno, e terá como índice associativo o número de matrícula do referido aluno
 
  foreach($alunos as $matricula => $vetorInterno)
   {
   $vetorMedias[$matricula] = $vetorInterno[1];
   }

   /*echo "<pre>";
   print_r($vetorMedias);
   echo "</pre>";*/

   //Em seguida, usamos a função max sobre o vetor $vetorMedias, de forma a descobrirmos qual a maior média cadastrada
   $maiorMedia = max($vetorMedias);

   //Agora, usamos a função array_search para fazer com que o PHP busque a maior média descoberta no vetor $vetorMedias e retorne o número de matrícula do aluno com esta maior média
   $matricMaiorMedia = array_search($maiorMedia, $vetorMedias);

   //falta descobrirmos o nome do aluno que tem a mior média em prw cadastrada na matriz
   $nomeAlunoMaiorMedia = $alunos[$matricMaiorMedia][0];


   echo "<p> Dados do aluno com a maior média individual em PRW: <br>
         Nome = <span> $nomeAlunoMaiorMedia </span> <br>
         Matrícula = <span> $matricMaiorMedia </span> <br>
         Média = <span> $maiorMedia </span> </p>";
  ?>    
</body> 
</html> 