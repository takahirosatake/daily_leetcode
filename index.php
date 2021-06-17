<?php

$array1 = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $array1[0]; $i++) {
  $kadan[$i][] = trim(fgets(STDIN));
}
echo ($kadan[0][0]);
echo ($kadan[1][0]);
echo ($kadan[2][0]);
echo ($kadan[3][0]);
