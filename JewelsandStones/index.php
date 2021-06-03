<?php

$J = "aA";

$S = "aAAbbbb";

numJewelsInStones($J, $S);

function numJewelsInStones($J, $S)
{
  $countchar = 0;
  $jewelsTypes = str_split($J); //文字を１文字ずつ配列にする[ "a" , "b" ] 引数は配列にした文字列

  foreach (str_split($S) as $item) {  //文字を１文字ずつ配列にする[ "a","A","A","b","b","b","b"]
    if (in_array($item, $jewelsTypes, true)) {
      //in_array(引数１(比べる値), 引数２(対象とする配列), 引数３trueを設定 デフォルトではfalseのため型比較を行うため
      $countchar++;
    }
  }
  return  print $countchar;
}
