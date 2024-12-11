<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1/cloud_redis.proto

namespace Google\Cloud\Redis\V1\PersistenceConfig;

use UnexpectedValueException;

/**
 * Available snapshot periods for scheduling.
 *
 * Protobuf type <code>google.cloud.redis.v1.PersistenceConfig.SnapshotPeriod</code>
 */
class SnapshotPeriod
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>SNAPSHOT_PERIOD_UNSPECIFIED = 0;</code>
     */
    const SNAPSHOT_PERIOD_UNSPECIFIED = 0;
    /**
     * Snapshot every 1 hour.
     *
     * Generated from protobuf enum <code>ONE_HOUR = 3;</code>
     */
    const ONE_HOUR = 3;
    /**
     * Snapshot every 6 hours.
     *
     * Generated from protobuf enum <code>SIX_HOURS = 4;</code>
     */
    const SIX_HOURS = 4;
    /**
     * Snapshot every 12 hours.
     *
     * Generated from protobuf enum <code>TWELVE_HOURS = 5;</code>
     */
    const TWELVE_HOURS = 5;
    /**
     * Snapshot every 24 hours.
     *
     * Generated from protobuf enum <code>TWENTY_FOUR_HOURS = 6;</code>
     */
    const TWENTY_FOUR_HOURS = 6;

    private static $valueToName = [
        self::SNAPSHOT_PERIOD_UNSPECIFIED => 'SNAPSHOT_PERIOD_UNSPECIFIED',
        self::ONE_HOUR => 'ONE_HOUR',
        self::SIX_HOURS => 'SIX_HOURS',
        self::TWELVE_HOURS => 'TWELVE_HOURS',
        self::TWENTY_FOUR_HOURS => 'TWENTY_FOUR_HOURS',
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


