<?php


function arraySearch($value, $array)
{
  $search_flag = false;
  foreach ($array as $key => $v) {
    if ($v == $value) {
      echo $value . "は、arrayの" . $key . "番目にありました" . PHP_EOL;
      $search_flag = true;
      break;
    }
  }
  if (!$search_flag) {
    echo $value . "は見つかりませんでした。" . PHP_EOL;
  }
}


$array = [3, 5, 9, 12, 15, 21, 29, 35, 42, 51, 62, 78, 81, 87, 92, 93];

arraySearch(62, $array);
arraySearch(9, $array);
arraySearch(10, $array);
