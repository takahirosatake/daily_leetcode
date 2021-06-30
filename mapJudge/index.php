<?php

// 3 3
//##.
//###
//...
[$row, $col] = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i <= $row; $i++) {
    $array[] = str_split(trim(fgets(STDIN)));
}

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        $row_judge = false; //縦判定
        $col_judge = false; //横判定 
        /*---------------------------縦判定開始--------------------------------*/
        if ($i == 0 || $i == ($row - 1)) {
            if ($array[$i + 1][$j] == "#" || $array[$i - 1][$j] == "#") {
                $row_judge = true;
            }
        } else {
            if ($array[$i + 1][$j] == "#" && $array[$i - 1][$j] == "#") {
                $row_judge = true;
            }
        }
        /*---------------------------縦判定修了--------------------------------*/

        /*---------------------------横判定開始--------------------------------*/
        if ($j == 0 || $j == ($col - 1)) {
            if ($array[$i][$j + 1] == "#" || $array[$i][$j - 1] == "#") {
                $col_judge = true;
            }
        } else {
            if ($array[$i][$j + 1] == "#" && $array[$i][$j - 1] == "#") {
                $col_judge = true;
            }
        }
        /*---------------------------横判定修了--------------------------------*/

        if ($row_judge == true && $col_judge == true) {
            echo $i . " " . $j . "\n"; //座標の出力
        }
    }
}
