<?php
// high level module


include_once "userWallet.php";
class transcation {

    
    public function showTransaction(wallet $wallet)
    {
        // DIP =>
        // high level modules should not depend on low level modules
        // both should depend on abstraction .
        // abstraction should not depend on details (concrete classes)
        // details (concrete class) should depend on abstraction
        $balance = $wallet->getBalance();
        $history = $this->showHistory($wallet);
        return [$balance,$history];
    }

    public function showHistory(wallet $wallet)
    {
        return "user wallet history";
    }
}

