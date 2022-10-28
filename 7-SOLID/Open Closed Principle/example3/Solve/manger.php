<?php

class manger extends employee {
    public const BONUS=1000;
    public function CalculateSalaryPerHour($hours = 176)
    {
        return( $this->basicSalary + self::BONUS / $hours); //
    }
}