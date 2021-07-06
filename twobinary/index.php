<?php
function addBinary($a, $b)
{
  $alen = strlen($a) - 1;
  $blen = strlen($b) - 1;
  $res = "";
  $carry = 0;

  while ($alen >= 0 || $blen >= 0) {

    $x1  = ($alen >= 0 ? $a[$alen] : 0);
    $x2  = ($blen >= 0 ? $b[$blen] : 0);

    $sum = $x1 + $x2 + $carry;
    // var_dump($sum);
    if ($sum == 0)
      $carry = 0;
    if ($sum == 1)
      $carry = 0;
    if ($sum == 2) {
      $carry = 1;
      $sum = 0;
    }
    if ($sum == 3) {
      $carry = 1;
      $sum = 1;
    }

    $res = $sum . $res;


    $alen--;
    $blen--;
  }

  if ($carry != 0) {
    $res = $carry . $res;
    var_dump($res);
  }

  return "$res";
}
