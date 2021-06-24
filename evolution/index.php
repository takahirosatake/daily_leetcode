<?php
[$ATK, $DEF, $AGI] = explode(" ", trim(fgets(STDIN)));

$N = trim(fgets(STDIN));

$evolution = [];

for ($i = 0; $i < $N; $i++) {
  $monster = explode(" ", trim(fgets(STDIN)));

  if (
    $ATK <= $monster[2] && $ATK >= $monster[1] &&
    $DEF <= $monster[4] && $DEF >= $monster[3] &&
    $AGI <= $monster[6] && $AGI >= $monster[5]
  ) {
    $evolution[$i] = $monster[0];
  }
}

if ($evolution) {
  foreach ($evolution as $evo) {
    echo "$evo\n";
  }
} else {
  echo "no evolution";
}
