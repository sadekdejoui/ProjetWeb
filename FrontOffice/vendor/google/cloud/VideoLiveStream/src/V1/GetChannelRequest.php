<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/service.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for "LivestreamService.GetChannel".
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.GetChannelRequest</code>
 */
class GetChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the channel resource, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the channel resource, in the form of:
     *                     `projects/{project}/locations/{location}/channels/{channelId}`. Please see
     *                     {@see LivestreamServiceClient::channelName()} for help formatting this field.
     *
     * @return \Google\Cloud\Video\LiveStream\V1\GetChannelRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the channel resource, in the form of:
     *           `projects/{project}/locations/{location}/channels/{channelId}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the channel resource, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the channel resource, in the form of:
     * `projects/{project}/locations/{location}/channels/{channelId}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

