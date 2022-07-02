<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Funções em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Média dos alunos </h1>

 <?php
  require_once "listaL5-exerc8.inc.php";

  $nota1 = $_POST ["nota1"];
  $nota2 = $_POST ["nota2"];
  $nota3 = $_POST ["nota3"];

  
  echo "<table>
  <caption> Cálculo de Média </caption>
  <tr>
   <th> Nota 1 </th>
   <th> Nota 2 </th>
   <th> Nota 3 </th>   
   <th> Média </th>             
  </tr>";

if(isset($_POST["medias"]))
{
  $medias = $_POST["medias"];

    if($medias == "0")
        {
            $media = convertemediaAritmetica($nota1, $nota2, $nota3); 
        }
    else 
        {
            $media = convertemediaPonderada($nota1, $nota2, $nota3);         
        }
        
        $mediaFormatada = number_format($media, 1, ",", ".");
        
        echo "<tr>
        <td> $nota1 </td>
        <td> $nota2 </td>
        <td> $nota3 </td>
        <td> $mediaFormatada </td>
       </tr>";
    }
        echo "</table>"; 

?>    
</body> 
</html> 