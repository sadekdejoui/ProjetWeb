<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\InstanceGroupManagerResizeRequest;

use UnexpectedValueException;

/**
 * [Output only] Current state of the request.
 *
 * Protobuf type <code>google.cloud.compute.v1.InstanceGroupManagerResizeRequest.State</code>
 */
class State
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_STATE = 0;</code>
     */
    const UNDEFINED_STATE = 0;
    /**
     * The request was created successfully and was accepted for provisioning when the capacity becomes available.
     *
     * Generated from protobuf enum <code>ACCEPTED = 246714279;</code>
     */
    const ACCEPTED = 246714279;
    /**
     * The request is cancelled.
     *
     * Generated from protobuf enum <code>CANCELLED = 41957681;</code>
     */
    const CANCELLED = 41957681;
    /**
     * Resize request is being created and may still fail creation.
     *
     * Generated from protobuf enum <code>CREATING = 455564985;</code>
     */
    const CREATING = 455564985;
    /**
     * The request failed before or during provisioning. If the request fails during provisioning, any VMs that were created during provisioning are rolled back and removed from the MIG.
     *
     * Generated from protobuf enum <code>FAILED = 455706685;</code>
     */
    const FAILED = 455706685;
    /**
     * Default value. This value should never be returned.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 470755401;</code>
     */
    const STATE_UNSPECIFIED = 470755401;
    /**
     * The request succeeded.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 511103553;</code>
     */
    const SUCCEEDED = 511103553;

    private static $valueToName = [
        self::UNDEFINED_STATE => 'UNDEFINED_STATE',
        self::ACCEPTED => 'ACCEPTED',
        self::CANCELLED => 'CANCELLED',
        self::CREATING => 'CREATING',
        self::FAILED => 'FAILED',
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::SUCCEEDED => 'SUCCEEDED',
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


