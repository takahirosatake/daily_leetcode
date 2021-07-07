<?php
//エラトステネスのふるい
$max = 1000;
$array = array_fill(2, $max - 2, true); // 2から99までの配列を作成
$sqrtMax = floor(sqrt($max)); //$max の平方根の切り捨てた値を代入

for ($i = 1; $i <= $max; $i++) {
  if (isset($array[$i])) {
    $point = $i;
    if ($point < $sqrtMax) {
      //4以降の倍数を作成する
      $deletePoint = $point * 2;
      while ($deletePoint < $max) {
        unset($array[$deletePoint]);
        //$pointが2なら2の倍数3なら３の倍数の配列のキーを$maxになるまで繰り返し削除する
        $deletePoint += $point;
      }
    }
  }
}
// print_r($array);
$prime = array_keys($array); //array_keys(配列)で配列のキーを値として配列にする
print_r($prime);
foreach ($prime as $num) {
  echo $num . PHP_EOL;
}


//パターン２
// $str = str_repeat('01', $max / 2 + 1);
// $loopmax = ceil(sqrt($max));

// // 篩
// for ($key = 3; $key <= $loopmax; $key += 2) {
//   if ($str[$key] === '0') {
//     continue;
//   }
//   $loop = 2;
//   $now = $key * 2;
//   while ($now <= $max) {
//     $str[$now] = '0';
//     $loop++;
//     $now = $key * $loop;
//   }
// }

// // 出力
// $sosuu = '2' . PHP_EOL;
// for ($key = 3; $key <= $max; $key += 2) {
//   if ($str[$key] === '1') {
//     $sosuu .= $key . PHP_EOL;
//   }
// }
// print_r($str);

// echo $sosuu;
