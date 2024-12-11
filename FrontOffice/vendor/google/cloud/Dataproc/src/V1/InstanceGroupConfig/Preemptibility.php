<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1\InstanceGroupConfig;

use UnexpectedValueException;

/**
 * Controls the use of preemptible instances within the group.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.InstanceGroupConfig.Preemptibility</code>
 */
class Preemptibility
{
    /**
     * Preemptibility is unspecified, the system will choose the
     * appropriate setting for each instance group.
     *
     * Generated from protobuf enum <code>PREEMPTIBILITY_UNSPECIFIED = 0;</code>
     */
    const PREEMPTIBILITY_UNSPECIFIED = 0;
    /**
     * Instances are non-preemptible.
     * This option is allowed for all instance groups and is the only valid
     * value for Master and Worker instance groups.
     *
     * Generated from protobuf enum <code>NON_PREEMPTIBLE = 1;</code>
     */
    const NON_PREEMPTIBLE = 1;
    /**
     * Instances are [preemptible]
     * (https://cloud.google.com/compute/docs/instances/preemptible).
     * This option is allowed only for [secondary worker]
     * (https://cloud.google.com/dataproc/docs/concepts/compute/secondary-vms)
     * groups.
     *
     * Generated from protobuf enum <code>PREEMPTIBLE = 2;</code>
     */
    const PREEMPTIBLE = 2;
    /**
     * Instances are [Spot VMs]
     * (https://cloud.google.com/compute/docs/instances/spot).
     * This option is allowed only for [secondary worker]
     * (https://cloud.google.com/dataproc/docs/concepts/compute/secondary-vms)
     * groups. Spot VMs are the latest version of [preemptible VMs]
     * (https://cloud.google.com/compute/docs/instances/preemptible), and
     * provide additional features.
     *
     * Generated from protobuf enum <code>SPOT = 3;</code>
     */
    const SPOT = 3;

    private static $valueToName = [
        self::PREEMPTIBILITY_UNSPECIFIED => 'PREEMPTIBILITY_UNSPECIFIED',
        self::NON_PREEMPTIBLE => 'NON_PREEMPTIBLE',
        self::PREEMPTIBLE => 'PREEMPTIBLE',
        self::SPOT => 'SPOT',
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


