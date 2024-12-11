<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Google Cloud asset(resource or IAM policy) governed by the
 * organization policies of the
 * [AnalyzeOrgPolicyGovernedAssetsRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest.constraint].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset</code>
 */
class GovernedAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * The consolidated policy for the analyzed asset. The consolidated
     * policy is computed by merging and evaluating
     * [AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset.policy_bundle][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset.policy_bundle].
     * The evaluation will respect the organization policy [hierarchy
     * rules](https://cloud.google.com/resource-manager/docs/organization-policy/understanding-hierarchy).
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicy consolidated_policy = 3;</code>
     */
    protected $consolidated_policy = null;
    /**
     * The ordered list of all organization policies from the
     * [AnalyzeOrgPoliciesResponse.OrgPolicyResult.consolidated_policy.attached_resource][]
     * to the scope specified in the request.
     * If the constraint is defined with default policy, it will also appear in
     * the list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzerOrgPolicy policy_bundle = 4;</code>
     */
    private $policy_bundle;
    protected $governed_asset;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse\GovernedResource $governed_resource
     *           A Google Cloud resource governed by the organization
     *           policies of the
     *           [AnalyzeOrgPolicyGovernedAssetsRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest.constraint].
     *     @type \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse\GovernedIamPolicy $governed_iam_policy
     *           An IAM policy governed by the organization
     *           policies of the
     *           [AnalyzeOrgPolicyGovernedAssetsRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest.constraint].
     *     @type \Google\Cloud\Asset\V1\AnalyzerOrgPolicy $consolidated_policy
     *           The consolidated policy for the analyzed asset. The consolidated
     *           policy is computed by merging and evaluating
     *           [AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset.policy_bundle][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset.policy_bundle].
     *           The evaluation will respect the organization policy [hierarchy
     *           rules](https://cloud.google.com/resource-manager/docs/organization-policy/understanding-hierarchy).
     *     @type array<\Google\Cloud\Asset\V1\AnalyzerOrgPolicy>|\Google\Protobuf\Internal\RepeatedField $policy_bundle
     *           The ordered list of all organization policies from the
     *           [AnalyzeOrgPoliciesResponse.OrgPolicyResult.consolidated_policy.attached_resource][]
     *           to the scope specified in the request.
     *           If the constraint is defined with default policy, it will also appear in
     *           the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * A Google Cloud resource governed by the organization
     * policies of the
     * [AnalyzeOrgPolicyGovernedAssetsRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest.constraint].
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedResource governed_resource = 1;</code>
     * @return \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse\GovernedResource|null
     */
    public function getGovernedResource()
    {
        return $this->readOneof(1);
    }

    public function hasGovernedResource()
    {
        return $this->hasOneof(1);
    }

    /**
     * A Google Cloud resource governed by the organization
     * policies of the
     * [AnalyzeOrgPolicyGovernedAssetsRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest.constraint].
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedResource governed_resource = 1;</code>
     * @param \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse\GovernedResource $var
     * @return $this
     */
    public function setGovernedResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse\GovernedResource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An IAM policy governed by the organization
     * policies of the
     * [AnalyzeOrgPolicyGovernedAssetsRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest.constraint].
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedIamPolicy governed_iam_policy = 2;</code>
     * @return \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse\GovernedIamPolicy|null
     */
    public function getGovernedIamPolicy()
    {
        return $this->readOneof(2);
    }

    public function hasGovernedIamPolicy()
    {
        return $this->hasOneof(2);
    }

    /**
     * An IAM policy governed by the organization
     * policies of the
     * [AnalyzeOrgPolicyGovernedAssetsRequest.constraint][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsRequest.constraint].
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedIamPolicy governed_iam_policy = 2;</code>
     * @param \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse\GovernedIamPolicy $var
     * @return $this
     */
    public function setGovernedIamPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\AnalyzeOrgPolicyGovernedAssetsResponse\GovernedIamPolicy::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The consolidated policy for the analyzed asset. The consolidated
     * policy is computed by merging and evaluating
     * [AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset.policy_bundle][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset.policy_bundle].
     * The evaluation will respect the organization policy [hierarchy
     * rules](https://cloud.google.com/resource-manager/docs/organization-policy/understanding-hierarchy).
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicy consolidated_policy = 3;</code>
     * @return \Google\Cloud\Asset\V1\AnalyzerOrgPolicy|null
     */
    public function getConsolidatedPolicy()
    {
        return $this->consolidated_policy;
    }

    public function hasConsolidatedPolicy()
    {
        return isset($this->consolidated_policy);
    }

    public function clearConsolidatedPolicy()
    {
        unset($this->consolidated_policy);
    }

    /**
     * The consolidated policy for the analyzed asset. The consolidated
     * policy is computed by merging and evaluating
     * [AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset.policy_bundle][google.cloud.asset.v1.AnalyzeOrgPolicyGovernedAssetsResponse.GovernedAsset.policy_bundle].
     * The evaluation will respect the organization policy [hierarchy
     * rules](https://cloud.google.com/resource-manager/docs/organization-policy/understanding-hierarchy).
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.AnalyzerOrgPolicy consolidated_policy = 3;</code>
     * @param \Google\Cloud\Asset\V1\AnalyzerOrgPolicy $var
     * @return $this
     */
    public function setConsolidatedPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\AnalyzerOrgPolicy::class);
        $this->consolidated_policy = $var;

        return $this;
    }

    /**
     * The ordered list of all organization policies from the
     * [AnalyzeOrgPoliciesResponse.OrgPolicyResult.consolidated_policy.attached_resource][]
     * to the scope specified in the request.
     * If the constraint is defined with default policy, it will also appear in
     * the list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzerOrgPolicy policy_bundle = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyBundle()
    {
        return $this->policy_bundle;
    }

    /**
     * The ordered list of all organization policies from the
     * [AnalyzeOrgPoliciesResponse.OrgPolicyResult.consolidated_policy.attached_resource][]
     * to the scope specified in the request.
     * If the constraint is defined with default policy, it will also appear in
     * the list.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1.AnalyzerOrgPolicy policy_bundle = 4;</code>
     * @param array<\Google\Cloud\Asset\V1\AnalyzerOrgPolicy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyBundle($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1\AnalyzerOrgPolicy::class);
        $this->policy_bundle = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getGovernedAsset()
    {
        return $this->whichOneof("governed_asset");
    }

}


