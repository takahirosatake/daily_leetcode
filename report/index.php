<?php
[$students, $questions] = explode(" ", trim(fgets(STDIN)));
    
$Allocation = 100 / $questions;
$evaluation = 0;

for($i=0; $i<$students; $i++){
    [$Days,$response] = explode(" ", trim(fgets(STDIN)));
    
    if($Days <= 0) {
        $evaluation = $response * $Allocation;
    } elseif ($Days <= 9) {
        $evaluation = floor($response * $Allocation * 0.8);
    } elseif($Days >= 10) {
        $evaluation = 0;
    }
    
    if(80<=$evaluation && $evaluation<=100){
        echo "A\n";
    } elseif(70<=$evaluation && $evaluation<=79){
        echo "B\n";
    } elseif(60 <= $evaluation && $evaluation<=69){
        echo "C\n";
    } elseif(0<=$evaluation && $evaluation<=59){
        echo "D\n";
    }
    
    
}
