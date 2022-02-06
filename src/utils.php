<?php

namespace Brain\Games\utils;

function isEven($value)
{
    return $value % 2 === 0;
}

function gcd($a, $b)
{
    if ($b === 0) {
        return $a;
    }

    return gcd($b, $a % $b);
}

function isPrime($num)
{
    for ($i = 2, $s = sqrt($num); $i <= $s; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return $num > 1;
}
