<?php
[$legs, $heads, $c, $d] =  explode(" ", trim(fgets(STDIN)));
//    32 10   2   4
//   2  2    1   1
// 12 4 3 3 
$low = 0;
$high = $heads;



while ($low <= $high) {

    $mid = ($low + $high) / 2;
    if ($heads > $legs) {
        echo "miss";
        break;
    } elseif ($mid * $c + ($heads - $mid) * $d == $legs) {
        echo $mid . " " . ($heads - $mid);
        break;
    }


    if ($mid * $c + ($heads - $mid) * $d < $legs) {
        $high = $mid + 1;
    } else {
        $low = $mid - 1;
    }
}
