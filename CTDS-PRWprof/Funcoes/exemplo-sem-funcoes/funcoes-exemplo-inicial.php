<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Funções de usuário </title> 
  
</head> 

<body> 
  <h1> Exemplificando a necessidade de se utilizar funções de usuário no código em PHP </h1>

  <?php 
   //converter uma quantia de dólares em reais
   $quantiaDolares = 1000.00;
   $quantiaEmReais  = 5.46 * $quantiaDolares;

   echo "<p> Resultado da conversão: <br>
         Valor em dólares = $$quantiaDolares <br>
         Taxa = R$5,46 <br>
         Valor convertido em reais = R$$quantiaEmReais <hr> </p>";

   $quantiaDolares = 2000.00;
   $quantiaEmReais  = 5.46 * $quantiaDolares;

   echo "<p> Resultado da conversão: <br>
         Valor em dólares = $$quantiaDolares <br>
         Taxa = 5,46 <br>
         Valor convertido em reais = R$$quantiaEmReais <hr> </p>";

   $quantiaDolares = 3500.00;
   $quantiaEmReais  = 5.46 * $quantiaDolares;

   echo "<p> Resultado da conversão: <br>
         Valor em dólares = $$quantiaDolares <br>
         Taxa = 5,46 <br>
         Valor convertido em reais = R$$quantiaEmReais <hr> </p>";
  
?>    
</body> 
</html> 