<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/executions/v1/executions.proto

namespace Google\Cloud\Workflows\Executions\V1\Execution;

use UnexpectedValueException;

/**
 * Describes the current state of the execution. More states might be added
 * in the future.
 *
 * Protobuf type <code>google.cloud.workflows.executions.v1.Execution.State</code>
 */
class State
{
    /**
     * Invalid state.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The execution is in progress.
     *
     * Generated from protobuf enum <code>ACTIVE = 1;</code>
     */
    const ACTIVE = 1;
    /**
     * The execution finished successfully.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 2;</code>
     */
    const SUCCEEDED = 2;
    /**
     * The execution failed with an error.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * The execution was stopped intentionally.
     *
     * Generated from protobuf enum <code>CANCELLED = 4;</code>
     */
    const CANCELLED = 4;
    /**
     * Execution data is unavailable. See the `state_error` field.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 5;</code>
     */
    const UNAVAILABLE = 5;
    /**
     * Request has been placed in the backlog for processing at a later time.
     *
     * Generated from protobuf enum <code>QUEUED = 6;</code>
     */
    const QUEUED = 6;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::ACTIVE => 'ACTIVE',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::CANCELLED => 'CANCELLED',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::QUEUED => 'QUEUED',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Workflows\Executions\V1\Execution_State::class);

