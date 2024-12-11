<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/tool.proto

namespace Google\Cloud\AIPlatform\V1\FunctionCallingConfig;

use UnexpectedValueException;

/**
 * Function calling mode.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1.FunctionCallingConfig.Mode</code>
 */
class Mode
{
    /**
     * Unspecified function calling mode. This value should not be used.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Default model behavior, model decides to predict either a function call
     * or a natural language response.
     *
     * Generated from protobuf enum <code>AUTO = 1;</code>
     */
    const AUTO = 1;
    /**
     * Model is constrained to always predicting a function call only.
     * If "allowed_function_names" are set, the predicted function call will be
     * limited to any one of "allowed_function_names", else the predicted
     * function call will be any one of the provided "function_declarations".
     *
     * Generated from protobuf enum <code>ANY = 2;</code>
     */
    const ANY = 2;
    /**
     * Model will not predict any function call. Model behavior is same as when
     * not passing any function declarations.
     *
     * Generated from protobuf enum <code>NONE = 3;</code>
     */
    const NONE = 3;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::AUTO => 'AUTO',
        self::ANY => 'ANY',
        self::NONE => 'NONE',
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


