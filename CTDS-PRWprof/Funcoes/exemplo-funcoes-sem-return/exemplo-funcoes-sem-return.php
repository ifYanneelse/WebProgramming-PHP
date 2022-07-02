<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Funções de usuário </title> 
  
</head> 

<body> 
  <h1> Exemplificando a necessidade de se utilizar funções de usuário no código em PHP </h1>

  <?php 
   //área de declaração da função. Declaramos, aqui, o corpo e o cabeçalho da função. A própria função irá mostrar os resultados na página web - não precisa do return
   function converteDolaresEmReais($quantiaDolares)
    {
     $quantiaEmReais  = 5.46 * $quantiaDolares;
     echo "<p> Resultado da conversão: <br>
         Valor em dólares = $$quantiaDolares <br> 
         Taxa = R$5,46 <br>
         Valor convertido em reais = R$$quantiaEmReais <hr> </p>";
     
    }

   //converter uma quantia de dólares em reais
   $quantiaDolares = 1000.00;

   //invoca a função, sem a necessidade de retorno de algum valor
   converteDolaresEmReais($quantiaDolares);   

   $quantiaDolares = 2000.00;
   converteDolaresEmReais($quantiaDolares);

   $quantiaDolares = 3500.00;
   converteDolaresEmReais($quantiaDolares);
  
?>    
</body> 
</html> 