<?php
  //área de definição das funções
  function calcularMedia($x1, $x2)
   {
   $media = ($x1 + $x2) / 2;
   return $media;
   }


  function testarAprovado($media)
   {
    if($media >= 6)
     {
      echo "<p> O aluno com média <span> $media </span> está <span> APROVADO! </span> </p>";
     }
    else 
     {
      echo "<p> O aluno com média <span> $media Não foi aprovado! </span> </p>";  
     }
   }

  