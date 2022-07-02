<?php
 function converteDeCparaF($temp)
  {
  $f = ($temp * 9/5)  + 32;
  $texto = "<p> Dados da conversão: <br>
            Temperatura fornecida = <span> {$temp}°C </span> <br>
            Temperatura convertida = <span> {$f}°F </span> </p>";
  return $texto;
  }

//=========================================================
 
 function converteDeFparaC($temp)
  {
  $c = ($temp - 32)  * 5/9;
  $texto = "<p> Dados da conversão: <br>
            Temperatura fornecida = <span> {$temp}°F </span> <br>
            Temperatura convertida = <span> {$c}°C </span> </p>";
  return $texto;
  }