<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/http_route.proto

namespace Google\Cloud\NetworkServices\V1\HttpRoute\HeaderMatch;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an integer value range.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.HttpRoute.HeaderMatch.IntegerRange</code>
 */
class IntegerRange extends \Google\Protobuf\Internal\Message
{
    /**
     * Start of the range (inclusive)
     *
     * Generated from protobuf field <code>int32 start = 1;</code>
     */
    protected $start = 0;
    /**
     * End of the range (exclusive)
     *
     * Generated from protobuf field <code>int32 end = 2;</code>
     */
    protected $end = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $start
     *           Start of the range (inclusive)
     *     @type int $end
     *           End of the range (exclusive)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\HttpRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Start of the range (inclusive)
     *
     * Generated from protobuf field <code>int32 start = 1;</code>
     * @return int
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Start of the range (inclusive)
     *
     * Generated from protobuf field <code>int32 start = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkInt32($var);
        $this->start = $var;

        return $this;
    }

    /**
     * End of the range (exclusive)
     *
     * Generated from protobuf field <code>int32 end = 2;</code>
     * @return int
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * End of the range (exclusive)
     *
     * Generated from protobuf field <code>int32 end = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkInt32($var);
        $this->end = $var;

        return $this;
    }

}


