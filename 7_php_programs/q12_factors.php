<?php
// 12. To find the factors of a number
$num = 24;
echo "The factors of $num are: ";
for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        echo "$i ";
    }
}
?>
