<?php

$boxTypes = [[5, 10], [2, 5], [4, 7], [3, 9]];
$truckSize = 10;

maximumUnits($boxTypes, $truckSize);



function maximumUnits($boxTypes, $truckSize)
{
  $c = count($boxTypes);
  for ($i = 0; $i < $c - 1; $i++) {
    for ($j = $i + 1; $j < $c; $j++) {
      if ($boxTypes[$i][1] < $boxTypes[$j][1]) {
        $temp = $boxTypes[$i];
        $boxTypes[$i] = $boxTypes[$j];
        $boxTypes[$j] = $temp;
      }
    }
  }

  $i = 0;
  $result = 0;
  while ($truckSize > 0 && $i < $c) {
    if ($truckSize >= $boxTypes[$i][0]) {
      $result += $boxTypes[$i][0] * $boxTypes[$i][1];
      $truckSize -= $boxTypes[$i][0];
    } else {
      $result += $truckSize * $boxTypes[$i][1];
      $truckSize = 0;
    }
    $i++;
  }

  return print $result;
}
