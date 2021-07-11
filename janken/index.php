<?php
//合計の指の本数を満たす組み合わせを探す
//グーの場合は、本数の０のためチョキとパーの組み合わせの本数を探す
//組み合わせはfor文で組み合わせを探す
//パーx５＋チョキx２＝指の本数の場合　グーチョキパーそれぞれの勝利回数の合計をたす
//複数の組み合わせから、最大の勝利回数を答える


list($numGame, $numFinger) = explode(" ", fgets(STDIN));
$numGame  = (int)$numGame;
$numFinger = (int)$numFinger;

$hands = fgets(STDIN);

$gCount = mb_substr_count($hands, "G");
$pCount = mb_substr_count($hands, "P");
$cCount = mb_substr_count($hands, "C");

//指の本数からパーがいくつ出せるかを出しておくことでループ処理を無駄なくすることができる。
$maxP = $numFinger / 5;
$win = 0;
$maxWin = 0;

for ($i = 0; $i < $maxP + 1; $i++) {
  for ($j = 0; $j < $numGame - $i + 1; $j++) {
    if ($i * 5 + $j * 2 === $numFinger) {
      //自分の出す手の回数と比較して、小さい方を勝利数として計算
      $win = min($gCount, $i) + min($pCount, $j) + min($cCount, $numGame - $i - $j);
      $maxWin = max($maxWin, $win);
    }
  }
}

print $maxWin;
