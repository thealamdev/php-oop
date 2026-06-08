<?php

namespace App\Encapsulation;

class BankAccount
{
    private float $balance = 0;

    public function deposit(float $amout = 0)
    {
        if ($amout > 0) {
            $this->balance = $amout;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}
