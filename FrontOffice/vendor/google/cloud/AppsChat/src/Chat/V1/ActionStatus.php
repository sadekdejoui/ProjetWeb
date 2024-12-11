<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/action_status.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the status for a request to either invoke or submit a
 * [dialog](https://developers.google.com/workspace/chat/dialogs).
 *
 * Generated from protobuf message <code>google.chat.v1.ActionStatus</code>
 */
class ActionStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * The status code.
     *
     * Generated from protobuf field <code>.google.rpc.Code status_code = 1;</code>
     */
    protected $status_code = 0;
    /**
     * The message to send users about the status of their request.
     * If unset, a generic message based on the `status_code` is sent.
     *
     * Generated from protobuf field <code>string user_facing_message = 2;</code>
     */
    protected $user_facing_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status_code
     *           The status code.
     *     @type string $user_facing_message
     *           The message to send users about the status of their request.
     *           If unset, a generic message based on the `status_code` is sent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\ActionStatus::initOnce();
        parent::__construct($data);
    }

    /**
     * The status code.
     *
     * Generated from protobuf field <code>.google.rpc.Code status_code = 1;</code>
     * @return int
     */
    public function getStatusCode()
    {
        return $this->status_code;
    }

    /**
     * The status code.
     *
     * Generated from protobuf field <code>.google.rpc.Code status_code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatusCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Rpc\Code::class);
        $this->status_code = $var;

        return $this;
    }

    /**
     * The message to send users about the status of their request.
     * If unset, a generic message based on the `status_code` is sent.
     *
     * Generated from protobuf field <code>string user_facing_message = 2;</code>
     * @return string
     */
    public function getUserFacingMessage()
    {
        return $this->user_facing_message;
    }

    /**
     * The message to send users about the status of their request.
     * If unset, a generic message based on the `status_code` is sent.
     *
     * Generated from protobuf field <code>string user_facing_message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserFacingMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_facing_message = $var;

        return $this;
    }

}

