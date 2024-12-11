<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource that contains a single violation of a reported `AssetFrame`
 * resource.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.FrameViolationEntry</code>
 */
class FrameViolationEntry extends \Google\Protobuf\Internal\Message
{
    /**
     * The field of the original frame where the violation occurred.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     */
    protected $field = '';
    /**
     * A message describing the violation.
     *
     * Generated from protobuf field <code>string violation = 2;</code>
     */
    protected $violation = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field
     *           The field of the original frame where the violation occurred.
     *     @type string $violation
     *           A message describing the violation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * The field of the original frame where the violation occurred.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * The field of the original frame where the violation occurred.
     *
     * Generated from protobuf field <code>string field = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkString($var, True);
        $this->field = $var;

        return $this;
    }

    /**
     * A message describing the violation.
     *
     * Generated from protobuf field <code>string violation = 2;</code>
     * @return string
     */
    public function getViolation()
    {
        return $this->violation;
    }

    /**
     * A message describing the violation.
     *
     * Generated from protobuf field <code>string violation = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setViolation($var)
    {
        GPBUtil::checkString($var, True);
        $this->violation = $var;

        return $this;
    }

}

