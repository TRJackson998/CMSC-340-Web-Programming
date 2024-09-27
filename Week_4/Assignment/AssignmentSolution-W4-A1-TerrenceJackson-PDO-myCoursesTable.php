<?php
/*
AssignmentSolution-W4-A1-TerrenceJackson-PDO-myCoursesTable.php
===============================================================
Specification 1)
Create a MySQL database called cmsc340 and create a table called mycourses inside the cmsc340 database.

The mycourses table stores UMGC courses that you have taken over the last three (3) terms.
The fields of the mycourses and their data types are:
  Course code VARCHAR(10)
  Course title VARCHAR(128)
  Course credit hours int

Specification 2)
Using PHP PDO, connect to the cmsc340 database by creating a PDO with appropriate connection attributes.

Specification 3)
The PHP script is to display an HTML form with three fields corresponding to the three
fields of the mycourses table. Additionally, the form should have an HTML add button that
the user can click on, after entering values in the fields of the HTML form, to add a record
to the mycourses table using the form’s data. No user data entry validation or error messaging
is required. Assume that the user enters valid values in all fields.

Specification 4)
In addition to displaying the HTML form and its add button, the PHP script should also
display a listing of all records in the mycourses table currently exist along with the
total number of credit hours of all courses in the able.

Specification 5)
When the user enters values in the fields of the HTML form and clicks the add button, the following events should occur:
  - The entered values are used to add a new record to the mycourses table.
    There are no requirements to check for duplicate records as the number of courses
    taken over the last three terms at UMGC is usually small.
  - All the records of the mycourses table, including the record just added, are retrieved and displayed in the browser.
  - The total credit hours of all the retrieved mycourses records is displayed as in:
  - The total credit hour of my UMGC courses over the last 3 terms = <total credit hours of your
    UMGC courses you took over the last three (3) terms>

Terrence Jackson
Week 4 Assignment
CMSC 340
Last Edited: Sept 7 2024
*/
require_once 'login.php';

try {
  $pdo = new PDO($attr, $user, $pass, $opts);
} catch (PDOException $e) {
  throw new PDOException($e->getMessage(), (int) $e->getCode());
}

if (
  isset($_POST['credit_hours']) &&
  isset($_POST['title']) &&
  isset($_POST['code'])
) {
  $credit_hours = get_post($pdo, 'credit_hours');
  $title = get_post($pdo, 'title');
  $code = get_post($pdo, 'code');

  $query = "INSERT INTO mycourses VALUES" .
    "($code, $title, $credit_hours)";
  $result = $pdo->query($query);
}

echo <<<_END
  <form action="AssignmentSolution-W4-A1-TerrenceJackson-PDO-myCoursesTable.php" method="post"><pre>
    Code <input type="text" name="code">
    Title <input type="text" name="title">
    Credit Hours <input type="text" name="credit_hours">
          <input type="submit" value="ADD this Course Record">
  </pre></form>
_END;

$query = "SELECT * FROM mycourses";
$result = $pdo->query($query);

while ($row = $result->fetch(PDO::FETCH_OBJ)) {
  $r0 = htmlspecialchars($row->code);
  $r1 = htmlspecialchars($row->title);
  $r2 = htmlspecialchars($row->credit_hours);

  echo <<<_END
  <pre>
    Code: $r0
    Title: $r1
    Credit Hours: $r2
  </pre>
_END;
}

$query = "SELECT SUM(credit_hours) as 'total' FROM mycourses";
$result = $pdo->query($query);
$result = $result->fetch();
$total = $result["total"];

echo "Total credit hours of my UMGC courses over the last three (3) terms = $total";

function get_post($pdo, $var)
{
  return $pdo->quote($_POST[$var]);
}
