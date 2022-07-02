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
 
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Funções em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Prática com funções de usuário - conversão de temperaturas entre escalas </h1>

 <?php
  //área do script principal
  //recebendo a temperatura fornecida
  $temp = $_POST["temp"];

  //antes de prosseguir, testamos se algum botão de rádio foi selecionado pelo usuário
  if(isset($_POST["escala"]))
   {
   //uma escala de conversão foi selecionada no formulário - recebemos o value do botão de rádio respectivo
   $escala = $_POST["escala"];

   //agora, testamos para descobrir qual escala termométrica será utilizada na conversão e, então, invocamos a função de usuário apropriada
   if($escala == "0")
    {
    //invocamos a função que irá converter a temperatura de Celsius para Fahrenheit
    $mensagem = converteDeCparaF($temp);
    echo $mensagem;
    }
   else 
    {
    //invocamos a função que irá converter a temperatura de Fahrenheit para Celsius
    $mensagem = converteDeFparaC($temp);
    echo $mensagem;
    }
   }

  else
   {
   echo "<p> <span> Você deve selecionar uma escala de conversão. Tente novamente! </span> </p>";
   }
  ?>    
</body> 
</html> 