<?php

function restaurant_check($meal,$tax,$tip){
    $amount_tax = $meal * ($tax / 100);
    $amount_tip = $meal * ($tip / 100);

    $total_tip = $meal + $amount_tax + $amount_tip;
    $total_notip = $meal + $amount_tax;

    return array($total_tip,$total_notip);
}

function method_payment($cash_on_hand,$amount){
    if($amount > $cash_on_hand){
        return 'credit';
    }else{
        return 'cash';
    }
}

/*$totals = restaurant_check(11,15.22,12);

if($totals[0] < 20 ){
    print 'The total with tip' . $totals[0];
}
if($totals[1] < 20){
    print 'The total whithout tip' . $totals[1];
}
*/
$total = restaurant_check(11,15.5,12);
$metodo_pagamento = method_payment(20,$total);
print 'Metodo de pagamento ' . $metodo_pagamento;