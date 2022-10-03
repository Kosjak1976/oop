<?php
class Employee
{
    public $name;
    public $age;
    public $salary;
}

$employee1 = new Employee();
$employee1->name = 'John';
$employee1->age = 25;
$employee1->salary = '1000';
$employee2 = new Employee();
$employee2->name = 'Erik';
$employee2->age = 26;
$employee2->salary = '2000';

print  "Both employees salary: " . $employee1->salary + $employee2->salary . "<br />";
print  "Both employees age: " . $employee1->age + $employee2->age;