<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/nfs_share.proto

namespace Google\Cloud\BareMetalSolution\V2\NfsShare;

use UnexpectedValueException;

/**
 * The storage type for a volume.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.NfsShare.StorageType</code>
 */
class StorageType
{
    /**
     * The storage type for this volume is unknown.
     *
     * Generated from protobuf enum <code>STORAGE_TYPE_UNSPECIFIED = 0;</code>
     */
    const STORAGE_TYPE_UNSPECIFIED = 0;
    /**
     * The storage type for this volume is SSD.
     *
     * Generated from protobuf enum <code>SSD = 1;</code>
     */
    const SSD = 1;
    /**
     * This storage type for this volume is HDD.
     *
     * Generated from protobuf enum <code>HDD = 2;</code>
     */
    const HDD = 2;

    private static $valueToName = [
        self::STORAGE_TYPE_UNSPECIFIED => 'STORAGE_TYPE_UNSPECIFIED',
        self::SSD => 'SSD',
        self::HDD => 'HDD',
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


