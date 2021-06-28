<?php
//・ 1 行で、開始時点の x , y 座標を表す X , Y, 移動の歩数 N が与えられます。

// $s = explode(" ", trim(fgets(STDIN)));

// $x = $s[0];
// $y = $s[1];
// $num = $s[2];

// $dis = "E"; //初期方角

// $turn_point = array(1, 2, 4, 6, 9, 12, 16, 20, 25, 30, 36, 42, 49, 56, 64, 72, 81, 90, 100); //曲がるポイント
//print_r($turn_point);


// for ($i = 0; $i < $num; $i++) {
//   $hoge = $turn_point[0];

//   if ($i == $hoge) { //曲がるポイントだったら
//     if ($dis == "N") {
//       $dis = "E";
//     } elseif ($dis == "E") {
//       $dis = "S";
//     } elseif ($dis == "S") {
//       $dis = "W";
//     } elseif ($dis == "W") {
//       $dis = "N";
//     }

//     array_shift($turn_point); //使用済みの最初の値を削除
//   }

//   //移動
//   if ($dis == "N") {
//     $y--;
//   } elseif ($dis == "E") {
//     $x++;
//   } elseif ($dis == "S") {
//     $y++;
//   } elseif ($dis == "W") {
//     $x--;
//   }
// }

// echo ($x . " " . $y . "\n");


$input = explode(" ", trim(fgets(STDIN)));
$targetx = $input[0]; //初期ｘ座標
$targety = $input[1]; //初期ｙ座標
$x = 0;
$y = 0;
$move = $input[2]; //歩数
$flag = 0; //移動向きを管理するフラグ
$array[] = "0 0";

for ($i = 1; $i < 50; $i++) { //歩数による座標変化の配列を作成
  if ($flag == 0) {
    for ($j = 0; $j < $i; $j++) {
      $x++;
      $array[] = $x . " " . $y;
    }
    for ($j = 0; $j < $i; $j++) {
      $y++;
      $array[] = $x . " " . $y;
    }
    $flag = 1;
  } elseif ($flag == 1) {
    for ($j = 0; $j < $i; $j++) {
      $x--;
      $array[] = $x . " " . $y;
    }
    for ($j = 0; $j < $i; $j++) {
      $y--;
      $array[] = $x . " " . $y;
    }
    $flag = 0;
  }
}
// print_r($array);
$target = explode(" ", $array[$move]); //歩数に対する座標の変化分を取得
$movex = $target[0]; //x座標の変化分を取得
$movey = $target[1]; //ｙ座標の変化分を取得
$ansx = $targetx + $movex; //初期x座標から歩数分のｘ座標を変化させる
$ansy = $targety + $movey; //初期ｙ座標から歩数分のｙ座標を変化させる
echo $ansx . " " . $ansy; //答えを出力する
