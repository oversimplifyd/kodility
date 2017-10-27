<?php 

    function wordMachine($string) {
    $stringArray = explode(" ", $string);
    $stack = [];

    for ($i = 0; $i < count($stringArray); $i++) {

        if (is_numeric($stringArray[$i])) {
            array_push($stack, $stringArray[$i]);
        }

        if ($stringArray[$i] == "DUP") {
            array_push($stack, $stack[count($stack) - 1]);
        }

        if ($stringArray[$i] == "POP") {
            array_pop($stack);
        }

        if ($stringArray[$i] == "+") {
	    $newValue = array_pop($stack) + array_pop($stack);		
            array_push($stack, $newValue);
        }

        if ($stringArray[$i] == "-") {
            if ($newValue = (array_pop($stack) - array_pop($stack))) {
                array_push($stack, $newValue);
            } else {
                return -1;
            }
        }
    }
    return array_pop($stack);
}


echo wordMachine("5 5 DUP POP + -"); //returns 10 

