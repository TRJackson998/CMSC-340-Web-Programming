<?php
/*
Create and Manipulate a PHP Array of Course Objects
===========================================================================
Write a PHP script that implements the following five (5) specifications.
Name your script “AssignmentSolution-W3-A1-<Your first name><Your last name>- ArraysOfCourseObjects.php”
(e.g., “AssignmentSolution-W3-A1-JaneDoe- ArraysOfCourseObjects.php”).

The five specifications are:

Specification 1)
    Define a Course class with 3 private attributes and one public method.

    The private attributes are:
    Course code
    Course title
    Course credit hours

    The public method is
    printCourse()
    The printCouse, when invoked on a Course object, prints out the values of the three attributes of the object.

Specification 2)
    Create an array of Course objects. The course objects should represent courses you have taken over the last three (3) terms at UMGC.

    Hint: To create an array of Course objects, use:
    arrayOfCourseObjects = array (new Course(), new Course(), . . .);

Specification 3)
    Using the array of course objects, print out the number of courses you have taken at UMGC over the last three (3) terms as in:
    The number of UMGC courses I took over the last 3 terms = <number of courses you took over the last three (3) terms>

Specification 4)
    For all objects in the array of course objects, print out the values of all three attribute of each Course object as in:
    Course <course number> Information:
    Code = <course code>
    Title = <course title>
    Credit Hours = <course credit hours>

Specification 5)
    Using the array of course objects, determine if you have taken the CMSC 115 over the last three (3) terms at UMGC and report the result of your determination as in:
    Yes, I have taken the CMSC 115 course.
    or
    No, I have not taken the CMSC 115 course.

Terrence Jackson
Week 3 Assignment
CMSC 430
Last Edited: Aug 31 2024
*/

// class of course objects
class Course
{
    private $code;
    private $title;
    private $creditHours;

    // constructor
    public function __construct($code, $title, $credit_hours)
    {
        $this->code = $code;
        $this->title = $title;
        $this->creditHours = $credit_hours;
    }

    public function printCourse()
    {
        echo "Code = $this->code<br>
              Title = $this->title<br>
              Credit Hours = $this->creditHours<br><br>";
    }

    public function getCode()
    {
        return $this->code;
    }
}

// array of Course objects
$objectArray = [
    new Course("CMSC 335", "Object-Oriented Concurrent Programming", 3),
    new Course("SDEV 300", "Building Secure Python Applications", 3),
    new Course("WRTG 393", "Advanced Technical Writing", 3),
    new Course("CMSC 307", "Artificial Intelligence Applications", 3),
    new Course("CMSC 340", "Web Programming", 3),
    new Course("CMSC 430", "Compiler Theory and Design", 3),
    new Course("CMSC 451", "Design Computer Algorithms", 3),
];

// calc and display number of courses
$numCourses = count($objectArray);
echo "The number of UMGC courses I took over the last 3 terms = $numCourses<br><br>
    These courses are:<br>";

// init variables for loop
$taken115 = false;
$i = 1;

// iterate over array
foreach ($objectArray as $course) {
    // print/update course number
    echo "Course $i information:<br>";
    $i += 1;

    // print this course
    $course->printCourse();

    // check if this course is CMSC 115
    if ($course->getCode() == "CMSC 115") {
        $taken115 = true;
    }
}

// print if I have taken CMSC 115
echo $taken115 ? "Yes, I have" : "No, I have not";
echo " taken the CMSC 115 course.<br>";
