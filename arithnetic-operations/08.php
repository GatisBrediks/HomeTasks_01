<?php

//Foo Corporation needs a program to calculate how much to pay their hourly employees.
// The US Department of Labor requires that employees get paid time and a half for any hours over 40
// that they work in a single week. For example, if an employee works 45 hours, they get 5 hours of overtime,
// at 1.5 times their base pay. The State of Massachusetts requires // that hourly employees be paid at least $8.00 an hour.
// Foo Corp requires that an employee not work more than 60 hours in a week.
//
//Summary
//An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
//For every hour over 40, they get overtime = (base pay) × 1.5.
//The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
//If the number of hours is greater than 60, print an error message.
//Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
// Write a main method that calls this method for each of these employees:
//
//Employee	Base Pay	Hours Worked
//Employee 1	$7.50	35
//Employee 2	$8.20	47
//Employee 3	$10.00	73

function getTotalPay(float $basePay, int $hoursWorked, int $usualWeeklyWorkingHours = 40): float
{
    if ($hoursWorked > $usualWeeklyWorkingHours) {
        return $basePay * $hoursWorked + 1.5 * $basePay * ($hoursWorked - $usualWeeklyWorkingHours);
    } else {
        return $basePay * $hoursWorked;
    }
}

function createEmployee(string $description, float $basePay, int $hoursWorked): stdClass
{
    $employee = new stdClass();
    $employee->description = $description;
    $employee->basePay = $basePay;
    $employee->hoursWorked = $hoursWorked;
    return $employee;
}

$employees = [
    createEmployee("Employee 1", 7.5, 35),
    createEmployee("Employee 2", 8.2, 47),
    createEmployee("Employee 3", 10, 70)
];

$minimumPayPerHour = 8;
$maximumWorkedHours = 60;

foreach ($employees as $employee) {
    if ($employee->basePay < $minimumPayPerHour) {
        echo "{$employee->description} ERROR! Minimum pay per hour must be at least $8.00!" . PHP_EOL;
    } elseif ($employee->hoursWorked > $maximumWorkedHours) {
        echo "{$employee->description} ERROR: Maximum work hours is 60!" . PHP_EOL;
    } else {
        echo "{$employee->description} gets $" . getTotalPay($employee->basePay,
                $employee->hoursWorked) . PHP_EOL;
    }
}









