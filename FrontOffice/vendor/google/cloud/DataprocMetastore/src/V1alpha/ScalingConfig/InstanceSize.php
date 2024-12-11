<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1alpha/metastore.proto

namespace Google\Cloud\Metastore\V1alpha\ScalingConfig;

use UnexpectedValueException;

/**
 * Metastore instance sizes.
 *
 * Protobuf type <code>google.cloud.metastore.v1alpha.ScalingConfig.InstanceSize</code>
 */
class InstanceSize
{
    /**
     * Unspecified instance size
     *
     * Generated from protobuf enum <code>INSTANCE_SIZE_UNSPECIFIED = 0;</code>
     */
    const INSTANCE_SIZE_UNSPECIFIED = 0;
    /**
     * Extra small instance size, maps to a scaling factor of 0.1.
     *
     * Generated from protobuf enum <code>EXTRA_SMALL = 1;</code>
     */
    const EXTRA_SMALL = 1;
    /**
     * Small instance size, maps to a scaling factor of 0.5.
     *
     * Generated from protobuf enum <code>SMALL = 2;</code>
     */
    const SMALL = 2;
    /**
     * Medium instance size, maps to a scaling factor of 1.0.
     *
     * Generated from protobuf enum <code>MEDIUM = 3;</code>
     */
    const MEDIUM = 3;
    /**
     * Large instance size, maps to a scaling factor of 3.0.
     *
     * Generated from protobuf enum <code>LARGE = 4;</code>
     */
    const LARGE = 4;
    /**
     * Extra large instance size, maps to a scaling factor of 6.0.
     *
     * Generated from protobuf enum <code>EXTRA_LARGE = 5;</code>
     */
    const EXTRA_LARGE = 5;

    private static $valueToName = [
        self::INSTANCE_SIZE_UNSPECIFIED => 'INSTANCE_SIZE_UNSPECIFIED',
        self::EXTRA_SMALL => 'EXTRA_SMALL',
        self::SMALL => 'SMALL',
        self::MEDIUM => 'MEDIUM',
        self::LARGE => 'LARGE',
        self::EXTRA_LARGE => 'EXTRA_LARGE',
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


