<?php
[$x,$y,$N] = explode(" ",trim(fgets(STDIN))); //初期値x,y 移動回数
    
    $direction = 0;//方角　 北０ 西１ 南２ 東３ 
    
    for($i=0; $i<$N; $i++){
        $move = trim(fgets(STDIN));
        
        if($direction == 0){
            if($move == "L"){
                $x--;
                $direction = 1;
                echo $x." ".$y."\n";
            } elseif($move == "R") {
                $x++;
                $direction = 3;
                echo $x." ".$y."\n";
            }
        } elseif($direction == 1){
            if($move == "L"){
                $y++;
                $direction = 2;
                echo $x." ".$y."\n";
            } elseif($move == "R") {
                $y--;
                $direction = 0;
                echo $x." ".$y."\n";
            }
        } elseif($direction == 2){
            if($move == "L"){
                $x++;
                $direction = 3;
                echo $x." ".$y."\n";
            } elseif($move == "R") {
                $x--;
                $direction = 1;
                echo $x." ".$y."\n";
            }
        } elseif($direction == 3){
            if($move == "L"){
                $y--;
                $direction = 0;
                echo $x." ".$y."\n";
            } elseif($move == "R") {
                $y++;
                $direction = 2;
                echo $x." ".$y."\n";
            }
            
        }
                
    }
        
?>
