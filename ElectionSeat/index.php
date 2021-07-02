<?php

//配列の政党が選挙で得票数が増えたら1,2,3...Kと総得票数Kまで増えていく
//A政党がの得票数が増えたら議席数を得票数で割、まだ獲得していない政党の議席数と比較する


[$N, $K] = explode(" ", trim(fgets(STDIN)));
for ($i = 0; $i < $N; $i++) {
  $party[] = trim(fgets(STDIN));
  $votes[$i] = 0;
}



for ($i = 0; $i < $K; $i++) {
  $index = 0;
  $max = 0;
  for ($j = 0; $j < count($party); $j++) {
    $value = $party[$j] / ($votes[$j] + 1);
    if ($max < $value) {
      $max = $value;
      $index = $j;
    }
  }
  $votes[$index]++;
}

foreach ($votes as $vote) {
  echo $vote;
  echo "\n";
}
