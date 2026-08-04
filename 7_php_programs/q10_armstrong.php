<?php
// 10. Check Armstrong number or not
$num = 153;
$original_num = $num;
$sum = 0;
$digits = 0;
while ($num > 0) {
    $digits++;
    $num = (int)($num / 10);
}
$num = $original_num;
while ($num > 0) {
    $remainder = $num % 10;
    $sum = $sum + pow($remainder, $digits);
    $num = (int)($num / 10);
}
if ($original_num == $sum) {
    echo "$original_num is an Armstrong number.";
} else {
    echo "$original_num is not an Armstrong number.";
}
?>
