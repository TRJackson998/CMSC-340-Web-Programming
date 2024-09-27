<?php
/*
Define a PHP User Class, Instantiate Two User Objects, and Print Them Out
=========================================================================
Define a class called User. The User class has these private properties:
    Name
    city
    state
    temperature
    todayDate   // current date e.g., Sunday June 4th 2023

All of these properties should be declared private in the User class.
The User class should also define a public method called printUser() to print out the values assignment to the private properties of a User object.
Instantiate two objects from the User class called user1 and user2 and assign values to the properties of each user.
Invoke the printUser() method on both user1 and user2 objects to print out the values assigned to their corresponding properties.

Terrence Jackson
CMSC 340
Last Edited: Aug 13 2024
*/
class User
{
    private $name;
    private $city;
    private $state;
    private $temperature;
    private $todayDate;

    public function __construct($name, $city, $state, $temperature)
    {
        $this->name = $name;
        $this->city = $city;
        $this->state = $state;
        $this->temperature = $temperature;

        date_default_timezone_set("America/Los_Angeles");
        $todayDate = date("m-d-Y");
        $this->todayDate = $todayDate;
    }

    public function printUser()
    {
        echo "name = $this->name<br>";
        echo "city = $this->city<br>";
        echo "state = $this->state<br>";
        echo "temperature = $this->temperature<br>";
        echo "todayDate = $this->todayDate<br>";
    }
}

$user1 = new User("Jane Doe II", "San Francisco", "California", "81");
echo "First user information:<br>";
$user1->printUser();

echo "<br>";

$user2 = new User("John Doe", "Washington, D.C.", "Washington, D.C.", "71");
echo "Second user information:<br>";
$user2->printUser();
