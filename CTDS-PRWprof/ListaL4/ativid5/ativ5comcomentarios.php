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
     //mostrar os dados da matriz na tabela da página web
					echo "<tr>
												<td> $codigo </td>
												<td> $vetorInterno[0] </td>
												<td> $vetorInterno[1] </td>
											</tr>";
    }
				echo "</table>";
 
    /*Yanne, vou explicar com comentários aqui, como resolver corretamente o item que pesquisa pelo código do medicamento. 
    Como o código do medicamento já é o índice associativo da matriz (o índice externo), podes usar a função pronta de 
    vetores que busca pelo índice associativo, retornando true ou false, conforme ela encontra (ou não) este índice na 
    matriz. Esta função é a array_key_exists($indice, $matriz) e está descrita na página 16 do nosso pdf de vetores e 
    matrizes, no meu repositório. Sendo assim, observe como fazemos isso:*/
				$codigoASerPesquisado = $_POST['pesquisa-codigo']; //o que veio do formulário
				
    $encontrouCodigo = array_key_exists($codigoASerPesquisado, $medicamentos); //mandamos a função buscar, na matriz, o código digitado no formulário, já que este mesmo código é o indice da matriz e a função busca exatamente pelo índice mais externo (ela não procura dentro do vetor interno)				
				
				if($encontrouCodigo == true)
				{
					//mostrar os dados do medicamento encontrado. Se o código buscado foi encontrado e está na matriz, podemos usá-lo como sendo o índice I. O índice J será o zero (vetor interno) para o nome ou o índice J será o 1, para o preço do medicamento
					$nome = $medicamentos[$codigoASerPesquisado][0];
					$preco = $medicamentos[$codigoASerPesquisado][1];
					
					echo "<p> Dados do remédio pesquisado: <br>
						         Código = $codigoASerPesquisado <br>
															Nome = $nome <br>
															Preço = R$$preco </p>";
					
				}
			else
			{
				echo "<p> O medicamento com o código $codigoASerPesquisado não foi encontrado em nosso sistema. </p>";
			}
?>
    
</body> 
</html> 