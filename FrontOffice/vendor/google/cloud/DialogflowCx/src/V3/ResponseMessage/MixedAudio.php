<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/response_message.proto

namespace Google\Cloud\Dialogflow\Cx\V3\ResponseMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an audio message that is composed of both segments
 * synthesized from the Dialogflow agent prompts and ones hosted externally
 * at the specified URIs.
 * The external URIs are specified via
 * [play_audio][google.cloud.dialogflow.cx.v3.ResponseMessage.play_audio].
 * This message is generated by Dialogflow only and not supposed to be
 * defined by the user.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.ResponseMessage.MixedAudio</code>
 */
class MixedAudio extends \Google\Protobuf\Internal\Message
{
    /**
     * Segments this audio response is composed of.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ResponseMessage.MixedAudio.Segment segments = 1;</code>
     */
    private $segments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage\MixedAudio\Segment>|\Google\Protobuf\Internal\RepeatedField $segments
     *           Segments this audio response is composed of.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Segments this audio response is composed of.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ResponseMessage.MixedAudio.Segment segments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Segments this audio response is composed of.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.ResponseMessage.MixedAudio.Segment segments = 1;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\ResponseMessage\MixedAudio\Segment>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\ResponseMessage\MixedAudio\Segment::class);
        $this->segments = $arr;

        return $this;
    }

}


