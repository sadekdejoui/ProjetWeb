<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/eventarc.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for the `ListMessageBusEnrollments` method.`
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.ListMessageBusEnrollmentsResponse</code>
 */
class ListMessageBusEnrollmentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The requested enrollments, up to the number specified in `page_size`.
     *
     * Generated from protobuf field <code>repeated string enrollments = 1;</code>
     */
    private $enrollments;
    /**
     * A page token that can be sent to `ListMessageBusEnrollments` to request the
     * next page. If this is empty, then there are no more pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * Unreachable resources, if any.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $enrollments
     *           The requested enrollments, up to the number specified in `page_size`.
     *     @type string $next_page_token
     *           A page token that can be sent to `ListMessageBusEnrollments` to request the
     *           next page. If this is empty, then there are no more pages.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           Unreachable resources, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Eventarc::initOnce();
        parent::__construct($data);
    }

    /**
     * The requested enrollments, up to the number specified in `page_size`.
     *
     * Generated from protobuf field <code>repeated string enrollments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnrollments()
    {
        return $this->enrollments;
    }

    /**
     * The requested enrollments, up to the number specified in `page_size`.
     *
     * Generated from protobuf field <code>repeated string enrollments = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnrollments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->enrollments = $arr;

        return $this;
    }

    /**
     * A page token that can be sent to `ListMessageBusEnrollments` to request the
     * next page. If this is empty, then there are no more pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A page token that can be sent to `ListMessageBusEnrollments` to request the
     * next page. If this is empty, then there are no more pages.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Unreachable resources, if any.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * Unreachable resources, if any.
     *
     * Generated from protobuf field <code>repeated string unreachable = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

