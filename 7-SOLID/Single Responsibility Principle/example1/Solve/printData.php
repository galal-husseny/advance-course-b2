<?php

class printData {
    public function printSalesInvoice()
    {
        return "
            Invoice Number : $this->id <br>
            Price : $this->price <br>
            Quantity : $this->quantity <br>
            tax : $this->tax <br>
            discount : $this->discount <br>
            total : $this->total <br>
        ";
    }

    public function printPurchaseInvoice()
    {
        return "
            Invoice Number : $this->id <br>
            Price : $this->price <br>
            Quantity : $this->quantity <br>
            tax : $this->tax <br>
            discount : $this->discount <br>
            total : $this->total <br>
        ";
    }
} 




