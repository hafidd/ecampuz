<?php

echo "<b>LOOPING CONDITION (4_looping_condition.php)</b><br />";

for ($x = 1; $x <= 50; $x++) {
    if ($x % 3 === 0 && $x % 5 === 0) {
        echo "FooBar, ";
    } elseif ($x % 3 === 0) {
        echo "Foo, ";
    } elseif ($x % 5 === 0) {
        echo "Bar, ";
    } else {
        echo $x . ", ";
    }
}


