<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/conversions/v1beta/conversionsources.proto

namespace Google\Shopping\Merchant\Conversions\V1beta\ConversionSource;

use UnexpectedValueException;

/**
 * Represents state of the conversion source.
 *
 * Protobuf type <code>google.shopping.merchant.conversions.v1beta.ConversionSource.State</code>
 */
class State
{
    /**
     * Conversion source has unspecified state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Conversion source is fully functional.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * Conversion source has been archived in the last 30 days and not
     * currently functional. Can be restored using the undelete method.
     *
     * Generated from protobuf enum <code>ARCHIVED = 2;</code>
     */
    const ARCHIVED = 2;
    /**
     * Conversion source creation has started but not fully finished yet.
     *
     * Generated from protobuf enum <code>PENDING = 3;</code>
     */
    const PENDING = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::ARCHIVED => 'ARCHIVED',
        self::PENDING => 'PENDING',
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


