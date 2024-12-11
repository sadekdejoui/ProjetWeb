<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/meet/v2beta/resource.proto

namespace Google\Apps\Meet\V2beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Developer Preview](https://developers.google.com/workspace/preview).
 * Refers to each unique join/leave session when a user joins a conference from
 * a device. Note that any time a user joins the conference a new unique ID is
 * assigned. That means if a user joins a space multiple times from the same
 * device, they're assigned different IDs, and are also be treated as different
 * participant sessions.
 *
 * Generated from protobuf message <code>google.apps.meet.v2beta.ParticipantSession</code>
 */
class ParticipantSession extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier. Session id.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     */
    protected $name = '';
    /**
     * Output only. Timestamp when the user session started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. Timestamp when the user session ended. Unset if the user
     * session hasn’t ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Identifier. Session id.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Timestamp when the user session started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. Timestamp when the user session ended. Unset if the user
     *           session hasn’t ended.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Apps\Meet\V2Beta\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier. Session id.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifier. Session id.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the user session started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. Timestamp when the user session started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when the user session ended. Unset if the user
     * session hasn’t ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. Timestamp when the user session ended. Unset if the user
     * session hasn’t ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

