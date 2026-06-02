<?php

use App\Constants\Response;
use App\Controllers\PaymentController;
use App\DTOs\PaymentDTO;
use App\Static\Greeting;

require __DIR__ . '/vendor/autoload.php';
class BootClass extends PaymentController {}

$bootClass = new BootClass();

$paymentDTO = PaymentDTO::make([
    'id' => '1234567890',
    'status' => 'pending',
    'amount' => '100.00',
    'currency' => 'USD',
    'description' => 'Payment for order #12345',
    'created_at' => date('Y-m-d H:i:s'),
]);

new Greeting();
"<br />";

$message = Response::message('success');

echo $message . "<br />";


echo $paymentDTO->status . "<br />";
echo $bootClass->processPayment('PayPal') . "<br />";
echo $bootClass->success()['message'] . "<br />";
