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
