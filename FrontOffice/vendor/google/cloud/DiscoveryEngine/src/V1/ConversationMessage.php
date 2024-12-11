<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversation.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a conversation message.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.ConversationMessage</code>
 */
class ConversationMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Message creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    protected $message;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DiscoveryEngine\V1\TextInput $user_input
     *           User text input.
     *     @type \Google\Cloud\DiscoveryEngine\V1\Reply $reply
     *           Search reply.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Message creation timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Conversation::initOnce();
        parent::__construct($data);
    }

    /**
     * User text input.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TextInput user_input = 1;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\TextInput|null
     */
    public function getUserInput()
    {
        return $this->readOneof(1);
    }

    public function hasUserInput()
    {
        return $this->hasOneof(1);
    }

    /**
     * User text input.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.TextInput user_input = 1;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\TextInput $var
     * @return $this
     */
    public function setUserInput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\TextInput::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Search reply.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Reply reply = 2;</code>
     * @return \Google\Cloud\DiscoveryEngine\V1\Reply|null
     */
    public function getReply()
    {
        return $this->readOneof(2);
    }

    public function hasReply()
    {
        return $this->hasOneof(2);
    }

    /**
     * Search reply.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.Reply reply = 2;</code>
     * @param \Google\Cloud\DiscoveryEngine\V1\Reply $var
     * @return $this
     */
    public function setReply($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DiscoveryEngine\V1\Reply::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Output only. Message creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Message creation timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->whichOneof("message");
    }

}

