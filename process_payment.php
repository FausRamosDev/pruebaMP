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
  "transaction_amount" => (float) $_POST['transaction_amount'],  // Asegúrate de que los datos lleguen correctamente
  "token" => $_POST['token'],  // Asegúrate de que el token de pago esté correcto
  "description" => $_POST['description'],  // Descripción del producto o servicio
  "installments" => $_POST['installments'],  // Cuotas seleccionadas
  "payment_method_id" => $_POST['payment_method_id'],  // Método de pago seleccionado
  "issuer_id" => $_POST['issuer_id'],  // ID del emisor del pago (opcional dependiendo del método de pago)
  "payer" => [
    "email" => $_POST['email'],  // Correo del pagador
    "identification" => [
      "type" => $_POST['identification_type'],  // Tipo de documento
      "number" => $_POST['identification_number']  // Número del documento
    ]
  ]
], $request_options);

// Imprimir el pago para verificar la respuesta
echo '<pre>';
print_r($payment);
echo '</pre>';

?>
