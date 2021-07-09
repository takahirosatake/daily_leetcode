<?php
$card = trim(fgets(STDIN));
$cards = str_split($card);

$count = 0;

for ($i = 0; $i < 4; $i++) {
  //第一引数に指定した文字列第２引数に検索した値いくつ文字列に含まれているかをカウントする
  $nums[$i] = substr_count($card, $cards[$i]);

  if ($count < $nums[$i]) {
    $count = $nums[$i];
  }
}
for ($i = 0; $i < 4; $i++) {
  if ($cards[$i] === '*') {
    $count++;
  }
}
if ($count == 1) {
  echo "NoPair\n";
} else if ($count == 2) {
  //配列内の数値を全てたす javascript reduceメソッドのような動き

  $hantei = array_sum($nums);
  if ($hantei == 8) {
    echo "TwoPair\n";
  } else {
    echo "OnePair\n";
  }
} else if ($count == 3) {

  echo "ThreeCard\n";
} else if ($count == 4) {

  echo "FourCard\n";
}
