<?php

class mail {
    public function sendMailWithInvoice()
    {
       if(mail('galal.husseny@gmail.com','New Order','150 EGP')){
            return true;
       }else{
           return false;
       }
    }
}