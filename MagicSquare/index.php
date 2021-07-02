<?php
$N = trim(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
  $square[$i] = explode(" ", (trim(fgets(STDIN))));
}

// 縦横対角線の値の和
$sum = $N * ($N ** 2 + 1) / 2;

$row = count($square);
$col = count($square[0]);

$zero = [];

for ($i = 0; $i < $row; $i++) {
  for ($j = 0; $j < $col; $j++) {
    if (0 == $square[$i][$j]) {
      array_push($zero, [$i, $j]);
    }
  }
}

[$zeroI1, $zeroJ1] = $zero[0];
[$zeroI2, $zeroJ2] = $zero[1];


if ($zeroI1 != $zeroI2) {
  for ($j = 0; $j < $N; $j++) {
    $square[$zeroI1][$zeroJ1] = (int)$sum - (int)array_sum($square[$zeroI1]);
    $square[$zeroI2][$zeroJ2] = (int)$sum - (int)array_sum($square[$zeroI2]);
  }
} elseif ($zeroJ1 != $zeroJ2) {
  for ($i = 0; $i < $N; $i++) {
    $squareI += $square[$i][$zeroJ1];
    $squareJ += $square[$i][$zeroJ2];
  }
  $square[$zeroI1][$zeroJ1] = (int)$sum - (int)$squareI;
  $square[$zeroI2][$zeroJ2] = (int)$sum - (int)$squareJ;
}


foreach ($square as $row) {
  print implode(" ", $row) . "\n";
}
