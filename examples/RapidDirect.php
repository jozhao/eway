<?php

/**
 * RapidDirect.php
 */

require __DIR__.'/../vendor/autoload.php';

$payment = XiNG\eWAY\eWAY::create('Rapid_Direct');

// Initialise the gateway
$payment->initialize(
    array(
        'apiKey' => 'Rapid API Key',
        'apiSecret' => 'Rapid API Password',
        'apiTestMode' => true, // Or false when you are ready for live transactions
    )
);

echo "<pre>";
var_export($payment->getParameters());
echo "</pre>";

// Create a credit card object
$card = new XiNG\eWAY\Common\CreditCard(
    array(
        'firstName' => 'Example',
        'lastName' => 'XiNG',
        'number' => '4444333322221111',
        'expiryMonth' => '12',
        'expiryYear' => '2030',
        'cvv' => '123',
        'billingAddress1' => 'PO Box 521',
        'billingCountry' => 'AU',
        'billingCity' => 'Canberra',
        'billingPostcode' => '2912',
        'billingState' => 'ACT',
    )
);

echo "<pre>";
var_export($card);
echo "</pre>";

$request = $payment->purchase(
    array(
        'amount' => '10.00',
        'currency' => 'AUD',
        'transactionType' => 'Purchase',
        'card' => $card,
    )
);

echo "<pre>";
var_export($request);
echo "</pre>";

$response = $request->send();

echo "<pre>";
var_export($response);
echo "</pre>";

if ($response->isSuccessful()) {
    echo "Purchase transaction was successful!\n";
    $txn_id = $response->getTransactionReference();
    echo "Transaction ID = ".$txn_id."\n";
}
