<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Prática com matrizes - resultado da pesquisa pelo nome do aluno </h1>

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


  //item b) Antes de mais nada, vamos receber, do formulário, o nome do aluno a ser pesquisado. Em seguida, em um laço foreach, vamos criar um vetor auxiliar armazenando os nomes dos alunos. Vamos usar, como índice deste vetor, o número de matrícula de cada aluno   

  foreach($alunos as $matricula => $vetorInterno)
   {
   //antes de inserir os nomes dos alunos no vetor auxiliar, convertemos cada caracter do nome vindo da matriz para minúsculo, por meio de strtolower (ou para maiúsculo, com strtoupper)
   $vetorNomes[$matricula] = strtolower($vetorInterno[0]);
   }

   /*echo "<pre>";
   print_r($vetorNomes);
   echo "</pre>";*/

   //agora, recebemos, do formulário, o nome do aluno a ser pesquisado
   $nomePesquisado = $_POST['pesquisa-nome'];

   //para evitar que o PHP diferencie maiúsculas de mínúsculas na hora de pesquisar o nome no vetor, podemos converter o nome para minúsculas, por meio da função strtolower. Também, poderíamos converter tudo para maísuculo com strtoupper
   $nomePesquisadoMinusc = strtolower($nomePesquisado);

   //a seguir, usamos a função array_search() para fazer com que o PHP busque, no vetor $vetorNomes, o nome do aluno sendo pesquisado (tudo em minúsculo)
   $matricAlunoPesquisado = array_search($nomePesquisadoMinusc, $vetorNomes);

   //indo adiante, testamos se o conteúdo dentro da variável $matricAlunoPesquisado é igual a falso
   if($matricAlunoPesquisado === false)
    {
    //o aluno pesquisado não foi encontrado
    echo "<p> O nome do aluno pesquisado <span> $nomePesquisado </span> não foi localizado na matriz. </p>";
    }
   else
    {
    //entrando aqui, significa que o nome do aluno pesquisado foi encontrado. Vamos na matriz e, por meio da matrícula deste aluno, descobrimos sua média individual
    $mediaDoAluno = $alunos[$matricAlunoPesquisado][1];

    echo "<p> Dados do aluno pesquisado: <br>
              Aluno = <span> $nomePesquisado </span> <br>
              Matrícula = <span> $matricAlunoPesquisado </span> <br>
              Média = <span> $mediaDoAluno </span> </p>";
    }
  ?>    
</body> 
</html> 