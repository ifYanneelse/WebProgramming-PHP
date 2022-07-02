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

  //criando constantes para armazenarmos a taxa de desconto e a taxa de acréscimo, nos casos de pagamento à vista ou a prazo
  define("DESCONTO", 5/100);
  define('ACRESCIMO', 2/100);

  //antes de mais de nada, fazemos o PHP testar se um dos botões de rádio foi selecionado
  if(isset($_POST["forma-pagamento"]))
   {
   //recebendo do formulário a informação sobre pagamento com cartão (sim/não) e a entrega a domicílio (sim/não)
   $formaPagamento = $_POST['forma-pagamento'];

   $desconto  = 0;
   $acrescimo = 0;
   //testamos para ver se o pagamento foi à vista ou a prazo
   if($formaPagamento == "Pagamento à vista") 
    {
    $desconto = $valorCompra * DESCONTO;
    }

   else
    {
    $acrescimo = $valorCompra * ACRESCIMO;
    }

   //calculamos o valor final da compra
   $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
   $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

   //testamos para ver se o usuário marcou (ou não) o checkbox
   if(isset($_POST["cartao"]))
    {
    $sorteio = "O cliente está participando do sorteio do automóvel.";
    }

   else
    {
    $sorteio = "O cliente não está participando do sorteio do automóvel."  ;
    }

    echo "<p> O valor final da compra do cliente é de <span> R$$valorFinalCompraFormatado <br>
    $sorteio </span> </p>";   
   }

  else 
   {
   exit("<p> Carto usuário, você deve selecionar uma  forma de pagamento. Aplicação encerrada! </p>"); //encerra a execução do programa
   }

  

 ?> 
</body> 
</html> 