<?php

class Person
{

    // Properties
    public $firstName = '';
    public $lastName = '';
    public $dob = null;

    // Constructor
    public function __construct($firstName, $lastName, $dob)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dob = new DateTime($dob);
    }

    public function getAge()
    {
        $currentDate = new DateTime('now');
        $dobPerson = $this->dob;

        // Calculate the age by finding the difference in years
        $age = $dobPerson->diff($currentDate)->y;

        return $age;
    }
}

$testPerson = new Person('Gustavo', 'Roland', '2002-08-28');

$result = $testPerson->getAge();
echo "Age: {$result}";



