<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The RemoveIpOverride request message.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.RemoveIpOverrideRequest</code>
 */
class RemoveIpOverrideRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the key from which the IP override is removed, in the
     * format `projects/{project}/keys/{key}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. IP override to be removed from the key.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.IpOverrideData ip_override_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $ip_override_data = null;

    /**
     * @param string                                              $name           Required. The name of the key from which the IP override is removed, in the
     *                                                                            format `projects/{project}/keys/{key}`. Please see
     *                                                                            {@see RecaptchaEnterpriseServiceClient::keyName()} for help formatting this field.
     * @param \Google\Cloud\RecaptchaEnterprise\V1\IpOverrideData $ipOverrideData Required. IP override to be removed from the key.
     *
     * @return \Google\Cloud\RecaptchaEnterprise\V1\RemoveIpOverrideRequest
     *
     * @experimental
     */
    public static function build(string $name, \Google\Cloud\RecaptchaEnterprise\V1\IpOverrideData $ipOverrideData): self
    {
        return (new self())
            ->setName($name)
            ->setIpOverrideData($ipOverrideData);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the key from which the IP override is removed, in the
     *           format `projects/{project}/keys/{key}`.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\IpOverrideData $ip_override_data
     *           Required. IP override to be removed from the key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the key from which the IP override is removed, in the
     * format `projects/{project}/keys/{key}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the key from which the IP override is removed, in the
     * format `projects/{project}/keys/{key}`.
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

    /**
     * Required. IP override to be removed from the key.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.IpOverrideData ip_override_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\IpOverrideData|null
     */
    public function getIpOverrideData()
    {
        return $this->ip_override_data;
    }

    public function hasIpOverrideData()
    {
        return isset($this->ip_override_data);
    }

    public function clearIpOverrideData()
    {
        unset($this->ip_override_data);
    }

    /**
     * Required. IP override to be removed from the key.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.IpOverrideData ip_override_data = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\IpOverrideData $var
     * @return $this
     */
    public function setIpOverrideData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\IpOverrideData::class);
        $this->ip_override_data = $var;

        return $this;
    }

}

