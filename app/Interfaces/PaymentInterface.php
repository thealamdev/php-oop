<?php

namespace App\Interfaces;

interface PaymentInterface
{
    /**
     * Process a payment using the specified method.
     * @param string $method
     * @return string
     */
    public function processPayment(string $method): string;
}
