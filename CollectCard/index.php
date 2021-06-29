<?php

[$N, $M] = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $M; $i++) {
  if ($M - $i > 0) {
    $nums[$i] = $M - $i;
  }
}



$count = 0;
for ($i = 0; $i < $N; $i++) {
  $input  =  (int)trim(fgets(STDIN));

  if (in_array($input, $nums, true)) {
    $key = array_search($input, $nums);
    unset($nums[$key]);
  }
  $count++;
  if (!$nums) {
    break;
  }
}


if (!$nums) {
  echo $count;
} else {
  echo "unlucky";
}
