<?php

/**
 * eWAY Payment Gateway
 */

namespace eWAY\Exception;

/**
 * Invalid Credit Card Exception
 *
 * Thrown when a credit card is invalid or missing required fields.
 */
class InvalidCreditCardException extends \Exception implements eWAYException
{
}