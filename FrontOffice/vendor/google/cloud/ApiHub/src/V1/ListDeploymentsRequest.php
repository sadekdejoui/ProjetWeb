<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apihub/v1/apihub_service.proto

namespace Google\Cloud\ApiHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [ListDeployments][google.cloud.apihub.v1.ApiHub.ListDeployments] method's
 * request.
 *
 * Generated from protobuf message <code>google.cloud.apihub.v1.ListDeploymentsRequest</code>
 */
class ListDeploymentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent, which owns this collection of deployment resources.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. An expression that filters the list of Deployments.
     * A filter expression consists of a field name, a comparison
     * operator, and a value for filtering. The value must be a string. The
     * comparison operator must be one of: `<`, `>` or
     * `=`. Filters are not case sensitive.
     * The following fields in the `Deployments` are eligible for filtering:
     *   * `display_name` - The display name of the Deployment. Allowed
     *   comparison operators: `=`.
     *   * `create_time` - The time at which the Deployment was created. The
     *   value should be in the (RFC3339)[https://tools.ietf.org/html/rfc3339]
     *   format. Allowed comparison operators: `>` and `<`.
     *   * `resource_uri` - A URI to the deployment resource. Allowed
     *   comparison operators: `=`.
     *   * `api_versions` - The API versions linked to this deployment. Allowed
     *   comparison operators: `:`.
     *   * `deployment_type.enum_values.values.id` - The allowed value id of the
     *   deployment_type attribute associated with the Deployment. Allowed
     *   comparison operators: `:`.
     *   * `deployment_type.enum_values.values.display_name` - The allowed value
     *   display name of the deployment_type attribute associated with the
     *   Deployment. Allowed comparison operators: `:`.
     *   * `slo.string_values.values` -The allowed string value of the slo
     *   attribute associated with the deployment. Allowed comparison
     *   operators: `:`.
     *   * `environment.enum_values.values.id` - The allowed value id of the
     *   environment attribute associated with the deployment. Allowed
     *   comparison operators: `:`.
     *   * `environment.enum_values.values.display_name` - The allowed value
     *   display name of the environment attribute associated with the deployment.
     *   Allowed comparison operators: `:`.
     * Expressions are combined with either `AND` logic operator or `OR` logical
     * operator but not both of them together i.e. only one of the `AND` or `OR`
     * operator can be used throughout the filter string and both the operators
     * cannot be used together. No other logical operators are supported. At most
     * three filter fields are allowed in the filter string and if provided
     * more than that then `INVALID_ARGUMENT` error is returned by the API.
     * Here are a few examples:
     *   * `environment.enum_values.values.id: staging-id` - The allowed value id
     *   of the environment attribute associated with the Deployment is
     *   _staging-id_.
     *   * `environment.enum_values.values.display_name: \"Staging Deployment\"` -
     *   The allowed value display name of the environment attribute associated
     *   with the Deployment is `Staging Deployment`.
     *   * `environment.enum_values.values.id: production-id AND create_time <
     *   \"2021-08-15T14:50:00Z\" AND create_time > \"2021-08-10T12:00:00Z\"` -
     *   The allowed value id of the environment attribute associated with the
     *   Deployment is _production-id_ and Deployment was created before
     *   _2021-08-15 14:50:00 UTC_ and after _2021-08-10 12:00:00 UTC_.
     *   * `environment.enum_values.values.id: production-id OR
     *   slo.string_values.values: \"99.99%\"`
     *   - The allowed value id of the environment attribute Deployment is
     *   _production-id_ or string value of the slo attribute is _99.99%_.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. The maximum number of deployment resources to return. The service
     * may return fewer than this value. If unspecified, at most 50 deployments
     * will be returned. The maximum value is 1000; values above 1000 will be
     * coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListDeployments` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters (except page_size) provided to
     * `ListDeployments` must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent, which owns this collection of deployment resources.
     *                       Format: `projects/{project}/locations/{location}`
     *                       Please see {@see ApiHubClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ApiHub\V1\ListDeploymentsRequest
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
     *           Required. The parent, which owns this collection of deployment resources.
     *           Format: `projects/{project}/locations/{location}`
     *     @type string $filter
     *           Optional. An expression that filters the list of Deployments.
     *           A filter expression consists of a field name, a comparison
     *           operator, and a value for filtering. The value must be a string. The
     *           comparison operator must be one of: `<`, `>` or
     *           `=`. Filters are not case sensitive.
     *           The following fields in the `Deployments` are eligible for filtering:
     *             * `display_name` - The display name of the Deployment. Allowed
     *             comparison operators: `=`.
     *             * `create_time` - The time at which the Deployment was created. The
     *             value should be in the (RFC3339)[https://tools.ietf.org/html/rfc3339]
     *             format. Allowed comparison operators: `>` and `<`.
     *             * `resource_uri` - A URI to the deployment resource. Allowed
     *             comparison operators: `=`.
     *             * `api_versions` - The API versions linked to this deployment. Allowed
     *             comparison operators: `:`.
     *             * `deployment_type.enum_values.values.id` - The allowed value id of the
     *             deployment_type attribute associated with the Deployment. Allowed
     *             comparison operators: `:`.
     *             * `deployment_type.enum_values.values.display_name` - The allowed value
     *             display name of the deployment_type attribute associated with the
     *             Deployment. Allowed comparison operators: `:`.
     *             * `slo.string_values.values` -The allowed string value of the slo
     *             attribute associated with the deployment. Allowed comparison
     *             operators: `:`.
     *             * `environment.enum_values.values.id` - The allowed value id of the
     *             environment attribute associated with the deployment. Allowed
     *             comparison operators: `:`.
     *             * `environment.enum_values.values.display_name` - The allowed value
     *             display name of the environment attribute associated with the deployment.
     *             Allowed comparison operators: `:`.
     *           Expressions are combined with either `AND` logic operator or `OR` logical
     *           operator but not both of them together i.e. only one of the `AND` or `OR`
     *           operator can be used throughout the filter string and both the operators
     *           cannot be used together. No other logical operators are supported. At most
     *           three filter fields are allowed in the filter string and if provided
     *           more than that then `INVALID_ARGUMENT` error is returned by the API.
     *           Here are a few examples:
     *             * `environment.enum_values.values.id: staging-id` - The allowed value id
     *             of the environment attribute associated with the Deployment is
     *             _staging-id_.
     *             * `environment.enum_values.values.display_name: \"Staging Deployment\"` -
     *             The allowed value display name of the environment attribute associated
     *             with the Deployment is `Staging Deployment`.
     *             * `environment.enum_values.values.id: production-id AND create_time <
     *             \"2021-08-15T14:50:00Z\" AND create_time > \"2021-08-10T12:00:00Z\"` -
     *             The allowed value id of the environment attribute associated with the
     *             Deployment is _production-id_ and Deployment was created before
     *             _2021-08-15 14:50:00 UTC_ and after _2021-08-10 12:00:00 UTC_.
     *             * `environment.enum_values.values.id: production-id OR
     *             slo.string_values.values: \"99.99%\"`
     *             - The allowed value id of the environment attribute Deployment is
     *             _production-id_ or string value of the slo attribute is _99.99%_.
     *     @type int $page_size
     *           Optional. The maximum number of deployment resources to return. The service
     *           may return fewer than this value. If unspecified, at most 50 deployments
     *           will be returned. The maximum value is 1000; values above 1000 will be
     *           coerced to 1000.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListDeployments` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters (except page_size) provided to
     *           `ListDeployments` must match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apihub\V1\ApihubService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent, which owns this collection of deployment resources.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent, which owns this collection of deployment resources.
     * Format: `projects/{project}/locations/{location}`
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
     * Optional. An expression that filters the list of Deployments.
     * A filter expression consists of a field name, a comparison
     * operator, and a value for filtering. The value must be a string. The
     * comparison operator must be one of: `<`, `>` or
     * `=`. Filters are not case sensitive.
     * The following fields in the `Deployments` are eligible for filtering:
     *   * `display_name` - The display name of the Deployment. Allowed
     *   comparison operators: `=`.
     *   * `create_time` - The time at which the Deployment was created. The
     *   value should be in the (RFC3339)[https://tools.ietf.org/html/rfc3339]
     *   format. Allowed comparison operators: `>` and `<`.
     *   * `resource_uri` - A URI to the deployment resource. Allowed
     *   comparison operators: `=`.
     *   * `api_versions` - The API versions linked to this deployment. Allowed
     *   comparison operators: `:`.
     *   * `deployment_type.enum_values.values.id` - The allowed value id of the
     *   deployment_type attribute associated with the Deployment. Allowed
     *   comparison operators: `:`.
     *   * `deployment_type.enum_values.values.display_name` - The allowed value
     *   display name of the deployment_type attribute associated with the
     *   Deployment. Allowed comparison operators: `:`.
     *   * `slo.string_values.values` -The allowed string value of the slo
     *   attribute associated with the deployment. Allowed comparison
     *   operators: `:`.
     *   * `environment.enum_values.values.id` - The allowed value id of the
     *   environment attribute associated with the deployment. Allowed
     *   comparison operators: `:`.
     *   * `environment.enum_values.values.display_name` - The allowed value
     *   display name of the environment attribute associated with the deployment.
     *   Allowed comparison operators: `:`.
     * Expressions are combined with either `AND` logic operator or `OR` logical
     * operator but not both of them together i.e. only one of the `AND` or `OR`
     * operator can be used throughout the filter string and both the operators
     * cannot be used together. No other logical operators are supported. At most
     * three filter fields are allowed in the filter string and if provided
     * more than that then `INVALID_ARGUMENT` error is returned by the API.
     * Here are a few examples:
     *   * `environment.enum_values.values.id: staging-id` - The allowed value id
     *   of the environment attribute associated with the Deployment is
     *   _staging-id_.
     *   * `environment.enum_values.values.display_name: \"Staging Deployment\"` -
     *   The allowed value display name of the environment attribute associated
     *   with the Deployment is `Staging Deployment`.
     *   * `environment.enum_values.values.id: production-id AND create_time <
     *   \"2021-08-15T14:50:00Z\" AND create_time > \"2021-08-10T12:00:00Z\"` -
     *   The allowed value id of the environment attribute associated with the
     *   Deployment is _production-id_ and Deployment was created before
     *   _2021-08-15 14:50:00 UTC_ and after _2021-08-10 12:00:00 UTC_.
     *   * `environment.enum_values.values.id: production-id OR
     *   slo.string_values.values: \"99.99%\"`
     *   - The allowed value id of the environment attribute Deployment is
     *   _production-id_ or string value of the slo attribute is _99.99%_.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. An expression that filters the list of Deployments.
     * A filter expression consists of a field name, a comparison
     * operator, and a value for filtering. The value must be a string. The
     * comparison operator must be one of: `<`, `>` or
     * `=`. Filters are not case sensitive.
     * The following fields in the `Deployments` are eligible for filtering:
     *   * `display_name` - The display name of the Deployment. Allowed
     *   comparison operators: `=`.
     *   * `create_time` - The time at which the Deployment was created. The
     *   value should be in the (RFC3339)[https://tools.ietf.org/html/rfc3339]
     *   format. Allowed comparison operators: `>` and `<`.
     *   * `resource_uri` - A URI to the deployment resource. Allowed
     *   comparison operators: `=`.
     *   * `api_versions` - The API versions linked to this deployment. Allowed
     *   comparison operators: `:`.
     *   * `deployment_type.enum_values.values.id` - The allowed value id of the
     *   deployment_type attribute associated with the Deployment. Allowed
     *   comparison operators: `:`.
     *   * `deployment_type.enum_values.values.display_name` - The allowed value
     *   display name of the deployment_type attribute associated with the
     *   Deployment. Allowed comparison operators: `:`.
     *   * `slo.string_values.values` -The allowed string value of the slo
     *   attribute associated with the deployment. Allowed comparison
     *   operators: `:`.
     *   * `environment.enum_values.values.id` - The allowed value id of the
     *   environment attribute associated with the deployment. Allowed
     *   comparison operators: `:`.
     *   * `environment.enum_values.values.display_name` - The allowed value
     *   display name of the environment attribute associated with the deployment.
     *   Allowed comparison operators: `:`.
     * Expressions are combined with either `AND` logic operator or `OR` logical
     * operator but not both of them together i.e. only one of the `AND` or `OR`
     * operator can be used throughout the filter string and both the operators
     * cannot be used together. No other logical operators are supported. At most
     * three filter fields are allowed in the filter string and if provided
     * more than that then `INVALID_ARGUMENT` error is returned by the API.
     * Here are a few examples:
     *   * `environment.enum_values.values.id: staging-id` - The allowed value id
     *   of the environment attribute associated with the Deployment is
     *   _staging-id_.
     *   * `environment.enum_values.values.display_name: \"Staging Deployment\"` -
     *   The allowed value display name of the environment attribute associated
     *   with the Deployment is `Staging Deployment`.
     *   * `environment.enum_values.values.id: production-id AND create_time <
     *   \"2021-08-15T14:50:00Z\" AND create_time > \"2021-08-10T12:00:00Z\"` -
     *   The allowed value id of the environment attribute associated with the
     *   Deployment is _production-id_ and Deployment was created before
     *   _2021-08-15 14:50:00 UTC_ and after _2021-08-10 12:00:00 UTC_.
     *   * `environment.enum_values.values.id: production-id OR
     *   slo.string_values.values: \"99.99%\"`
     *   - The allowed value id of the environment attribute Deployment is
     *   _production-id_ or string value of the slo attribute is _99.99%_.
     *
     * Generated from protobuf field <code>string filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of deployment resources to return. The service
     * may return fewer than this value. If unspecified, at most 50 deployments
     * will be returned. The maximum value is 1000; values above 1000 will be
     * coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of deployment resources to return. The service
     * may return fewer than this value. If unspecified, at most 50 deployments
     * will be returned. The maximum value is 1000; values above 1000 will be
     * coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. A page token, received from a previous `ListDeployments` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters (except page_size) provided to
     * `ListDeployments` must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListDeployments` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters (except page_size) provided to
     * `ListDeployments` must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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

