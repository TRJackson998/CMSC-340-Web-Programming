<?php // test1.php
$username = "Fred Smith";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
echo "<br>";


$count = 17;
echo $count . "<br>"; // string concatenation

$team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
echo "$team[3] <br>"; // string interpolation


$oxo = array(
    array('x', ' ', 'o'),
    array('o', 'o', 'x'),
    array('x', 'o', ' ')
);
echo $oxo[1][2];
echo "<br>";

echo 6 + 2;
echo "<br>";

echo 6 ** 2;
echo "<br>";

echo 'Preface variables with a $ like this: $variable <br>'; // literal
echo "This week $count people have viewed your profile <br>"; // variable

//alternate multiline echo
$author = "Brian W. Kernighan";

echo <<<_END
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.

- $author<br>
_END;

echo "This is line " . __LINE__ . " of file " . __FILE__;