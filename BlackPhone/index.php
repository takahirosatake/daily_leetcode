<?php
$nums = str_split(str_replace('-', '', trim(fgets(STDIN))));

$count = count($nums);

$total = 0;

for ($i = 0; $i < $count; $i++) {
  if ($nums[$i] == 0) {
    $total += 24;
  }
  if ($nums[$i] == 1) {
    $total += 6;
  }
  if ($nums[$i] == 2) {
    $total += 8;
  }
  if ($nums[$i] == 3) {
    $total += 10;
  }
  if ($nums[$i] == 4) {
    $total += 12;
  }
  if ($nums[$i] == 5) {
    $total += 14;
  }
  if ($nums[$i] == 6) {
    $total += 16;
  }
  if ($nums[$i] == 7) {
    $total += 18;
  }
  if ($nums[$i] == 8) {
    $total += 20;
  }
  if ($nums[$i] == 9) {
    $total += 22;
  }
}

echo $total;
