<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/netapp/v1/volume.proto

namespace Google\Cloud\NetApp\V1;

use UnexpectedValueException;

/**
 * Protocols is an enum of all the supported network protocols for a volume.
 *
 * Protobuf type <code>google.cloud.netapp.v1.Protocols</code>
 */
class Protocols
{
    /**
     * Unspecified protocol
     *
     * Generated from protobuf enum <code>PROTOCOLS_UNSPECIFIED = 0;</code>
     */
    const PROTOCOLS_UNSPECIFIED = 0;
    /**
     * NFS V3 protocol
     *
     * Generated from protobuf enum <code>NFSV3 = 1;</code>
     */
    const NFSV3 = 1;
    /**
     * NFS V4 protocol
     *
     * Generated from protobuf enum <code>NFSV4 = 2;</code>
     */
    const NFSV4 = 2;
    /**
     * SMB protocol
     *
     * Generated from protobuf enum <code>SMB = 3;</code>
     */
    const SMB = 3;

    private static $valueToName = [
        self::PROTOCOLS_UNSPECIFIED => 'PROTOCOLS_UNSPECIFIED',
        self::NFSV3 => 'NFSV3',
        self::NFSV4 => 'NFSV4',
        self::SMB => 'SMB',
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

