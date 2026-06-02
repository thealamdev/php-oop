<?php

namespace App\Controllers;

use App\Interfaces\PaymentInterface;

class PaymentController extends Controller implements PaymentInterface
{
    /**
     * Process a payment using the specified method.
     * @param string $method
     * @return string
     */
    public function processPayment(string $method): string
    {
        return "Processing payment using $method";
    }

    public function observe(): void
    {
        // Implementation of the observe method from the Controller class
    }
}
