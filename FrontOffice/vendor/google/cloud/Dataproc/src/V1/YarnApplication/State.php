<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1\YarnApplication;

use UnexpectedValueException;

/**
 * The application state, corresponding to
 * <code>YarnProtos.YarnApplicationStateProto</code>.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.YarnApplication.State</code>
 */
class State
{
    /**
     * Status is unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Status is NEW.
     *
     * Generated from protobuf enum <code>NEW = 1;</code>
     */
    const PBNEW = 1;
    /**
     * Status is NEW_SAVING.
     *
     * Generated from protobuf enum <code>NEW_SAVING = 2;</code>
     */
    const NEW_SAVING = 2;
    /**
     * Status is SUBMITTED.
     *
     * Generated from protobuf enum <code>SUBMITTED = 3;</code>
     */
    const SUBMITTED = 3;
    /**
     * Status is ACCEPTED.
     *
     * Generated from protobuf enum <code>ACCEPTED = 4;</code>
     */
    const ACCEPTED = 4;
    /**
     * Status is RUNNING.
     *
     * Generated from protobuf enum <code>RUNNING = 5;</code>
     */
    const RUNNING = 5;
    /**
     * Status is FINISHED.
     *
     * Generated from protobuf enum <code>FINISHED = 6;</code>
     */
    const FINISHED = 6;
    /**
     * Status is FAILED.
     *
     * Generated from protobuf enum <code>FAILED = 7;</code>
     */
    const FAILED = 7;
    /**
     * Status is KILLED.
     *
     * Generated from protobuf enum <code>KILLED = 8;</code>
     */
    const KILLED = 8;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::PBNEW => 'NEW',
        self::NEW_SAVING => 'NEW_SAVING',
        self::SUBMITTED => 'SUBMITTED',
        self::ACCEPTED => 'ACCEPTED',
        self::RUNNING => 'RUNNING',
        self::FINISHED => 'FINISHED',
        self::FAILED => 'FAILED',
        self::KILLED => 'KILLED',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


