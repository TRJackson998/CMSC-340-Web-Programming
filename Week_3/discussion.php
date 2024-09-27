<?php
/*
Store and Retrieve Two Course-related Values per Slot in a PHP Associative Array and a PHP Array of Objects
===========================================================================================================
Create a PHP associative array whose key is the course code and whose corresponding value is the course credit hours.
Iterate over the elements of the associative array and print the key-value pair of each element in this form:
    course Code => course credit hours
Tally up the total credit hours of all elements of the array and print them out in this form:
    Total credit hours over the last 3 terms = <tally of credit hours>

Create a PHP class called Course that has two attributes: 1) course code and 2) course credit hours.
Create a PHP regular array of Course objects.
    Hint: To create an array of objects from a class called Class, use this pattern:
    arrayOfClassObjects = array (new Class(), new Class(), . . .);
Iterate over the elements of the array of Course objects and print the contents of each element in this form:
    course Code, course credit hours
Tally up the total credit hours of all elements of the array and print them out in this form:
    Total credit hours over the last 3 terms = <tally of credit hours>

Terrence Jackson
Week 3 Discussion
CMSC 340
Last Edited: Aug 29 2024
*/

// class of course objects
class Course
{
    public $code;
    public $credit;

    // constructor
    public function __construct($code, $credit)
    {
        $this->code = $code;
        $this->credit = $credit;
    }
}

// associative array of course codes corresponding to credits
$assoc_array = [
    "CMSC 335" => 3,
    "SDEV 300" => 3,
    "WRTG 393" => 3,
    "CMSC 307" => 3,
    "CMSC 340" => 3,
    "CMSC 430" => 3,
    "CMSC 451" => 3
];

// init total credits
$total_credit = 0;

// iterate over associative array
echo "Associative arrays:<br>";
foreach ($assoc_array as $code => $credit) {
    echo "$code => $credit<br>"; // print this course
    $total_credit += $credit; // update credit total
    $objectArray[] = new Course($code, $credit); // add this course to object array
}
printf("Total credit hours over last 3 terms = %d<br><br>", $total_credit);

// reset total credits
$total_credit = 0;

// iterate over object array
echo "Array of objects:<br>";
foreach ($objectArray as $course) {
    echo "$course->code, $course->credit<br>"; // print this course
    $total_credit += $course->credit; // update total
}
printf("Total credit hours over last 3 terms = %d<br>", $total_credit);
