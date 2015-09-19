<?php

/**
 * eWAY Payment Gateway
 */

namespace XiNG\eWAY\RapidDirect;

use XiNG\eWAY\Method\MethodAbstract;

/**
 * eWAY Rapid Direct Gateway
 * Class RapidDirect
 * @package XiNG\eWAY\RapidDirect
 *
 * The eWAY Rapid gateways use an API Key and Password for authentication.
 *
 * There is also a test sandbox environment, which uses a separate endpoint and
 * API key and password. To access the eWAY Sandbox requires an eWAY Partner account.
 * https://myeway.force.com/success/partner-registration
 *
 * Simple Purchase Example:
 *
 * <code>
 *   // Create a gateway for the eWAY Direct Gateway
 *   $payment = eWAY::create('eWAY_RapidDirect');
 *
 *   // Initialise the gateway
 *   $payment->initialize(array(
 *      'apiKey' => 'Rapid API Key',
 *      'apiSecret' => 'Rapid API Password',
 *      'apiTestMode' => true, // Or false when you are ready for live transactions
 *   ));
 *
 *   // Create a credit card object
 *   $card = new CreditCard(array(
 *             'firstName'          => 'Example',
 *             'lastName'           => 'XiNG',
 *             'number'             => '4444333322221111',
 *             'expiryMonth'        => '12',
 *             'expiryYear'         => '2030',
 *             'cvv'                => '123',
 *             'billingAddress1'    => 'PO Box 521',
 *             'billingCountry'     => 'AU',
 *             'billingCity'        => 'Canberra',
 *             'billingPostcode'    => '2912',
 *             'billingState'       => 'ACT',
 *   ));
 *
 *   // Do a purchase transaction on the gateway
 *   $request = $payment->purchase(array(
 *      'amount'            => '10.00',
 *      'currency'          => 'AUD',
 *      'transactionType'   => 'Purchase',
 *      'card'              => $card,
 *   ));
 *
 *   $response = $request->send();
 *   if ($response->isSuccessful()) {
 *       echo "Purchase transaction was successful!\n";
 *       $txn_id = $response->getTransactionReference();
 *       echo "Transaction ID = " . $txn_id . "\n";
 *   }
 * </code>
 *
 * @link https://eway.io/api-v3/#direct-connection
 * @link https://eway.io/api-v3/#authentication
 * @link https://go.eway.io/s/article/How-do-I-setup-my-Live-eWAY-API-Key-and-Password
 */
class RapidDirect extends MethodAbstract
{
    /**
     * @return string
     */
    public function getMethodName()
    {
        return 'eWAY Rapid Direct';
    }

}

