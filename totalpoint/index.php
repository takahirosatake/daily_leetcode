<?php 
$n = trim(fgets(STDIN));
    
$totalpoint = 0;
for($i=0; $i<$n; $i++){
   [$day, $price] = explode(" ", trim(fgets(STDIN)));
   
   if(strpos($day,'3') !== false){
     $totalpoint += floor($price * 0.03);
   } elseif (strpos($day,'5') !== false) {
     $totalpoint += floor($price * 0.05);
   } else {
     $totalpoint += floor($price * 0.01);
   }
   
}

echo $totalpoint;
