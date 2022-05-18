<?php


function restaurant_check($meal,$tax,$tip){
    $amount_tax = $meal * ($tax / 100);
    $amount_tip = $meal * ($tip / 100);
    $total = $meal + $amount_tax + $amount_tip;
};  

if(restaurant_check(20,50,21) < 20 ){
    print 'Less than $20, I can pay cash';
}else{
    print 'Too many expensive, I can pay credit';
}