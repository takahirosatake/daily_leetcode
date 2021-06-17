<?php
$winning = explode(" ", trim(fgets(STDIN)));

$numbers = fgets(STDIN);

for ($i = 0; $i < $numbers; $i++) {
  $lottery = explode(" ", trim(fgets(STDIN)));

  $count = 0;

  foreach ($lottery as $item) {
    if (in_array($item, $winning)) {
      $count += 1;
    }
  }
  echo "$count\n";
}
