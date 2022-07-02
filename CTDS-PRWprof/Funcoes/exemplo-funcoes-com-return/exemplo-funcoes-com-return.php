<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Funções de usuário </title> 
  
</head> 

<body> 
  <h1> Exemplificando a necessidade de se utilizar funções de usuário no código em PHP </h1>

  <?php 
   //área de declaração da função. Declaramos, aqui, o corpo e o cabeçalho da função.
   function converteDolaresEmReais($quantiaDolares)
    {
     $quantiaEmReais  = 5.46 * $quantiaDolares;
     //retorna o valor convertido para o programa principal
     return $quantiaEmReais;
    }

   //converter uma quantia de dólares em reais
   $quantiaDolares = 1000.00;

   //invoca a função e recebe o valor convertido que retornou da função
   $quantiaConvertida = converteDolaresEmReais($quantiaDolares);
   

   echo "<p> Resultado da conversão: <br>
         Valor em dólares = $$quantiaDolares <br>
         Taxa = R$5,46 <br>
         Valor convertido em reais = R$$quantiaConvertida <hr> </p>";

   $quantiaDolares = 2000.00;
   $quantiaConvertida = converteDolaresEmReais($quantiaDolares);

   echo "<p> Resultado da conversão: <br>
         Valor em dólares = $$quantiaDolares <br>
         Taxa = 5,46 <br>
         Valor convertido em reais = R$$quantiaConvertida <hr> </p>";

   $quantiaDolares = 3500.00;
   $quantiaConvertida = converteDolaresEmReais($quantiaDolares);

   echo "<p> Resultado da conversão: <br>
         Valor em dólares = $$quantiaDolares <br>
         Taxa = 5,46 <br>
         Valor convertido em reais = R$$quantiaConvertida <hr> </p>";
  
?>    
</body> 
</html> 