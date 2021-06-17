<?php

[$a, $b, $c] = explode( " ", fgets( STDIN ) );
$trainNum = fgets( STDIN );
for($i = 0; $i < $trainNum; $i++){
    $timeTable[$i] = explode( " ", fgets( STDIN ) );
}
$oclock = 0;

for($i = 0; $i < $trainNum; $i++){
    $departure = $timeTable[$i][0] * 60 + $timeTable[$i][1];
    $minute = $departure;
    $minute += $b;
    $minute += $c;
    if( $minute < 540){
        $oclock = $departure - $a;
    } else {
        break;
    }
}

printf( "%02d:%02d\n", floor( $oclock/ 60 ), $oclock % 60 );
