<?php
require 'vendor/autoload.php';

use MercadoPago\Client\Payment\PaymentClient;
use MercadoPago\Client\Common\RequestOptions;
use MercadoPago\MercadoPagoConfig;

MercadoPagoConfig::setAccessToken("TEST-610301619510016-100508-8b6959433c946f5d32a2a155aee781df-1233052360");
MercadoPagoConfig::setRuntimeEnviroment(MercadoPagoConfig::LOCAL);

$client = new PaymentClient();
$request_options = new RequestOptions();
$request_options->setCustomHeaders(["X-Idempotency-Key: <SOME_UNIQUE_VALUE>"]);

$payment = $client->create([
  "transaction_amount" => (float) $_POST['transaction_amount'],  
  "token" => $_POST['token'],  
  "description" => $_POST['description'],  
  "installments" => $_POST['installments'],  
  "payment_method_id" => $_POST['payment_method_id'],  
  "issuer_id" => $_POST['issuer_id'],  
  "payer" => [
    "email" => $_POST['email'], 
    "identification" => [
      "type" => $_POST['identification_type'],  
      "number" => $_POST['identification_number'] 
    ]
  ]
], $request_options);

echo '<pre>';
print_r($payment);
echo '</pre>';

?>
