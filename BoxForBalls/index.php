<?php
  
    [$n, $r] = explode(" ", trim(fgets(STDIN)));
    

    for($i = 0; $i < $n; $i++ ){
     [$h,$w ,$d]    = explode(" ", trim(fgets(STDIN)));
        
        if($r*2 <= $h && $r*2 <= $w && $r*2 <= $d ) {
           $inBox[$i] = $i+1;   
           print "$inBox[$i]\n";
        }
    }
