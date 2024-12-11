<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto

namespace Google\Analytics\Data\V1alpha\ReportTask\ReportMetadata;

use UnexpectedValueException;

/**
 * The processing state.
 *
 * Protobuf type <code>google.analytics.data.v1alpha.ReportTask.ReportMetadata.State</code>
 */
class State
{
    /**
     * Unspecified state will never be used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The report is currently creating and will be available in the
     * future. Creating occurs immediately after the CreateReport call.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The report is fully created and ready for querying.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * The report failed to be created.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::CREATING => 'CREATING',
        self::ACTIVE => 'ACTIVE',
        self::FAILED => 'FAILED',
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


