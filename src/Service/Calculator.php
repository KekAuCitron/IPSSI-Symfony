<?php

declare(strict_types=1);

namespace App\Service;

Class Calculator
{
    public function add(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber + $secondNumber;
    }
}