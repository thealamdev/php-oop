<?php

use App\Abstraction\StripePayment;
use App\Constants\Response;
use App\Controllers\PaymentController;
use App\DTOs\PaymentDTO;
use App\Encapsulation\BankAccount;
use App\Static\Greeting;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

require __DIR__ . '/vendor/autoload.php';
class BootClass extends PaymentController {}

$bootClass = new BootClass();

$bankAccout = new BankAccount();
$bankAccout->deposit(1000);
echo $bankAccout->getBalance();

$stripePayment = new StripePayment();
echo $stripePayment->processPayment('stripe');

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


$request = Request::createFromGlobals();

$name = $request->query->get('name', 'Guest');

$respone = new HttpFoundationResponse(
    "Hello {$name}",
    HttpFoundationResponse::HTTP_OK
);

$respone->send();

$message = Response::message('success');

echo $message . "<br />";

$response = new Response();

echo $paymentDTO->status . "<br />";
echo $bootClass->processPayment('PayPal') . "<br />";
echo $bootClass->success()['message'] . "<br />";
