<?php
// 8. Smallest among 3 numbers
$num1 = 10;
$num2 = 20;
$num3 = 5;
if ($num1 <= $num2 && $num1 <= $num3) {
    echo "$num1 is the smallest number.";
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    echo "$num2 is the smallest number.";
} else {
    echo "$num3 is the smallest number.";
}
?>
