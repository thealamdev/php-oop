<?php

namespace App\Abstraction;

use App\Interfaces\PaymentInterface;
use Override;

class StripePayment implements PaymentInterface
{
    const METHOD = 'stripe';

    #[Override]
    public function processPayment(string $method): string
    {
        if (self::METHOD === $method) {
            return "Process method is " . self::METHOD;
        }
        return 'Something went wrong';
    }
}
