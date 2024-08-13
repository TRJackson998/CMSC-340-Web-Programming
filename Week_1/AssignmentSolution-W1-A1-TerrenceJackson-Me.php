<?php
/*
Develop a PHP Script to Print out Information about You & about Earth Volume
============================================================================
Terrence Jackson
CMSC 430
Last Edited: Aug 9 2024
Due: Aug 27 2024
*/

echo "My name is Terrence Jackson.<br>";
echo "My city is Sacramento in the state of California.<br>";
echo "The current temperature (F) is 95.<br>";
date_default_timezone_set("America/Los_Angeles");
echo "Current date is " . date("m-d-Y") . ".<br>";
echo "Earth volume is " . (4 / 3) * 3.14 * (3959 ** 3) . " cubic miles.<br>";
