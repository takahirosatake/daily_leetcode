<?php


$n = "27346209830709182346";

minPartitions($n);

function minPartitions($n)
{

  $max = 0;
  $nums = str_split($n);
  // var_dump($nums);
  foreach ($nums as $i) {
    $max = $max < $i ? $i : $max;
  }
  return $max;
}
