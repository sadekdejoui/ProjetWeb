<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request object used by `CancelRollout`.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.CancelRolloutRequest</code>
 */
class CancelRolloutRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the Rollout. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. Deploy policies to override. Format is
     * `projects/{project}/locations/{location}/deployPolicies/{deployPolicy}`.
     *
     * Generated from protobuf field <code>repeated string override_deploy_policy = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $override_deploy_policy;

    /**
     * @param string $name Required. Name of the Rollout. Format is
     *                     `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`. Please see
     *                     {@see CloudDeployClient::rolloutName()} for help formatting this field.
     *
     * @return \Google\Cloud\Deploy\V1\CancelRolloutRequest
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
     *           Required. Name of the Rollout. Format is
     *           `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $override_deploy_policy
     *           Optional. Deploy policies to override. Format is
     *           `projects/{project}/locations/{location}/deployPolicies/{deployPolicy}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the Rollout. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the Rollout. Format is
     * `projects/{project}/locations/{location}/deliveryPipelines/{deliveryPipeline}/releases/{release}/rollouts/{rollout}`.
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
     * Optional. Deploy policies to override. Format is
     * `projects/{project}/locations/{location}/deployPolicies/{deployPolicy}`.
     *
     * Generated from protobuf field <code>repeated string override_deploy_policy = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOverrideDeployPolicy()
    {
        return $this->override_deploy_policy;
    }

    /**
     * Optional. Deploy policies to override. Format is
     * `projects/{project}/locations/{location}/deployPolicies/{deployPolicy}`.
     *
     * Generated from protobuf field <code>repeated string override_deploy_policy = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOverrideDeployPolicy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->override_deploy_policy = $arr;

        return $this;
    }

}

