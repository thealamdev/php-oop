<?php

use App\Constants\Response;
use App\Controllers\PaymentController;
use App\DTOs\PaymentDTO;
use App\Static\ChildClass;
use App\Static\Greeting;
use App\Static\Morning;
use App\Static\ParentClass;

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

$parent = ParentClass::show();

$child = ChildClass::show();


$message = Response::message('success');

echo $message . "<br />";

$response = new Response();


echo $paymentDTO->status . "<br />";
echo $bootClass->processPayment('PayPal') . "<br />";
echo $bootClass->success()['message'] . "<br />";
