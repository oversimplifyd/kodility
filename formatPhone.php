
<?php

function formatPhonenumber($st)
{

    //Format phone number in group of three, if the final one is 4 format in group of two or lesss
    $string = str_replace([' ', '-'],"", $st);
    $string = str_split($string);

    $stringLength = count($string);
    if ($stringLength <= 2) {
        return implode($string);
    }

    $phone = [];

    for ($i = 0; $i < $stringLength; $i++) {
        $digit = $string[$i];
        if (isset($string[$i+1])) {
            $digit .= $string[$i+1];
        }

        if (($stringLength - $i) > 4 || ($stringLength - $i) == 3){
            if (isset($string[$i+2])) {
                $digit .= $string[$i+2];
            }
            $i += 2;
        } else {
            $i += 1;
        }

        $phone[] = $digit;


    }
    return implode('-', $phone);
}

echo formatPhonenumber("1234567348883838");


