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

    $desconto = 0;
    $acrescimo = 0;

    if(isset($_POST["forma-pagamento"]))
    {
        $desconto = $valorCompra * DESCONTO;
    }

    if(isset($_POST["entrega-domicilio"]))
    {
        $acrescimo = $valorCompra * ACRESCIMO;
    }

    $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

    $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

    echo "<p> Caro cliente, o valor final da sua compra é de <span> R$$valorFinalCompraFormatado </span> </p>";
    ?>

</body> 
</html> 