<?php

if (!function_exists('decimalToFraction')) {
    function decimalToFraction($decimal) {
        if ($decimal == floor($decimal)) {
            return (string) $decimal; // Return as is if it's a whole number
        }

        $tolerance = 1.e-6;
        $h1 = 1; $h2 = 0;
        $k1 = 0; $k2 = 1;
        $b = $decimal;
        
        do {
            $a = floor($b);
            $temp = $h1;
            $h1 = $a * $h1 + $h2;
            $h2 = $temp;
            $temp = $k1;
            $k1 = $a * $k1 + $k2;
            $k2 = $temp;

            // Prevent division by zero
            if ($b - $a == 0) {
                break;
            }

            $b = 1 / ($b - $a);
        } while (abs($decimal - ($h1 / $k1)) > $decimal * $tolerance);

        return "$h1/$k1";
    }
}
