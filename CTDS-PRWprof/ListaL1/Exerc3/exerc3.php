<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos do PHP </h1>
 <?php
  //recebendo o valor da venda fornecido no formulário
  $valorVenda = $_GET["valor-venda"];

  //guardando os três percentuais em três constantes
  define("DESCONTO", 10/100);
  define('ICMS', 12/100);
  define("COMISSAO", 5/100);

  //calculando o valor de cada desconto devido pela loja
  $descontoDoCliente = $valorVenda * DESCONTO;
  $valorICMS         = $valorVenda * ICMS;
  $comissaoVendedor  = $valorVenda * COMISSAO;

  echo "<p> Resultados da venda: <br>
            Valor do desconto = <span> R$$descontoDoCliente </span> <br>
            Valor do ICMS = <span> R$$valorICMS </span> <br>
            Comissão do vendedor = <span> R$$comissaoVendedor </span> </p>";  
 ?>
</body> 
</html> 