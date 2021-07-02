<?php
$input = trim(fgets(STDIN));
    
$point = 0;

for($i=0;$i<$input; $i++){
  [$product, $price] =  explode(" ", trim(fgets(STDIN)));
  
  if($product == 0){
    
    $total[0] += $price;
  } elseif ($product == 1) {
      $total[1] += $price;
  } elseif ($product == 2) {
      $total[2] += $price;
  } elseif ($product == 3) {
      $total[3] += $price;
  }
}

// print_r($total);


foreach($total as $key => $totalprice){
    if($key == 0){
      $point += floor($totalprice / 100) * 5;
  } elseif ($key == 1) {
      $point += floor($totalprice / 100) * 3;
  } elseif ($key == 2) {
      $point += floor($totalprice / 100) * 2;
  } elseif ($key == 3) {
      $point += floor($totalprice / 100) * 1;
  }
}

echo $point;
