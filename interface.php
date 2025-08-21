<?php
interface Payment{
    public function pay($amount);
}

class Bkash implements Payment {
    public function pay($amount){
        return "paying $amount using Bkash";
    }
}

$bkash = new Bkash();
echo $bkash->pay(1000);