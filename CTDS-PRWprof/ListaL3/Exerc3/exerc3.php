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

  $nome1 = $_POST["aluno1"];
  $nome2 = $_POST["aluno2"];
  $nome3 = $_POST["aluno3"];

  //vamos criar o vetor com índice associativo. O nome do aluno será o índice e a nota respectiva será o conteúdo de cada célula
  $alunos = [$nome1 => $nota1,
             $nome2 => $nota2,
             $nome3 => $nota3];

  
  /*mostrar os dados do vetor
  echo "<pre>";
  print_r($alunos);
  echo "</pre>";*/

  //b) ordenar aas notas dos alunos em ordem decrescente. Para isso, vamos usar a função pronta (deve conter as letras r, de reverse; a, de associação entre conteúdo e índice; e não conter a letra k, pois a ordenação está sendo feita pelo conteúdo do vetor - as notas)
  rsort($alunos);

  //item c) Percorrer o vetor e mostrar os dados na página web no formato tabular - primeiramente, criamos o cabeçalho da tabela
  echo "<table>
         <caption> Rendimento dos alunos em PRW </caption>
         <tr>
          <th> Aluno </th>
          <th> Nota </th>        
         </tr>";

  //em seguida, criamos o corpo da tabela, que irá mostrar os dados de cada aluno. Estes dados vêm do vetor, e são retirados por meio do laço foreach
  foreach($alunos as $nomeAluno => $notaAluno)
   {
   echo "<tr>
          <td> $nomeAluno </td>
          <td> $notaAluno </td>
         </tr>";
   }
   //fechar a tabela após o término co laço
   echo "</table>";   
  ?>    
</body> 
</html> 