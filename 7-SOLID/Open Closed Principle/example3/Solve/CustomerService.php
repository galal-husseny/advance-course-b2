<?php

class CustomerService extends employee {
    public function CalculateSalaryPerHour($hours = 176)
    {
        return $this->basicSalary / $hours;
    }
}