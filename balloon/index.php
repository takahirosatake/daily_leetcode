<?php

$array1 = explode(" ", trim(fgets(STDIN)));

$array2 = [];
$i = 0;
while ($i < $array1[0]) {
  $array2[] = explode(" ", trim(fgets(STDIN)));
  $i++;
}

$x = $array1[1];
$y = $array1[2];
$i = 0;
$length =  count($array2);
$x_total = [$x];

for ($i = 0; $i <= $length; $i++) {
  if ($y <= 0) {
    break;
  } else {
    $x = $x + $array2[$i][0];
    $x_total[] = $x;
    $y = $y + $array2[$i][1];
  }
}
echo  max($x_total);
