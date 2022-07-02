<?php
 //inicialmente, vamos criar (manualmente) o vetor que associa cada mercadoria ao seu preço
 $precos = ["Impressora" => 600,
            "Celular"    => 850.15,
            "Notebook"   => 1500];  
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP  </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Manipulação de vetores em PHP - Exercício 4 </h1>

 <?php
  //testamos se o usuário escolheu alguma mercadoria para ser comprada
  if(isset($_POST['item'])) 
   {
   //aqui, recebemos do navegador todas as mercadorias selecionadas pelo usuário no formulário. Lembrar que o PHP cria, automaticamente, um vetor para armazenar os itens marcados de um checkbox
   $produtos = $_POST["item"];

   /*echo "<pre>";
   print_r($produtos);
   echo "</pre>";*/

   //agora, vamos usar o laço foreach para percorrermos o vetor de $produtos adquiridos pelo cliente
   $soma = 0;

   foreach($produtos as $indice => $prod)
    {
    //finalizando, já que tenos, na variável $prod, a cada repetição, o nome do produto escolhido pelo cliente, basta irmos até o vetor de preços e acessarmos o preço do referido produto escolhido
    $soma = $soma + $precos[$prod];   
    }
   
    $somaFormatada = number_format($soma, 2, ",", ".");

    echo "<p> Caro usuário, de acordo com a sua compra efetuada, o valor total a ser pago é de <span> R$somaFormatada </span> </p>";
   }
  else
   {
   //mensagem para o usuário caso ele não tenha adquirido nenhuma mercadoria.
   echo "<p> Caro(a) usuário(a), você optou por não adquirir nenhum produto de nossa loja. Agradecemos a visita e retorne em breve! </p>";
   }  
 ?>    
</body> 
</html> 