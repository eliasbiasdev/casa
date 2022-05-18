<?php

function complete_bill($meal,$tax,$tip,$cash_on_hand){
    $amount_tax = $meal * ($tax / 100 );
    $amount_tip = $meal * ($tip / 100 );
    $total_amount = $meal + $amount_tax + $amount_tip;

        // a conta é maior que a quantia que temos?
    if($total_amount > $cash_on_hand){
        return false;
    }else{
        //Podemos pagar a conta
        return $total_amount;
    }

}

if($total = complete_bill(18.22,8.25,15,20)){
    print "I happy to pay $total .";
}else{
    print "I dont have enough money. Shall wash some dishes?";
}