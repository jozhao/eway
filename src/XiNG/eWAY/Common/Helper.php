<?php

/**
 * Helper class
 */

namespace XiNG\eWAY\Common;

use InvalidArgumentException;

/**
 * Class Helper
 * @package XiNG\eWAY\Common
 */
class Helper
{
    /**
     * @param $str
     * @return mixed
     */
    public static function camelCase($str)
    {
        return preg_replace_callback(
            '/_([a-z])/',
            function ($match) {
                return strtoupper($match[1]);
            },
            $str
        );
    }

    /**
     * Validate a card number according to the Luhn algorithm.
     *
     * @param  string $number The card number to validate
     * @return boolean True if the supplied card number is valid
     */
    public static function validateLuhn($number)
    {
        $str = '';
        foreach (array_reverse(str_split($number)) as $i => $c) {
            $str .= $i % 2 ? $c * 2 : $c;
        }

        return array_sum(str_split($str)) % 10 === 0;
    }

    /**
     * @param $target
     * @param $parameters
     */
    public static function initialize($target, $parameters)
    {
        if (is_array($parameters)) {
            foreach ($parameters as $key => $value) {
                $method = 'set'.ucfirst(static::camelCase($key));
                if (method_exists($target, $method)) {
                    $target->$method($value);
                }
            }
        }
    }

    /**
     * @param $shortName
     * @return mixed|string
     */
    public static function getMethodClassName($shortName)
    {
        if (0 === strpos($shortName, '\\')) {
            return $shortName;
        }
        // replace underscores with namespace marker, PSR-0 style
        $shortName = str_replace('_', '\\', $shortName);
        if (false === strpos($shortName, '\\')) {
            $shortName .= '\\';
        }

        return '\\XiNG\\eWAY\\Method\\'.$shortName;
    }

    /**
     * @param $value
     * @return float
     */
    public static function toFloat($value)
    {
        if (!is_string($value) && !is_int($value) && !is_float($value)) {
            throw new InvalidArgumentException('Data type is not a valid decimal number.');
        }
        if (is_string($value)) {
            // Validate generic number, with optional sign and decimals.
            if (!preg_match('/^[-]?[0-9]+(\.[0-9]*)?$/', $value)) {
                throw new InvalidArgumentException('String is not a valid decimal number.');
            }
        }

        return (float)$value;
    }
}