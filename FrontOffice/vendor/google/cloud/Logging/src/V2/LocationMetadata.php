<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Cloud Logging specific location metadata.
 *
 * Generated from protobuf message <code>google.logging.v2.LocationMetadata</code>
 */
class LocationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates whether or not Log Analytics features are supported in the given
     * location.
     *
     * Generated from protobuf field <code>bool log_analytics_enabled = 1;</code>
     */
    private $log_analytics_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $log_analytics_enabled
     *           Indicates whether or not Log Analytics features are supported in the given
     *           location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates whether or not Log Analytics features are supported in the given
     * location.
     *
     * Generated from protobuf field <code>bool log_analytics_enabled = 1;</code>
     * @return bool
     */
    public function getLogAnalyticsEnabled()
    {
        return $this->log_analytics_enabled;
    }

    /**
     * Indicates whether or not Log Analytics features are supported in the given
     * location.
     *
     * Generated from protobuf field <code>bool log_analytics_enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setLogAnalyticsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->log_analytics_enabled = $var;

        return $this;
    }

}

