<?php

function restaurant_check($meal,$tax,$tip){
    $amount_tax = $meal * ($tax / 100);
    $amount_tip = $meal * ($tip / 100);
    $total = $meal + $amount_tax + $amount_tip;

    return $total;

}   


function can_pay_cash($cash_on_hand,$amount){
    if($amount > $cash_on_hand){
        return true;
    }else {
        return false;
    }
}

$total = restaurant_check(20,15.2,12);

if(can_pay_cash(20,$total)){
    print 'I can pay credit';
}else{
    print  'A can pay cash';
}