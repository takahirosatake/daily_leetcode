<?php
$num = trim(fgets(STDIN));

$input = trim(fgets(STDIN));

for ($i = 0; $i < $num; $i++) {
  $strings[$i] = trim(fgets(STDIN));
  if (strpos($strings[$i], $input) !== false) {
    echo $strings[$i];
    echo "\n";
  } else {
    unset($strings[$i]);
  }
}

if (!$strings) {
  echo "None";
}

// print_r($strings);
