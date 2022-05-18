<?php

$dinner = "Dinner Cuttlephish";

function vegetarian_diiner(){
    $dinner = "Sauteed Pea Shoots ";
    print "Dinner is $dinner or ";
    print $dinner;
    print "<br>";
}

function Kosher_dinner(){
    $dinner = "Kung Pao Chicken";
    print "Dinner is $dinner or ";
    print $dinner;
    print "<br>";
}

print "Vegetarian";
vegetarian_diiner();
print "Kosher";
Kosher_dinner();

print "Regular dinner is $dinner";