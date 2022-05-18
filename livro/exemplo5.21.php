<?php

$dinner = "Curry Cultefish";

function macrobiotic_dinner(){
    $dinner = "Some Vegetables";
    print "Dinner is $dinner ";
    //rende-se as maravilhas do oceado
    print "But I'd rather have ";
    print $GLOBALS['dinner'];
    print '<br>';
};

macrobiotic_dinner();
print "Regular dinner is $dinner ";