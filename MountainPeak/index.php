<?php

    $input_line = trim(fgets(STDIN));
    
    
    $map = [];
    for($i=0; $i<$input_line; $i++ ){
        $map[] = explode(" ",trim(fgets(STDIN)));
    }

    $countVertical = count($map);
    $countSide = count($map[0]);
    
    $nums=[];
    
    for($i = 0; $i< $countVertical; $i++){
      for ($j = 0; $j < $countSide; $j++) {
        if($map[$i][$j]>$map[$i][$j+1] && 
           $map[$i][$j]>$map[$i][$j-1] && 
           $map[$i][$j]>$map[$j+1][$i] &&
           $map[$i][$j]>$map[$j-1][$i]){
           $nums[]= (int)$map[$i][$j];
        }    
      } 
    }
    
    rsort($nums);
    foreach($nums as $num ){
        print"$num\n";
    }
