<?php
class Employee {
    private $name;
    private $position;
    private $salary;
    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->setSalary($salary);
    }
    public function getName() {
        return $this->name;
    }
    public function getPosition() {
        return $this->position;
    }
    public function getSalary() {
        return $this->salary;
    }
    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary must be a positive number.");
        }
    }
    public function displayEmployeeInfo() {
        echo "Employee: " . $this->getName() . "\n";
        echo "Position: " . $this->getPosition() . "\n";
        echo "Salary: " . number_format($this->getSalary(), 2) . "Tk\n";
    }
}

try {
    $employee = new Employee("Mizanur Rahman", "Software Engineer", 50000);
    // Display employee information
    $employee->displayEmployeeInfo();
    // Updating salary with valid value
    $employee->setSalary(60000);
    echo "\nAfter salary update:\n";
    $employee->displayEmployeeInfo();
    // $employee->setSalary(-1000);  // This will throw an exception (uncomment to see)
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

