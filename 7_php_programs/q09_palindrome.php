<?php
// 9. Check palindrome number or not
$num = 121;
$original_num = $num;
$reverse = 0;
while ($num > 0) {
    $remainder = $num % 10;
    $reverse = ($reverse * 10) + $remainder;
    $num = (int)($num / 10);
}
if ($original_num == $reverse) {
    echo "$original_num is a palindrome number.";
} else {
    echo "$original_num is not a palindrome number.";
}
?>
