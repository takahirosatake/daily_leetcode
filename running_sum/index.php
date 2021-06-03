<?php

$nums = [1, 2, 3, 4];

var_dump(runningSum($nums));


function runningSum($nums)
{

  $sums = 0;
  $result = [];
  $numbers = count($nums);

  for ($i = 0; $i < $numbers; $i++) {
    if ($i === 0) {
      $sums = $nums[$i];
      $result[] = $sums;
    } else {
      $sums = $sums + $nums[$i];
      $result[] = $sums;
    }
  }
  return $result;
}
