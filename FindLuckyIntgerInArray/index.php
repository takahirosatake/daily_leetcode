Given an array of integers arr, a lucky integer is an integer which has a frequency in the array equal to its value.

Return a lucky integer in the array. If there are multiple lucky integers return the largest of them. If there is no lucky integer return -1.
配列の値と同じ値の数が等しい場合、その値の数値の最大値を返しなさい。
同じ値の数が存在しない場合は、−１を返しなさい。




<?php

$arr = [2, 2, 3, 4];
// output = 2;

$arr = [1, 2, 2, 3, 3, 3];
// output = 3;

$arr = [2, 2, 2, 3, 3];
// output = 2;

$arr = [5];
// output = -1;

$arr = [7, 7, 7, 7, 7, 7, 7];
// output = 7;

// echo var_dump($arr);
// $luckyArray = array_count_values($arr);
// echo var_dump($luckyArray);

function findLucky($arr)
{
  $luckyArray = array_count_values($arr);

  foreach ($luckyArray as $key => $value) {
    if ($key === $value) {
      $match[] = $value;
    }
  }
  if (!$match) {
    $match[] = -1;
  }
  return max($match);
}

//パターン２ 新たに配列を作って、配列のキーに値をカウントする、カウントした後の処理は上と同じ
function findLucky2($arr)
{

  $map = [];

  foreach ($arr as $val) {

    if ($map[$val]) {

      $map[$val] += 1;
    } else {

      $map[$val] = 1;
    }
  }

  $lucky = [-1];

  foreach ($map as $key => $val) {

    if ($key == $val) {

      array_push($lucky, $val);
      //$array_pushで第一引数$luckyに第二引数で配列に入れる値を設定し、繰り返し処理をする。
    }
  }

  return max($lucky);
}
