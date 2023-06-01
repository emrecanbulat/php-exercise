<?php

function factorial($n)
{
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

function fibonacci($n)
{
    if ($n <= 1) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

function gcd($a, $b)
{
    while ($a != $b) {
        if ($a > $b) {
            $a -= $b;
        }
        if ($b > $a) {
            $b -= $a;
        }
    }
    return $a;
}

function gcdRecursive($a, $b)
{
    if ($b == 0) {
        return $a;
    }
    return gcdRecursive($b, $a % $b);
}

function isPalindrome($str)
{
    $string = str_split($str);
    $reverse = array_reverse($string);

    return $string === $reverse;
}

function power($n, $k)
{
    if ($k == 0) {
        return 1;
    } else if ($k < 0) {
        return 1 / power($n, -$k);
    }

    return $n * power($n, $k - 1);
}
