<?php

abstract class employee {
    public $id,$name,$basicSalary;
    public abstract function CalculateSalaryPerHour($hours);
}