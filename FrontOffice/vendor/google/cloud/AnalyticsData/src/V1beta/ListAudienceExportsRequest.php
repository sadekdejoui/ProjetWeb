<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto

namespace Google\Analytics\Data\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list all audience exports for a property.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.ListAudienceExportsRequest</code>
 */
class ListAudienceExportsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. All audience exports for this property will be listed in the
     * response. Format: `properties/{property}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of audience exports to return. The service may
     * return fewer than this value. If unspecified, at most 200 audience exports
     * will be returned. The maximum value is 1000 (higher values will be coerced
     * to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListAudienceExports`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAudienceExports`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';

    /**
     * @param string $parent Required. All audience exports for this property will be listed in the
     *                       response. Format: `properties/{property}`
     *                       Please see {@see BetaAnalyticsDataClient::propertyName()} for help formatting this field.
     *
     * @return \Google\Analytics\Data\V1beta\ListAudienceExportsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. All audience exports for this property will be listed in the
     *           response. Format: `properties/{property}`
     *     @type int $page_size
     *           Optional. The maximum number of audience exports to return. The service may
     *           return fewer than this value. If unspecified, at most 200 audience exports
     *           will be returned. The maximum value is 1000 (higher values will be coerced
     *           to the maximum).
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListAudienceExports`
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListAudienceExports`
     *           must match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. All audience exports for this property will be listed in the
     * response. Format: `properties/{property}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. All audience exports for this property will be listed in the
     * response. Format: `properties/{property}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of audience exports to return. The service may
     * return fewer than this value. If unspecified, at most 200 audience exports
     * will be returned. The maximum value is 1000 (higher values will be coerced
     * to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of audience exports to return. The service may
     * return fewer than this value. If unspecified, at most 200 audience exports
     * will be returned. The maximum value is 1000 (higher values will be coerced
     * to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A page token, received from a previous `ListAudienceExports`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAudienceExports`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListAudienceExports`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAudienceExports`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

