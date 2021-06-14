<?php

$array1 = explode(" ", trim(fgets(STDIN)));
 
    $numOfTaxi = $array1[0];
 
    $distance = $array1[1];

    
    $charge = [];
    
    for($i = 0; $i<$numOfTaxi; $i++){
        $array2 = explode(" ", trim(fgets(STDIN)));
        $defaultDistance = $array2[0];
        $defaultCharge = $array2[1];
        $additionDistance = $array2[2];
        $additionCharge = $array2[3];
        $ResultDistance = 0;
        $chargeResult = 0;
        
        while($ResultDistance <= $distance) {
          if($ResultDistance === 0){
            $ResultDistance += $defaultDistance;  
            $chargeResult += $defaultCharge;
          }
          if($ResultDistance <= $distance){
             $chargeResult += $additionCharge;
             $ResultDistance += $additionDistance; 
          }
   
        }
        $charge[] += $chargeResult;
        
    }
 
    $max = max($charge);
    $min = min($charge);
 
    echo "$min $max";
