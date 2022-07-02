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
  $valorCompra = $_POST["valor-compra"];

  //criando cosntantes para armazenarmos a taxa de desconto e a taxa de acréscimo
  define("DESCONTO", 5/100);
  define('ACRESCIMO', 2/100);

  //recebendo do formulário a informação sobre pagamento com cartão (sim/não) e a entrega a domicílio (sim/não)
  $formaPagamento = $_POST['forma-pagamento'];
  $formaEntrega   = $_POST['envio'];

  /*echo "<p> Forma de pagamento = $formaPagamento <br>
            Forma de entrega   = $formaEntrega </p>";*/
  
  //agora, testamos se o cliente pagou com cartão
  $desconto  = 0;
  $acrescimo = 0;
  
  if($formaPagamento == "Sim")
   {
    $desconto = $valorCompra * DESCONTO;
   }

  //agora, testamos se o cliente solicitou entrega a domicílio
  if($formaEntrega == "Sim")
   {
    $acrescimo = $valorCompra * ACRESCIMO;
   }

  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

  echo "<p> Caro cliente, o valor final da sua compra é de <span> R$$valorFinalCompra </span> </p>";
 ?> 
</body> 
</html> 