<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/common_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The taint content for the node taint.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.NodeTaint</code>
 */
class NodeTaint extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Key for the taint.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $key = '';
    /**
     * Required. Value for the taint.
     *
     * Generated from protobuf field <code>string value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $value = '';
    /**
     * Required. The taint effect.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.NodeTaint.Effect effect = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $effect = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           Required. Key for the taint.
     *     @type string $value
     *           Required. Value for the taint.
     *     @type int $effect
     *           Required. The taint effect.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\CommonResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Key for the taint.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. Key for the taint.
     *
     * Generated from protobuf field <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Required. Value for the taint.
     *
     * Generated from protobuf field <code>string value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Required. Value for the taint.
     *
     * Generated from protobuf field <code>string value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * Required. The taint effect.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.NodeTaint.Effect effect = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Required. The taint effect.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.NodeTaint.Effect effect = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setEffect($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeMultiCloud\V1\NodeTaint\Effect::class);
        $this->effect = $var;

        return $this;
    }

}

