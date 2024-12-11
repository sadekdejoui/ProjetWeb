<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/shippingsettings.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\Distance;

use UnexpectedValueException;

/**
 * Unit can differ based on country, it is parameterized to include miles
 * and kilometers.
 *
 * Protobuf type <code>google.shopping.merchant.accounts.v1beta.Distance.Unit</code>
 */
class Unit
{
    /**
     * Unit unspecified
     *
     * Generated from protobuf enum <code>UNIT_UNSPECIFIED = 0;</code>
     */
    const UNIT_UNSPECIFIED = 0;
    /**
     * Unit in miles
     *
     * Generated from protobuf enum <code>MILES = 1;</code>
     */
    const MILES = 1;
    /**
     * Unit in kilometers
     *
     * Generated from protobuf enum <code>KILOMETERS = 2;</code>
     */
    const KILOMETERS = 2;

    private static $valueToName = [
        self::UNIT_UNSPECIFIED => 'UNIT_UNSPECIFIED',
        self::MILES => 'MILES',
        self::KILOMETERS => 'KILOMETERS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


