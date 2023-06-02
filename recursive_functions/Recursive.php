<?php

class Recursive
{
    public function factorial($n)
    {
        if ($n <= 1) {
            return 1;
        }
        return $n * $this->factorial($n - 1);
    }

    public function fibonacci($n)
    {
        if ($n <= 1) {
            return 1;
        }

        return $this->fibonacci($n - 1) + $this->fibonacci($n - 2);
    }

    public function gcd($num1, $num2)
    {
        if ($num2 == 0) {
            return $num1;
        }

        return $this->gcd($num2, $num1 % $num2);
    }

    public function power($num1, $num2)
    {
        if ($num2 == 0) {
            return 1;
        } else if ($num2 < 0) {
            return 1 / $this->power($num1, -$num2);
        }
        return $num1 * $this->power($num1, $num2 - 1);
    }
}

$recursive = new Recursive();

echo "5**3 => " . $recursive->power(5, 3);
echo "\ngcd 75-60 => " . $recursive->gcd(75, 60);
echo "\nfibonacci 10 => " . $recursive->fibonacci(10);
echo "\nfactorial 6 => " . $recursive->factorial(6);











































