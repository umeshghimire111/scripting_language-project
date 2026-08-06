<?php
// 11. Check prime or composite
$num = 7;
$is_prime = true;
if ($num <= 1) {
    $is_prime = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $is_prime = false;
            break;
        }
    }
}
if ($is_prime) {
    echo "$num is a prime number.";
} else {
    echo "$num is a composite number.";
}
?>
