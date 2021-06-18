<?php
    [$N, $a, $b] = explode(" ", trim(fgets(STDIN))); 
    
    $profit = 0;
    $kabu = 0;

    for($i = 0; $i < $N; $i++ ){
        $day[] = trim(fgets(STDIN)); 
         if ($i === $N-1) {
            $profit =  ($kabu * $day[$i]) + $profit;
            $kabu = 0;
            break;
        }
        
        if( $day[$i] <= $a ){
            $profit += -$day[$i];
            $kabu += 1;
            
        }
        if( $day[$i] >= $b ){
            $profit = ($kabu * $day[$i]) + $profit;
            $kabu = 0;
        }
       
    }
    
    echo $profit;
