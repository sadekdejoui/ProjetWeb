<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/accounts/v1beta/online_return_policy.proto

namespace Google\Shopping\Merchant\Accounts\V1beta\OnlineReturnPolicy\ReturnShippingFee;

use UnexpectedValueException;

/**
 * Return shipping fee types.
 *
 * Protobuf type <code>google.shopping.merchant.accounts.v1beta.OnlineReturnPolicy.ReturnShippingFee.Type</code>
 */
class Type
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * The return shipping fee is a fixed value.
     *
     * Generated from protobuf enum <code>FIXED = 1;</code>
     */
    const FIXED = 1;
    /**
     * Customers will pay the actual return shipping fee.
     *
     * Generated from protobuf enum <code>CUSTOMER_PAYING_ACTUAL_FEE = 2;</code>
     */
    const CUSTOMER_PAYING_ACTUAL_FEE = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::FIXED => 'FIXED',
        self::CUSTOMER_PAYING_ACTUAL_FEE => 'CUSTOMER_PAYING_ACTUAL_FEE',
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


