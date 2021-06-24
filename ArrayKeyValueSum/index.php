<?php

$n = 8;
$source = <<<EOL
1 1 2 4
1 1 2 -1
1 2 3 4
1 1 2 3
9 9 9 2
9 9 9 3
8 8 8 1
8 8 8 2
EOL;
$lines = explode(PHP_EOL, $source);


$result = [];
for ($i = 0; $i < $n; $i++) {
  $values = explode(' ', $lines[$i]);
  $key = implode(',', array_slice($values, 0, 3));
  $result[$key] = ($result[$key] ?? 0) + intval($values[3], 10);
}
print_r($result);
/* [1,2,3番目の値] => 4番目の値の合計 の配列を作る
[
  '1,1,2' => 6,
  '1,2,3' => 4,
  '9,9,9' => 5,
  '8,8,8' => 3,
]
*/

$result = array_map(function ($key) use ($result) {
  return array_merge(array_map(function ($v) {
    return intval($v, 10);
  }, explode(',', $key)), [$result[$key]]);
}, array_keys($result));
print_r($result);
/*
[
  [1, 1, 2, 6],
  [1, 2, 3, 4],
  [9, 9, 9, 5],
  [8, 8, 8, 3],
]
*/
