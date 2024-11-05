<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $nomes = array("Primo" => "Rodrigo", "Vizinho" => "Felipe", "Mãe" => "Vera");
  $values = array_values($nomes);
  print_r($values);
  //MERGE JUNTA DOIS ARRAYS EM UM NOVO ARRAY
  $merge = array_merge($nomes, $carros);
  print_r($merge);
  //POP REMOVE O ULTIMO ELEMENTO DO ARRAY
  array_pop($merge);

  print_r($merge);
  //SHIFT REMOVE O PRIMEIRO ELEMENTO DO ARRAY, UNSHIFT ADICIONA NO INICIO EPUSH ADICIONA NO FINAL,
  array_shift($merge);
  //ARRAY COMBINE JUNTA ARRAYS UM COMO INDICE E OUTRO COMO VALOR
  //EXPLODE SERVE PARA TRANSFORMAR UMA STRING EM ARRAY
  //IMPLODE
  
  //CONDICIONAIS 
  
  $numero = 10;

  if ($numero == 10):
    print_r("é igual a 10");
  elseif ($numero <= 9):
    print_r("numero menor ou igual a 9");
  else:
    echo ("Numero é diferente de 10");

  endif;

  //NUmber format
  $DB = 1234.56;
  $preco = number_format($DB, 2, ",", ".");


  //RETORNA NUMERO ALEATÓRIO ENTRE 1 E 20
  echo rand(1, 20);





  ?>



</body>

</html>