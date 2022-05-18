<?php

print 'Restaurante check';

function restaurante_check($meal,$tax,$tip){
    $amount_tax = $meal * ($tax / 100);
    $amount_tip = $meal * ( $tip / 100);
    $total = $meal + $amount_tax + $amount_tip;

    return $total;  
    
}

$total_amount = restaurante_check(15.22,133.25,0);

if($total_amount < 20){
    print 'I payment cash';
}else {
    print 'I payment credit card';
}