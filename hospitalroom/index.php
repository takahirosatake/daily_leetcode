<?php
$n = trim(fgets(STDIN));
$m = trim(fgets(STDIN));


for($i=0;$i<$m; $i++){
    $needle = trim(fgets(STDIN));
    if(!preg_match('{'.$n.'}',$needle)){
        $Rooms[$i] = $needle;
    }
}

if($Rooms){
    foreach($Rooms as $room){
        echo $room."\n";
    }
}else{
    echo 'none';
}
