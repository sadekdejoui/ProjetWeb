<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/security_health_analytics_custom_config.proto

namespace Google\Cloud\SecurityCenter\V1\CustomConfig;

use UnexpectedValueException;

/**
 * Defines the valid value options for the severity of a finding.
 *
 * Protobuf type <code>google.cloud.securitycenter.v1.CustomConfig.Severity</code>
 */
class Severity
{
    /**
     * Unspecified severity.
     *
     * Generated from protobuf enum <code>SEVERITY_UNSPECIFIED = 0;</code>
     */
    const SEVERITY_UNSPECIFIED = 0;
    /**
     * Critical severity.
     *
     * Generated from protobuf enum <code>CRITICAL = 1;</code>
     */
    const CRITICAL = 1;
    /**
     * High severity.
     *
     * Generated from protobuf enum <code>HIGH = 2;</code>
     */
    const HIGH = 2;
    /**
     * Medium severity.
     *
     * Generated from protobuf enum <code>MEDIUM = 3;</code>
     */
    const MEDIUM = 3;
    /**
     * Low severity.
     *
     * Generated from protobuf enum <code>LOW = 4;</code>
     */
    const LOW = 4;

    private static $valueToName = [
        self::SEVERITY_UNSPECIFIED => 'SEVERITY_UNSPECIFIED',
        self::CRITICAL => 'CRITICAL',
        self::HIGH => 'HIGH',
        self::MEDIUM => 'MEDIUM',
        self::LOW => 'LOW',
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


