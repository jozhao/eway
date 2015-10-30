<?php

/**
 * RapidDirect.php
 */

require __DIR__.'/../vendor/autoload.php';

$payment = eWAY\eWAY::create('Rapid_Direct');

// Initialise the gateway
$payment->initialize(
    array(
        'apiKey' => 'Rapid API Key',
        'apiSecret' => 'Rapid API Password',
        'apiTestMode' => true, // Or false when you are ready for live transactions
    )
);

$payment->setCustomer(
    array(
        "Reference" => "A12345",
        "Title" => "Mr.",
        "FirstName" => "Joseph",
        "LastName" => "Jason",
        "CompanyName" => "XiNG Digital",
        "Street1" => "PO Box 521",
        "City" => "Canberra",
        "State" => "ACT",
        "PostalCode" => "2912",
        "Country" => "au",
        "Email" => "info@xing.net.au",
        "Url" => "http://www.xing.net.au",
    )
);

// Prepare purchase request.
$request = $payment->purchase(
    array(
        'amount' => '10.00',
        'currency' => 'AUD',
        'transactionType' => 'Purchase',
    )
);

echo "<pre>";
var_export($request);
echo "</pre>";

//$response = $request->send();

//echo "<pre>";
//var_export($response);
//echo "</pre>";

//if ($response->isSuccessful()) {
//    echo "Purchase transaction was successful!\n";
//    $txn_id = $response->getTransactionReference();
//    echo "Transaction ID = ".$txn_id."\n";
//}
