<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Farmácia XXX </title> 
  <link rel="stylesheet" href="formata-ativ5.css">
</head> 

<body> 
    <h1> Registro de medicamentos </h1>

<?php

    $codigomedic1 = $_POST["codigomedic1"];
    $codigomedic2 = $_POST["codigomedic2"];
    $codigomedic3 = $_POST["codigomedic3"];

    $nomemedic1 = $_POST["nomemedic1"];
    $nomemedic2 = $_POST["nomemedic2"];
    $nomemedic3 = $_POST["nomemedic3"];

    $precomedic1 = $_POST["precomedic1"];
    $precomedic2 = $_POST["precomedic2"];
    $precomedic3 = $_POST["precomedic3"];

    $medicamentos[$codigomedic1] = [$nomemedic1, $precomedic1];
    $medicamentos[$codigomedic2] = [$nomemedic2, $precomedic2];
    $medicamentos[$codigomedic3] = [$nomemedic3, $precomedic3];

    echo "<table>
    <caption> Dados do medicamento </caption>
    <tr>
     <th> Código do medicamento </th>
     <th> Nome do medicamento </th>
     <th> Preço do medicamento </th>        
    </tr>";

    foreach($medicamentos as $codigo => $vetorInterno)
    {
        $vetorCodigo[$codigo] = $vetorInterno[0];
    }

    
    $codigoPesquisado = $_POST['pesquisa-codigo'];   
    
    if($codigoPesquisado === false)
    {
        echo "<p> O código do medicamento $codigoPesquisado não foi localizado. </p>";
    }
    else
    {   
        $nomeMedicamento = $medicamentos[$codigoPesquisado][0];
        $precoTotal = $medicamentos[$codigoPesquisado][1];

        echo "<tr>
        <td> $codigoPesquisado </td>
        <td> $nomeMedicamento </td>
        <td> $precoTotal </td>
       </tr>";
    }
        echo "</table>"; 


?>
    
</body> 
</html> 