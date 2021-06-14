<?php



$s = 'book';
// output = true

// $s = 'textbook';
// output = false;

// $s = 'MerryChristmas';
// output = false

function halvesAreAlike($s)
{
  $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

  $a = str_split(substr($s, 0, strlen($s) / 2));

  $b = str_split(substr($s, strlen($s) / 2));

  $countA = 0;
  $countB = 0;
  $length = count($a);

  for ($i = 0; $i <= $length; $i++) {
    if (in_array($a[$i], $vowels)) { //in_array(特定の値,　比較する配列の要素) 要素が同じならtrue
      $countA += 1;
    }
    if (in_array($b[$i], $vowels)) {
      $countB += 1;
    }
  }
  return $countA === $countB;
}
