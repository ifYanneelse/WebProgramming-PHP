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

  //criando constantes para armazenarmos a taxa de desconto e a taxa de acréscimo
  define("DESCONTO", 5/100);
  define('ACRESCIMO', 2/100);

  //antes de calcularmos o desconto ou o acréscimo aplicado ao valor inicial da compra, devemos testar se o usuário da aplicação marcou (ou não) cada um dos dois checkbox no formulário com a função isset()

  $desconto  = 0;
  $acrescimo = 0;

  if(isset($_POST["forma-pagamento"]))
   {
   $desconto = $valorCompra * DESCONTO;
   }

  if(isset($_POST['entrega-domicilio']))
   {
   $acrescimo = $valorCompra * ACRESCIMO;
   }

  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

  echo "<p> Caro cliente, o valor final da sua compra é de <span> R$$valorFinalCompraFormatado </span> </p>";
 ?> 
</body> 
</html> 