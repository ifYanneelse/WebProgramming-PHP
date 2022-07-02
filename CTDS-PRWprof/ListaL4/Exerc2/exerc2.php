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
  $alunos[$matric1][0] = $nome1;
  $alunos[$matric1][1] = $media1;

  $alunos[$matric2][0] = $nome2;
  $alunos[$matric2][1] = $media2;

  $alunos[$matric3][0] = $nome3;
  $alunos[$matric3][1] = $media3;

  //outra forma de criar a matriz
  $alunos[$matric1] = [$nome1, $media1];
  $alunos[$matric2] = [$nome2, $media2];
  $alunos[$matric3] = [$nome3, $media3];

  //ainda, mais uma outra maneira diferente de criação da mesma matriz
  $alunos = [$matric1 => [$nome1, $media1],
             $matric2 => [$nome2, $media2],
             $matric3 => [$nome3, $media3]];

  
  /*mostrar os dados da matriz
  echo "<pre>";
  print_r($alunos);
  echo "</pre>";*/

  //item b) Percorrer a matriz e calcular a média geral final dos alunos cadastrados. Para tanto, criamos uma variável somatória que irá armazenar a soma das médias individuais
  $soma = 0;
 
  foreach($alunos as $matricula => $vetorInterno)
   {
   $soma = $soma + $vetorInterno[1];
   }
   
   //calculando a média geral da turma
   $mediaTurma = $soma/count($alunos);

  //outra forma de calcular a mesma média e resolver este item b)
  foreach($alunos as $matricula => $vetorInterno)
   {
   //vamos criar um vetor temporário, com indexação automática (índice numérico, começando em zero), armazenando apenas a média individual de cada aluno
   $vetorMedias[] = $vetorInterno[1];
   }

   //calculando a média geral da turma por meio da função array_sum aplicada ao vetor temporário
   $mediaTurma = array_sum($vetorMedias)/count($vetorMedias);

   $mediaTurmaFormatada = number_format($mediaTurma, 1, ",", ".");

   echo "<p> A média final da turma em PRW é igual a <span> $mediaTurmaFormatada </span> </p>";
  ?>    
</body> 
</html> 