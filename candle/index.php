<?
$input = trim(fgets(STDIN));



for ($i = 0; $i < $input; $i++) {
  $trade[$i] = explode(" ", trim(fgets(STDIN)));
  $start[] = $trade[$i][0];
  $end[] = $trade[$i][1];
  $max[] = $trade[$i][2];
  $min[] = $trade[$i][3];
}

// print_r($end);


echo $start[0] . " " . array_pop($end) . " " . max($max) . " " . min($min);
