<?php
[$x,$y] = explode(" ",trim(fgets(STDIN)));
    
for($i=0;$i<$x; $i++){
        $math[$i]= str_split(trim(fgets(STDIN)));
}

// print_r($math);

 for($i=0;$i<$x; $i++){
        $scores[$i]= explode(" ", trim(fgets(STDIN)));
}

// print_r($scores);

$total= 0;
for($i=0;$i<$x; $i++){
      for($j=0;$j<$y; $j++){
         if($math[$i][$j] === "o"){
             $total += $scores[$i][$j];
         }
     }       
}



// $count = 1;

//  for($i=0;$i<$x; $i++){
//     foreach($math[$i] as $ma){
//         if($count < $z ){
//           if($ma === "o")
//             $total += $count;
//             $count++;
//         }
        
//     }       
//  }


echo $total;
