サンプルコードでは$Aが[1,3,5,7]と定義されていますが、これはあくまで一例で、$Aの要素の数は動的に変化します。
また$A[]の値は1~1000までのint型とします。

やりたいこと
$Aの要素数が変化しても、配列の隣り合う数を要素数が一つになるまで足し算したいです。
図で表すと下記みたいな感じです。

<?php

// input  
// $A = [1,3,5,7];

// output = Array([0] => 32)

//input
// $A = [1,3,5,7,8];

// output = Array([0] => 79 )

$A = [1, 3, 5, 7, 8];

for ($arr = $A; count($arr) > 1;) {
  $arr = array_map(
    function ($a, $b) {
      return $a + $b;
    },
    array_slice($arr, 0, -1),
    array_slice($arr, 1)
  );
}

print_r($arr);  //=> Array([0] => 79)


?>
