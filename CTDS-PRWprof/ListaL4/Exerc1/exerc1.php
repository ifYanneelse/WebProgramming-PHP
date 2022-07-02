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

  //item b) Percorrer a matriz e mostrar os dados na página web no formato tabular - primeiramente, criamos o cabeçalho da tabela
  echo "<table>
         <caption> Rendimento dos alunos em PRW </caption>
         <tr>
          <th> Matrícula </th>
          <th> Aluno </th>
          <th> Média final em PRW </th>        
         </tr>";

  //em seguida, criamos o corpo da tabela, que irá mostrar os dados de cada aluno. Estes dados vêm do vetor, e são retirados por meio do laço foreach
  foreach($alunos as $matricula => $vetorInterno)
   {
   echo "<tr>
          <td> $matricula </td>
          <td> $vetorInterno[0] </td>
          <td> $vetorInterno[1] </td>
         </tr>";
   }
   //fechar a tabela após o término co laço
   echo "</table>";  
  ?>    
</body> 
</html> 