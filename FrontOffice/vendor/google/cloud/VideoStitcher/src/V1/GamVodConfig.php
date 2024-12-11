<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/stitcher/v1/vod_configs.proto

namespace Google\Cloud\Video\Stitcher\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata used for GAM ad decisioning.
 *
 * Generated from protobuf message <code>google.cloud.video.stitcher.v1.GamVodConfig</code>
 */
class GamVodConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Ad Manager network code to associate with the VOD config.
     *
     * Generated from protobuf field <code>string network_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $network_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $network_code
     *           Required. Ad Manager network code to associate with the VOD config.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Stitcher\V1\VodConfigs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Ad Manager network code to associate with the VOD config.
     *
     * Generated from protobuf field <code>string network_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetworkCode()
    {
        return $this->network_code;
    }

    /**
     * Required. Ad Manager network code to associate with the VOD config.
     *
     * Generated from protobuf field <code>string network_code = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_code = $var;

        return $this;
    }

}

