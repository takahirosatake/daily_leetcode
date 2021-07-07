<?php
$nums = [2, 7, 11, 15];
$target = 9;

twoSum($nums, $target);

function twoSum($nums, $target)
{
  $map = [];
  $numbers = count($nums);

  for ($i = 0; $i < $numbers; $i++) {
    $complement = $target - $nums[$i];
    if (array_key_exists($complement, $map)) {
      //array_key_exitsts 指定したキーまたは添字が配列にあるかどうかを調べる 引数１(調べる値)、引数２(対象とする配列)
      return [$map[$complement], $i];
    }
    $map[$nums[$i]] = $i;
    var_dump($map);
  }
}
