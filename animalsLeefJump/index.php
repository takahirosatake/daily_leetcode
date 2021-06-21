<?php

[$N, $M, $K] = explode(" ", trim(fgets(STDIN)));

$positions = [];
for ($i = 0; $i < $M; $i++) {
  $initial = trim(fgets(STDIN));
  $positions[$i] = $initial;
}


if ($N === $K) {
  $num = 0;
} else {
  $num = 1;
}

for ($num; $num < $K; $num++) {
  if ($moves) {
    $positions = $moves;
    $moves = [];
  }
  foreach ($positions as $position) {
    unset($moves[$position]);
    if ($position - 1  == 0) {
      $moves[$position] = (int)$N;
    } elseif ($position - 1 <= $N) {
      $moves[$position] = $position - 1;
    }
  }
}


foreach ($moves as $move) {
  echo "$move\n";
}
