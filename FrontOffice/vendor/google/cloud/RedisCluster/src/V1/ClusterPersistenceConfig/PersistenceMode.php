<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/cluster/v1/cloud_redis_cluster.proto

namespace Google\Cloud\Redis\Cluster\V1\ClusterPersistenceConfig;

use UnexpectedValueException;

/**
 * Available persistence modes.
 *
 * Protobuf type <code>google.cloud.redis.cluster.v1.ClusterPersistenceConfig.PersistenceMode</code>
 */
class PersistenceMode
{
    /**
     * Not set.
     *
     * Generated from protobuf enum <code>PERSISTENCE_MODE_UNSPECIFIED = 0;</code>
     */
    const PERSISTENCE_MODE_UNSPECIFIED = 0;
    /**
     * Persistence is disabled, and any snapshot data is deleted.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * RDB based persistence is enabled.
     *
     * Generated from protobuf enum <code>RDB = 2;</code>
     */
    const RDB = 2;
    /**
     * AOF based persistence is enabled.
     *
     * Generated from protobuf enum <code>AOF = 3;</code>
     */
    const AOF = 3;

    private static $valueToName = [
        self::PERSISTENCE_MODE_UNSPECIFIED => 'PERSISTENCE_MODE_UNSPECIFIED',
        self::DISABLED => 'DISABLED',
        self::RDB => 'RDB',
        self::AOF => 'AOF',
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


