<?php
// 13. To find the factorial of a number
$num = 5;
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial = $factorial * $i;
}
echo "The factorial of $num is $factorial.";
?>
