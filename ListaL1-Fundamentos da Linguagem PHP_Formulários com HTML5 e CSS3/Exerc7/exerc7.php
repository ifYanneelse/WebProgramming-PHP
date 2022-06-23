<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação web com PHP - Curso CTDS - Segunda fase </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
    <h1> Programação web - Exercício 7</h1>

    <?php

    $valorCompra = $_POST["valor-compra"];

    define("DESCONTO", 5/100);
    define ("ACRESCIMO", 2/100);

    $formaPagamento = $_POST["forma-pagamento"];
    $formaEntrega = $_POST["envio"];

    $desconto = 0;
    $acrescimo = 0;

    if($formaPagamento == "Sim")
    {
        $desconto = $valorCompra * DESCONTO;
    }

    if($formaEntrega == "Sim")
    {
        $acrescimo = $valorCompra * ACRESCIMO;
    }

    $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

    echo "<p> Caro cliente, o valor final da sua compra é de <span> R$$valorFinalCompra </span> </p>";
    ?>

</body> 
</html> 