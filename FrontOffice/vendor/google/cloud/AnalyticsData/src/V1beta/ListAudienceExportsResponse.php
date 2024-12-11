<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of all audience exports for a property.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.ListAudienceExportsResponse</code>
 */
class ListAudienceExportsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Each audience export for a property.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.AudienceExport audience_exports = 1;</code>
     */
    private $audience_exports;
    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>optional string next_page_token = 2;</code>
     */
    private $next_page_token = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Data\V1beta\AudienceExport>|\Google\Protobuf\Internal\RepeatedField $audience_exports
     *           Each audience export for a property.
     *     @type string $next_page_token
     *           A token, which can be sent as `page_token` to retrieve the next page.
     *           If this field is omitted, there are no subsequent pages.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Each audience export for a property.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.AudienceExport audience_exports = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAudienceExports()
    {
        return $this->audience_exports;
    }

    /**
     * Each audience export for a property.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.AudienceExport audience_exports = 1;</code>
     * @param array<\Google\Analytics\Data\V1beta\AudienceExport>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAudienceExports($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Analytics\Data\V1beta\AudienceExport::class);
        $this->audience_exports = $arr;

        return $this;
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>optional string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return isset($this->next_page_token) ? $this->next_page_token : '';
    }

    public function hasNextPageToken()
    {
        return isset($this->next_page_token);
    }

    public function clearNextPageToken()
    {
        unset($this->next_page_token);
    }

    /**
     * A token, which can be sent as `page_token` to retrieve the next page.
     * If this field is omitted, there are no subsequent pages.
     *
     * Generated from protobuf field <code>optional string next_page_token = 2;</code>
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

