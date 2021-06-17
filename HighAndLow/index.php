<?php

    $array1 = explode(" ", trim(fgets(STDIN)));
    $input = trim(fgets(STDIN));
    
    for($i =0; $i < $input; $i++){
        [$a, $b] = explode(" ", trim(fgets(STDIN))); 
        //変数で分けて代入することができる
        if($a < $array1[0]){
            print "High\n";
        }
        elseif ($a > $array1[0]){
            print "Low\n";
        }
        elseif ($a === $array1[0] && $b > $array1[1] ){
            print "High\n";
        } 
        elseif($a === $array1[0] && $b < $array1[1] ){
            print "Low\n";
        }
    }
