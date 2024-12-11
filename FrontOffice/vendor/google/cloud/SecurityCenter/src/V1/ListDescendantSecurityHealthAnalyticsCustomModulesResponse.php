<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for listing descendant Security Health Analytics custom
 * modules.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListDescendantSecurityHealthAnalyticsCustomModulesResponse</code>
 */
class ListDescendantSecurityHealthAnalyticsCustomModulesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Custom modules belonging to the requested parent and its descendants.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.SecurityHealthAnalyticsCustomModule security_health_analytics_custom_modules = 1;</code>
     */
    private $security_health_analytics_custom_modules;
    /**
     * If not empty, indicates that there may be more custom modules to be
     * returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule>|\Google\Protobuf\Internal\RepeatedField $security_health_analytics_custom_modules
     *           Custom modules belonging to the requested parent and its descendants.
     *     @type string $next_page_token
     *           If not empty, indicates that there may be more custom modules to be
     *           returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Custom modules belonging to the requested parent and its descendants.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.SecurityHealthAnalyticsCustomModule security_health_analytics_custom_modules = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecurityHealthAnalyticsCustomModules()
    {
        return $this->security_health_analytics_custom_modules;
    }

    /**
     * Custom modules belonging to the requested parent and its descendants.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.SecurityHealthAnalyticsCustomModule security_health_analytics_custom_modules = 1;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecurityHealthAnalyticsCustomModules($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\SecurityHealthAnalyticsCustomModule::class);
        $this->security_health_analytics_custom_modules = $arr;

        return $this;
    }

    /**
     * If not empty, indicates that there may be more custom modules to be
     * returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If not empty, indicates that there may be more custom modules to be
     * returned.
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

}

