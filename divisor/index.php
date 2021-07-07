<?php
//約数の和求める
$num = 100;
// $total = 0;
foreach (range(1, $num) as $value) {
  if ($num % $value == 0) {
    // $total += $value;
    $sum[] = $value;
  }
}
// echo $total;

// echo array_search($num, $sum);
// echo count($sum) - 1;
$key = count($sum) - 1;
$total = array_reduce($sum, function ($a, $b) use ($sum, $num, $key) { //use(スコープ外の変数を使うことができる)
  if (array_search($b, $sum) == array_search($num, $sum)) {
  } else {
    return $a + $b;
  }
}, 0);


// print_r($total);
