<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/edgenetwork/v1/resources.proto

namespace Google\Cloud\EdgeNetwork\V1\Subnet;

use UnexpectedValueException;

/**
 * Bonding type in the subnet.
 *
 * Protobuf type <code>google.cloud.edgenetwork.v1.Subnet.BondingType</code>
 */
class BondingType
{
    /**
     * Unspecified
     * Bonding type will be unspecified by default and if the user chooses to
     * not specify a bonding type at time of creating the VLAN. This will be
     * treated as mixed bonding where the VLAN will have both bonded and
     * non-bonded connectivity to machines.
     *
     * Generated from protobuf enum <code>BONDING_TYPE_UNSPECIFIED = 0;</code>
     */
    const BONDING_TYPE_UNSPECIFIED = 0;
    /**
     * Multi homed.
     *
     * Generated from protobuf enum <code>BONDED = 1;</code>
     */
    const BONDED = 1;
    /**
     * Single homed.
     *
     * Generated from protobuf enum <code>NON_BONDED = 2;</code>
     */
    const NON_BONDED = 2;

    private static $valueToName = [
        self::BONDING_TYPE_UNSPECIFIED => 'BONDING_TYPE_UNSPECIFIED',
        self::BONDED => 'BONDED',
        self::NON_BONDED => 'NON_BONDED',
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


