<?php
[$H, $W, $K] = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $H; $i++) {
  $array[] = str_split(trim(fgets(STDIN)));
  if (in_array("N", $array[$i])) {
    $x = $i;
    $y = array_search('N', $array[$i]);
  }
}

for ($i = 0; $i < $H; $i++) {
  for ($j = 0; $j < $W; $j++) {
    foreach (range(0, $K) as $number) {
      if ($number == $array[$i][$j]) {
        $savePoints[$number] = [$i, $j];
      }
    }
  }
}

foreach ($savePoints as $index => $savePoint) {
  $moves[$index] = abs($x - $savePoint[0]) + abs($y - $savePoint[1]);
}

$min = min($moves);
ksort($moves);

$count = array_count_values($moves);
echo $count[$min];
echo "\n";

foreach ($moves as $index => $move) {
  if ($min == $move) {
    echo $index;
    echo "\n";
  }
}
