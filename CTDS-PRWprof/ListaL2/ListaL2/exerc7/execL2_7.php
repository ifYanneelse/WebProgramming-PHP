<?PHP
/* Exercício 7 de Vetores */
  $casa = [];
  $casa['Quarto']['Cama'] = 1;
  $casa['Quarto']['Armario'] = 1;
  $casa['Quarto']['Mesinha'] = 2;
  $casa['Sala']['TV'] = 1;
  $casa['Sala']['Sofa'] = 2;
  $casa['Sala']['Mesinha_Centro'] = 1;
  $casa['Cozinha']['Pia'] = 1;
  $casa['Cozinha']['Mesa'] = 1;
  $casa['Cozinha']['Cadeira'] = 4;

  $i = 'Quarto';
  $j = 'Cama';
  echo "Quantidade de camas: ";
  echo $casa[$i][$j];

?>