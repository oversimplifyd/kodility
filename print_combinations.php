<?php
function print_combinations($input) {
    $inputLength = sizeof($input);
    for ($i = 0; $i < $inputLength; $i++) {
        for ($j = $i + 1; $j < $inputLength; $j++) {
            traverse($input[$i], array_slice($input, $j));
        }
    }
}

function traverse($parent, $input) {
    $inputLength = sizeof($input);
    for ($i = 1; $i < $inputLength; $i++) {
        if (($parent + $input[0] + $input[$i]) == 100) {
            echo $parent.'+'.$input[0].'+'.$input[$i].PHP_EOL;
        }
    }
}

// Test Case 
print_combinations([1, 2, 4, 5, 70, 14, 12, 29, 30, 40, 3, 1, 9, 10, 8, 12, 41, 59, 16, 45, 25, 40]);
?>

