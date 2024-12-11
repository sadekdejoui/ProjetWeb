<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1/authorization_policy.proto

namespace Google\Cloud\NetworkSecurity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the GetAuthorizationPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1.GetAuthorizationPolicyRequest</code>
 */
class GetAuthorizationPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A name of the AuthorizationPolicy to get. Must be in the format
     * `projects/{project}/locations/{location}/authorizationPolicies/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. A name of the AuthorizationPolicy to get. Must be in the format
     *                     `projects/{project}/locations/{location}/authorizationPolicies/*`. Please see
     *                     {@see NetworkSecurityClient::authorizationPolicyName()} for help formatting this field.
     *
     * @return \Google\Cloud\NetworkSecurity\V1\GetAuthorizationPolicyRequest
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
     *           Required. A name of the AuthorizationPolicy to get. Must be in the format
     *           `projects/{project}/locations/{location}/authorizationPolicies/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1\AuthorizationPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A name of the AuthorizationPolicy to get. Must be in the format
     * `projects/{project}/locations/{location}/authorizationPolicies/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A name of the AuthorizationPolicy to get. Must be in the format
     * `projects/{project}/locations/{location}/authorizationPolicies/&#42;`.
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

