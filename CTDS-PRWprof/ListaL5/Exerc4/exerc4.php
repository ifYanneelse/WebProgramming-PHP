<?php
 function calculaComissao($valorVenda, $percentualComissao)
  {
  //calculando o percentual de comissão do vendedor
  $comissao = $valorVenda * $percentualComissao/100;
  return $comissao;  
  }

 //======================================================

 function calculaDesconto($valorVenda) 
  {
  //antes de mais nada, nossa função deve testar se o checkbox foi marcado. Se sim, o percentual de desconto é fixo e igual a 5% (vamos criar uma constante para representá-lo). Se o cliente não pagou com cartão de fidelidade, o desconto é zero

  define('TAXA_DESCONTO', 5);

  if(isset($_POST['desconto-cliente']))
   {
   //pagou com cartão - tem desconto
   $desconto = $valorVenda * TAXA_DESCONTO/100; 
   return $desconto; 
   }
  else
   {
   //não pagou com cartão - desconto zero
   $desconto = 0;
   return $desconto;  
   }
  }

 //=========================================================

 function calculaValorFinal($valorVenda,  $valorDescontoCliente)
  {
  $valorFinalVenda = $valorVenda - $valorDescontoCliente;
  return $valorFinalVenda;
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
 <h1> Prática com funções de usuário - Resultado do proocessamento de vendas </h1>

 <?php
  //aqui, colocamos a definição apenas das funções com comando echo dentro do corpo
  function mostrarResultadosVenda($valorVenda, $percentualComissao, $valorComissao, $valorDescontoCliente, $valorFinalCompra)
   {
   $valorVendaFormatado = number_format($valorVenda, 2, ",", ".");

   $valorComissaoFormatado = number_format($valorComissao, 2, ",", ".");

   $valorDescontoClienteFormatado = number_format($valorDescontoCliente, 2, ",", ".");

   $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

   echo "<p> Resultados da venda: <br>
             Valor inicial da venda = <span> R$$valorVendaFormatado </span> <br>

             Percentual da comissão do vendedor = <span> $percentualComissao% </span> <br>

             Valor da comissão do vendedor = <span> R$$valorComissaoFormatado </span> <br>

             Valor do desconto do cliente = <span> R$$valorDescontoClienteFormatado </span> <br>

             Valor final da compra = <span> R$$valorFinalCompraFormatado </span> </p>";
   }

  //==========================================================

  $valorVenda = $_POST["valor-venda"];
  $percentualComissao = $_POST["percentual-comissao"];
 
  //invocar a função de cálculo da comissão do vendedor
  $valorComissao = calculaComissao($valorVenda, $percentualComissao);

  //invocar a função que calcula o desconto dado ao cliente
  $valorDescontoCliente = calculaDesconto($valorVenda);

  //invocar a função que calcular o valor final a ser pago pelo cliente
  $valorFinalCompra = calculaValorFinal($valorVenda,  $valorDescontoCliente);

  //invocar a função que escreve, na página web, todos os dados relacionados à compra do cliente
  mostrarResultadosVenda($valorVenda, $percentualComissao, $valorComissao, $valorDescontoCliente, $valorFinalCompra); 
  ?>    
</body> 
</html> 