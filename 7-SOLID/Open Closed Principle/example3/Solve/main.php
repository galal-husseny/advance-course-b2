<?php 

class main {
    public function calculate(object $employee)
    {
        return $employee->CalculateSalaryPerHour();
    }
}

$customerService = new CustomerService;
$customerService->id = 1;
$customerService->name = 'galal';
$customerService->basicSalary = 1000;

$manger = new Manger;
$manger->id = 1;
$manger->name = 'galal';
$manger->basicSalary = 1000;

$main = new main;
echo $main->calculate($customerService);
echo $main->calculate($manger);