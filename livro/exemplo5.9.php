<?php

function coutdown($top){

    while($top > 0){
        print "$top";
        $top --;
    }
    print 'Bomm';
}

$counter = 5;
coutdown($counter);