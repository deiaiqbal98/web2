<?php
function repeat($text, $num = 5)
{
    echo "<ol>\r\n";
    for ($i = 0; $i < $num; $i++) {
        echo "<li>$text </li>\r\n";
    }
    echo "</ol>";
}
// calling repeat with two arguments
repeat("I'm the best");
// calling repeat with just one argument
repeat("You're the man", 10);
