<?php
$n = fgets(STDIN);
$minute = 600;

for ($i = 0; $i < $n; $i++) {
  $announce[$i] = explode(" ", fgets(STDIN));
}

$lunchBreak = 0;

for ($i = 0; $i < $n; $i++) {
  printf("%02d:%02d", floor($minute / 60), $minute % 60);
  $minute += $announce[$i][1];
  printf(" - %02d:%02d %s\n", floor($minute / 60), $minute % 60, $announce[$i][0]);
  $minute += 10;


  if (!$lunchBreak) {
    if ($minute + $announce[$i + 1][1] > 720) {
      $minute += 50;

      $lunchBreak = 1;
    }
  }
}
