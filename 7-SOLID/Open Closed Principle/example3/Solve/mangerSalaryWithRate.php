<?php 

class mangerSalaryWithRate extends manger {
    public $rate;
    public function CalculateSalaryPerHour($hours = 176)
    {
        return( $this->basicSalary + self::BONUS / $hours) * $this->rate; //
    }
}