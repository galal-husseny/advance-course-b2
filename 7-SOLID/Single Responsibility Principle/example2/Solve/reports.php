<?php 
class reports {
     // print , get report
     public function getWalletReports()
     {
         return "Balance : $this->balance in this month";
     }
     // print , get Transation
     public function getOldWalletTransactions()
     {
        return "Balance : $this->balance in last month";
     }
}


$report = new reports;
$oldReport = $report->getOldWalletTransactions();