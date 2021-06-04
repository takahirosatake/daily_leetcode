<?php

$array = explode(" ", trim(fgets(STDIN)));

$length =  count($array);

$total = 0;

for ($i = 1; $i < $length; $i++) {
  if (!$total) {
    $total =  $array[$i - 1] * (1 - $array[$i] / 100);
  } else {
    $total =  $total * (1 - $array[$i] / 100);
  }
}
echo $total;


$array = explode(" ", trim(fgets(STDIN)));
$total = 0;
$total =  $array[0] * (1 - $array[1] / 100);
$total =  $total * (1 - $array[2] / 100);
echo $total;
