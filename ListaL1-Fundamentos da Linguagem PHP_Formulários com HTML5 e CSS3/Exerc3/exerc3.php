<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Programação web com PHP - Curso CTDS - Segunda fase </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
    <h1> Programação web - Exercício 3</h1>

    <?php
    $valorVenda = $_GET ["valor-venda"];

    define("DESCONTO", 10/100);
    define("ICMS", 12/100);
    define("COMISSAO", 5/100);

    $descontoDocliente = $valorVenda * DESCONTO;
    $valorICMS         = $valorVenda * ICMS;
    $comissaoVendedor  = $valorVenda * COMISSAO;

    echo "<p> Resultados da venda <br><br>
            Valor do desconto = <span> R$$descontoDocliente </span> <br>
            Valor do ICMS = <span> R$$valorICMS </span> <br>
            Comissão do vendedor = <span> R$$comissaoVendedor </span> <br>
            </p> ";
    ?>

</body> 
</html> 