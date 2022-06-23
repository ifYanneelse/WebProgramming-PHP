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

    if(isset($_POST["forma-pagamento"]))
    {
       $formaPagamento = $_POST["forma-pagamento"];
        $desconto = 0;
        $acrescimo = 0;

        if ($formaPagamento == "Pagamento à vista")
        {
            $desconto = $valorCompra * DESCONTO;
        }
        else
        {
            $acrescimo = $valorCompra * ACRESCIMO;
        }
        
    $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
    $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
    
    if(isset($_POST["cartao"]))
    {
        $sorteio = "O cliente está participando do sorteio";
    }

    else
    {
        $sorteio = "O cliente NÃO está participando do sorteio";
    }
    
    echo "<p> Caro cliente, o valor final da sua compra é de <span> R$$valorFinalCompraFormatado </span> <br>
    $sorteio <br>
    </p>";
    }

    
    else
    {
        exit ("<p> Caro usuário, es. <br> Aplicação encerrada! </p>");
    }

    ?>

</body> 
</html> 