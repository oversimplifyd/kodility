<?php

function minContiguousGroup(array $A) {

    $group = 0;
    $count = count($A);
    $min = $count;

    for ($i = 0; $i < $count - 1; $i++) {
        if ($A[$i] > $A[$i+1]) {
            for($j = $i; $j < $count; $j++) {
                if ($A[$j] <= $A[$i]) {
                    $group++;
                    if ($j === $count - 1)
                        $min = $group;
                } else {
                    if ($group <= $min) {
                        $min = $group;
                    }
                    $group = 0;
                    $i = $j - 1;
                    break;
                }
            }
        }
    }

    return $min === $count ? 0 : $min;
}
