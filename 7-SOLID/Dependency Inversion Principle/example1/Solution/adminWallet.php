<?php
// low level module
class adminWallet implements Wallet {
    public $balance;
    public $admin_id;

    public function __construct($admin_id)
    {
        $this->admin_id = $admin_id;
    }

    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set the value of balance
     *
     * @return  self
     */ 
    public function setBalance($balance)
    {
        $this->balance = $balance;

        return $this;
    }
}