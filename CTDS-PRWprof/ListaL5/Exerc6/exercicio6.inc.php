<?php
 function testarIdade($idade) 
  {
  $valor = filter_var($idade, FILTER_VALIDATE_INT);

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