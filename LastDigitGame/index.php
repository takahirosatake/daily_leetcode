<?php
    [$bob, $alice] = explode(" ", trim(fgets(STDIN)));
    
    $bobArray = str_split($bob);
    $aliceArray = str_split($alice);
    
    $bobtotal = $bobArray[0] + $bobArray[1];
    $alicetotal = $aliceArray[0] + $aliceArray[1];
    
    if(substr( $bobtotal , -1) === substr( $alicetotal , -1) ) {
        echo "Draw";
    } elseif (substr( $bobtotal , -1) > substr( $alicetotal , -1) ) {
        echo "Bob";
    } elseif(substr( $bobtotal , -1) < substr( $alicetotal , -1) ) {
        echo "Alice";
    }
