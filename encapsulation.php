<?php
class Account
{
    public $balance = 0;

    public function deposite($amount){
        $this->balance += $amount;
    }

    public function getbalance(){
        return $this->balance;
    }
}


$acc = new Account();
$acc->deposite(1000);
echo $acc->getbalance();
?>