<?php
 //quando não tivermos nenhum comando echo dentro do corpo da função, a definição da mesma pode aparecer aqui, nesta região do script em PHP, antes do início da página web

 function testarIdade($idade) 
  {
  //para testarmos se a idade é válida, usaremos uma função pronta do PHP. A função filter_var retorna o valor false, se o dado for inválido. Se o dado for válido, a função retorna o próprio valor testado
  $valor = filter_var($idade, FILTER_VALIDATE_INT);

  //testando o conteúdo da variável $valor
  if($valor === false OR $valor < 0)
   {
    return false;
   }
  else
   {
    return true;
   }
  }

//=========================================================
 
 function podeVOTar($idade) 
  {
  //testar se a idade está acima ou é igual a 16 anos
  if($idade >= 16)
   {
   $mensagem = "<p> A pessoa com idade de <span> $idade anos </span> está apta a votar. </p>";
   return $mensagem;
   } 

  else
   {
    $mensagem = "<p> A pessoa com idade de <span> $idade anos </span> não está apta a votar. </p>";
    return $mensagem;
   }
  }

?>
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
  //área do script principal
  //recebendo a idade do aluno
  $idade = $_POST["idade"];

  //invocando a função que testa se a o valor fornecido no formulário representa, de fato, a idade de uma pessoa
  $resultadoTesteIdade = testarIdade($idade);

   //testar o resultado da validação da idade
   if($resultadoTesteIdade == false)
    {
    echo "<p> O valor fornecido não representa um valor válido para a idade. </p>";
    }

   else 
    {
    //o usuário forneceu um valor correto para a idade. Invocamos uma função que testa se a pessoa está apta a votar
    $mensagem = podeVotar($idade);
    echo $mensagem;
    }      
  ?>    
</body> 
</html> 