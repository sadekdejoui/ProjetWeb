<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource message representing a Google Analytics account.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.Account</code>
 */
class Account extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this account.
     * Format: accounts/{account}
     * Example: "accounts/100"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Time when this account was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Time when account payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Required. Human-readable display name for this account.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Country of business. Must be a Unicode CLDR region code.
     *
     * Generated from protobuf field <code>string region_code = 5;</code>
     */
    private $region_code = '';
    /**
     * Output only. Indicates whether this Account is soft-deleted or not. Deleted
     * accounts are excluded from List results unless specifically requested.
     *
     * Generated from protobuf field <code>bool deleted = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $deleted = false;
    /**
     * Output only. The URI for a Google Marketing Platform organization resource.
     * Only set when this account is connected to a GMP organization.
     * Format: marketingplatformadmin.googleapis.com/organizations/{org_id}
     *
     * Generated from protobuf field <code>string gmp_organization = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    private $gmp_organization = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this account.
     *           Format: accounts/{account}
     *           Example: "accounts/100"
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this account was originally created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when account payload fields were last updated.
     *     @type string $display_name
     *           Required. Human-readable display name for this account.
     *     @type string $region_code
     *           Country of business. Must be a Unicode CLDR region code.
     *     @type bool $deleted
     *           Output only. Indicates whether this Account is soft-deleted or not. Deleted
     *           accounts are excluded from List results unless specifically requested.
     *     @type string $gmp_organization
     *           Output only. The URI for a Google Marketing Platform organization resource.
     *           Only set when this account is connected to a GMP organization.
     *           Format: marketingplatformadmin.googleapis.com/organizations/{org_id}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this account.
     * Format: accounts/{account}
     * Example: "accounts/100"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this account.
     * Format: accounts/{account}
     * Example: "accounts/100"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when this account was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when this account was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when account payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when account payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Required. Human-readable display name for this account.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human-readable display name for this account.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Country of business. Must be a Unicode CLDR region code.
     *
     * Generated from protobuf field <code>string region_code = 5;</code>
     * @return string
     */
    public function getRegionCode()
    {
        return $this->region_code;
    }

    /**
     * Country of business. Must be a Unicode CLDR region code.
     *
     * Generated from protobuf field <code>string region_code = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->region_code = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether this Account is soft-deleted or not. Deleted
     * accounts are excluded from List results unless specifically requested.
     *
     * Generated from protobuf field <code>bool deleted = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Output only. Indicates whether this Account is soft-deleted or not. Deleted
     * accounts are excluded from List results unless specifically requested.
     *
     * Generated from protobuf field <code>bool deleted = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

    /**
     * Output only. The URI for a Google Marketing Platform organization resource.
     * Only set when this account is connected to a GMP organization.
     * Format: marketingplatformadmin.googleapis.com/organizations/{org_id}
     *
     * Generated from protobuf field <code>string gmp_organization = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGmpOrganization()
    {
        return $this->gmp_organization;
    }

    /**
     * Output only. The URI for a Google Marketing Platform organization resource.
     * Only set when this account is connected to a GMP organization.
     * Format: marketingplatformadmin.googleapis.com/organizations/{org_id}
     *
     * Generated from protobuf field <code>string gmp_organization = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGmpOrganization($var)
    {
        GPBUtil::checkString($var, True);
        $this->gmp_organization = $var;

        return $this;
    }

}

