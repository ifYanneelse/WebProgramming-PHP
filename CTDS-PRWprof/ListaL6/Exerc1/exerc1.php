<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="formata-banco.css">
</head> 

<body> 
 <h1> Banco de dados MySQL com PHP - exercício 1 - resultado do processamento </h1>
 <?php
  /*neste ponto, a primeira coisa que fazemos é dizer ao PHP para incluir o código dentro de cada include. 
  Cada um dos arquivos externos irá se encarregar de codificar os comandos em PHP associados a cada uma das 
  etapas de comunicação do PHP com o MySQL, conforme mostrado na página 11 do pdf sobre PHP e Banco de Dados */
  require_once "includes/dados-conexao.inc.php";
  require_once "includes/conectar.inc.php";
  require_once "includes/criar-banco.inc.php";
  require_once "includes/abrir-banco.inc.php";
  require_once "includes/definir-charset.inc.php";
  require_once "includes/criar-tabela.inc.php";

  //neste ponto, devemos fazer com que o PHP descubra qual botão foi acionado pelo usuário no formulário e chame a include com os comandos apropriados à tarefa a ser executada pelo acionamento do respectivo botão
  if(isset($_POST["cadastrar"]))
   {
    //inserir a include com os comandos de cadastro do aluno no banco de dados
    require_once "includes/cadastrar.inc.php";
    echo "<p> Dados do aluno cadastrados com sucesso no banco de dados. </p>";
   }

  if(isset($_POST["listar-dados"]))
   {
    //inserir a include com os comandos de listagem de dados de cada aluno cadastrado no banco, na página web
    require_once "includes/mostrar-dados.inc.php";
   }

  if(isset($_POST["contar-aprovados"]))
   {
    //inserir a include que faz o PHP receber, do banco de dados, o número de alunos aprovados e mostrar na página web 
    require_once "includes/contar-aprovados.inc.php";
   }
  

  require_once "includes/desconectar.inc.php";
 ?>
</body> 
</html>