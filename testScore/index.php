<?php
[$N, $M] = explode(" ", trim(fgets(STDIN)));


for ($i = 1; $i < $N + 1; $i++) {
  $scores[$i] = explode(" ", trim(fgets(STDIN)));
}

foreach ($scores as $index => $score) {
  if (($score[0] - $score[1] * 5) >= $M || $M == 0) {
    echo "$index\n";
  }
}
