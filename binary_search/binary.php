<?php
function binarySearch($value, $array)
{
  $search_flag = false;
  $arrayLeft = 0;
  $arrayRight = count($array) - 1;

  while (abs($arrayLeft - $arrayRight) > 1) {
    $pivot = round(($arrayLeft + $arrayRight) / 2);
    if ($array[$pivot] == $value) {
      $search_flag = true;
      break;
    }
    if ($array[$pivot] < $value) {
      $arrayLeft = $pivot;
    }
    if ($array[$pivot] > $value) {
      $arrayRight = $pivot;
    }
  }


  if (!$search_flag) {
    echo "見つかりませんでした";
  } else {
    echo "見つかりました";
  }
}


$array = [3, 5, 9, 12, 15, 21, 29, 35, 42, 51, 62, 78, 81, 87, 92, 93];

binarySearch(62, $array);
binarySearch(9, $array);
binarySearch(10, $array);
