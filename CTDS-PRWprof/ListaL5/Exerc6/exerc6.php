<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Funções em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Prática com funções de usuário - validação de campos de formulário </h1>

 <?php
  //formas de inclusão de um arquivo externo
  //include "exercicio6.inc.php";
  require_once "exercicio6.inc.php";

  //include_once "exercicio6.inc.php";
  //include "exercicio6.inc.php";

  //require_once "exercicio6.inc.php";
  //require "exercicio6.inc.php";

  $idade = $_POST["idade"];

  $resultadoTesteIdade = testarIdade($idade);

  if($resultadoTesteIdade == false)
    {
    echo "<p> O valor fornecido não representa um valor válido para a idade. </p>";
    }

   else 
    {
    $mensagem = podeVotar($idade);
    echo $mensagem;
    }      
  ?>    
</body> 
</html> 