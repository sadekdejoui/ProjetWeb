<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Project resource. A project is used to organize resources in a Google Cloud Platform environment. For more information, read about the Resource Hierarchy.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Project</code>
 */
class Project extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] The Cloud Armor tier for this project. It can be one of the following values: CA_STANDARD, CA_ENTERPRISE_PAYGO. If this field is not specified, it is assumed to be CA_STANDARD.
     * Check the CloudArmorTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string cloud_armor_tier = 4427052;</code>
     */
    private $cloud_armor_tier = null;
    /**
     * Metadata key/value pairs available to all instances contained in this project. See Custom metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata common_instance_metadata = 185794117;</code>
     */
    private $common_instance_metadata = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * This signifies the default network tier used for configuring resources of the project and can only take the following values: PREMIUM, STANDARD. Initially the default network tier is PREMIUM.
     * Check the DefaultNetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string default_network_tier = 471753361;</code>
     */
    private $default_network_tier = null;
    /**
     * [Output Only] Default service account used by VMs running in this project.
     *
     * Generated from protobuf field <code>optional string default_service_account = 298712229;</code>
     */
    private $default_service_account = null;
    /**
     * An optional textual description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Restricted features enabled for use on this project.
     *
     * Generated from protobuf field <code>repeated string enabled_features = 469017467;</code>
     */
    private $enabled_features;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server. This is *not* the project ID, and is just a unique ID used by Compute Engine to identify resources.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#project for projects.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * The project ID. For example: my-example-project. Use the project ID to make requests to Compute Engine.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] Quotas assigned to this project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Quota quotas = 125341947;</code>
     */
    private $quotas;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * The naming prefix for daily usage reports and the Google Cloud Storage bucket where they are stored.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.UsageExportLocation usage_export_location = 347543874;</code>
     */
    private $usage_export_location = null;
    /**
     * [Output Only] Default internal DNS setting used by VMs running in this project.
     * Check the VmDnsSetting enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string vm_dns_setting = 58856370;</code>
     */
    private $vm_dns_setting = null;
    /**
     * [Output Only] The role this project has in a shared VPC configuration. Currently, only projects with the host role, which is specified by the value HOST, are differentiated.
     * Check the XpnProjectStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string xpn_project_status = 228419265;</code>
     */
    private $xpn_project_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cloud_armor_tier
     *           [Output Only] The Cloud Armor tier for this project. It can be one of the following values: CA_STANDARD, CA_ENTERPRISE_PAYGO. If this field is not specified, it is assumed to be CA_STANDARD.
     *           Check the CloudArmorTier enum for the list of possible values.
     *     @type \Google\Cloud\Compute\V1\Metadata $common_instance_metadata
     *           Metadata key/value pairs available to all instances contained in this project. See Custom metadata for more information.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $default_network_tier
     *           This signifies the default network tier used for configuring resources of the project and can only take the following values: PREMIUM, STANDARD. Initially the default network tier is PREMIUM.
     *           Check the DefaultNetworkTier enum for the list of possible values.
     *     @type string $default_service_account
     *           [Output Only] Default service account used by VMs running in this project.
     *     @type string $description
     *           An optional textual description of the resource.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $enabled_features
     *           Restricted features enabled for use on this project.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server. This is *not* the project ID, and is just a unique ID used by Compute Engine to identify resources.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#project for projects.
     *     @type string $name
     *           The project ID. For example: my-example-project. Use the project ID to make requests to Compute Engine.
     *     @type array<\Google\Cloud\Compute\V1\Quota>|\Google\Protobuf\Internal\RepeatedField $quotas
     *           [Output Only] Quotas assigned to this project.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type \Google\Cloud\Compute\V1\UsageExportLocation $usage_export_location
     *           The naming prefix for daily usage reports and the Google Cloud Storage bucket where they are stored.
     *     @type string $vm_dns_setting
     *           [Output Only] Default internal DNS setting used by VMs running in this project.
     *           Check the VmDnsSetting enum for the list of possible values.
     *     @type string $xpn_project_status
     *           [Output Only] The role this project has in a shared VPC configuration. Currently, only projects with the host role, which is specified by the value HOST, are differentiated.
     *           Check the XpnProjectStatus enum for the list of possible values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] The Cloud Armor tier for this project. It can be one of the following values: CA_STANDARD, CA_ENTERPRISE_PAYGO. If this field is not specified, it is assumed to be CA_STANDARD.
     * Check the CloudArmorTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string cloud_armor_tier = 4427052;</code>
     * @return string
     */
    public function getCloudArmorTier()
    {
        return isset($this->cloud_armor_tier) ? $this->cloud_armor_tier : '';
    }

    public function hasCloudArmorTier()
    {
        return isset($this->cloud_armor_tier);
    }

    public function clearCloudArmorTier()
    {
        unset($this->cloud_armor_tier);
    }

    /**
     * [Output Only] The Cloud Armor tier for this project. It can be one of the following values: CA_STANDARD, CA_ENTERPRISE_PAYGO. If this field is not specified, it is assumed to be CA_STANDARD.
     * Check the CloudArmorTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string cloud_armor_tier = 4427052;</code>
     * @param string $var
     * @return $this
     */
    public function setCloudArmorTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->cloud_armor_tier = $var;

        return $this;
    }

    /**
     * Metadata key/value pairs available to all instances contained in this project. See Custom metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata common_instance_metadata = 185794117;</code>
     * @return \Google\Cloud\Compute\V1\Metadata|null
     */
    public function getCommonInstanceMetadata()
    {
        return $this->common_instance_metadata;
    }

    public function hasCommonInstanceMetadata()
    {
        return isset($this->common_instance_metadata);
    }

    public function clearCommonInstanceMetadata()
    {
        unset($this->common_instance_metadata);
    }

    /**
     * Metadata key/value pairs available to all instances contained in this project. See Custom metadata for more information.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.Metadata common_instance_metadata = 185794117;</code>
     * @param \Google\Cloud\Compute\V1\Metadata $var
     * @return $this
     */
    public function setCommonInstanceMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\Metadata::class);
        $this->common_instance_metadata = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * This signifies the default network tier used for configuring resources of the project and can only take the following values: PREMIUM, STANDARD. Initially the default network tier is PREMIUM.
     * Check the DefaultNetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string default_network_tier = 471753361;</code>
     * @return string
     */
    public function getDefaultNetworkTier()
    {
        return isset($this->default_network_tier) ? $this->default_network_tier : '';
    }

    public function hasDefaultNetworkTier()
    {
        return isset($this->default_network_tier);
    }

    public function clearDefaultNetworkTier()
    {
        unset($this->default_network_tier);
    }

    /**
     * This signifies the default network tier used for configuring resources of the project and can only take the following values: PREMIUM, STANDARD. Initially the default network tier is PREMIUM.
     * Check the DefaultNetworkTier enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string default_network_tier = 471753361;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultNetworkTier($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_network_tier = $var;

        return $this;
    }

    /**
     * [Output Only] Default service account used by VMs running in this project.
     *
     * Generated from protobuf field <code>optional string default_service_account = 298712229;</code>
     * @return string
     */
    public function getDefaultServiceAccount()
    {
        return isset($this->default_service_account) ? $this->default_service_account : '';
    }

    public function hasDefaultServiceAccount()
    {
        return isset($this->default_service_account);
    }

    public function clearDefaultServiceAccount()
    {
        unset($this->default_service_account);
    }

    /**
     * [Output Only] Default service account used by VMs running in this project.
     *
     * Generated from protobuf field <code>optional string default_service_account = 298712229;</code>
     * @param string $var
     * @return $this
     */
    public function setDefaultServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->default_service_account = $var;

        return $this;
    }

    /**
     * An optional textual description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional textual description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Restricted features enabled for use on this project.
     *
     * Generated from protobuf field <code>repeated string enabled_features = 469017467;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnabledFeatures()
    {
        return $this->enabled_features;
    }

    /**
     * Restricted features enabled for use on this project.
     *
     * Generated from protobuf field <code>repeated string enabled_features = 469017467;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnabledFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->enabled_features = $arr;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server. This is *not* the project ID, and is just a unique ID used by Compute Engine to identify resources.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server. This is *not* the project ID, and is just a unique ID used by Compute Engine to identify resources.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#project for projects.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#project for projects.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The project ID. For example: my-example-project. Use the project ID to make requests to Compute Engine.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The project ID. For example: my-example-project. Use the project ID to make requests to Compute Engine.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
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
     * [Output Only] Quotas assigned to this project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Quota quotas = 125341947;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuotas()
    {
        return $this->quotas;
    }

    /**
     * [Output Only] Quotas assigned to this project.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.Quota quotas = 125341947;</code>
     * @param array<\Google\Cloud\Compute\V1\Quota>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuotas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\Quota::class);
        $this->quotas = $arr;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * The naming prefix for daily usage reports and the Google Cloud Storage bucket where they are stored.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.UsageExportLocation usage_export_location = 347543874;</code>
     * @return \Google\Cloud\Compute\V1\UsageExportLocation|null
     */
    public function getUsageExportLocation()
    {
        return $this->usage_export_location;
    }

    public function hasUsageExportLocation()
    {
        return isset($this->usage_export_location);
    }

    public function clearUsageExportLocation()
    {
        unset($this->usage_export_location);
    }

    /**
     * The naming prefix for daily usage reports and the Google Cloud Storage bucket where they are stored.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.UsageExportLocation usage_export_location = 347543874;</code>
     * @param \Google\Cloud\Compute\V1\UsageExportLocation $var
     * @return $this
     */
    public function setUsageExportLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\UsageExportLocation::class);
        $this->usage_export_location = $var;

        return $this;
    }

    /**
     * [Output Only] Default internal DNS setting used by VMs running in this project.
     * Check the VmDnsSetting enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string vm_dns_setting = 58856370;</code>
     * @return string
     */
    public function getVmDnsSetting()
    {
        return isset($this->vm_dns_setting) ? $this->vm_dns_setting : '';
    }

    public function hasVmDnsSetting()
    {
        return isset($this->vm_dns_setting);
    }

    public function clearVmDnsSetting()
    {
        unset($this->vm_dns_setting);
    }

    /**
     * [Output Only] Default internal DNS setting used by VMs running in this project.
     * Check the VmDnsSetting enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string vm_dns_setting = 58856370;</code>
     * @param string $var
     * @return $this
     */
    public function setVmDnsSetting($var)
    {
        GPBUtil::checkString($var, True);
        $this->vm_dns_setting = $var;

        return $this;
    }

    /**
     * [Output Only] The role this project has in a shared VPC configuration. Currently, only projects with the host role, which is specified by the value HOST, are differentiated.
     * Check the XpnProjectStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string xpn_project_status = 228419265;</code>
     * @return string
     */
    public function getXpnProjectStatus()
    {
        return isset($this->xpn_project_status) ? $this->xpn_project_status : '';
    }

    public function hasXpnProjectStatus()
    {
        return isset($this->xpn_project_status);
    }

    public function clearXpnProjectStatus()
    {
        unset($this->xpn_project_status);
    }

    /**
     * [Output Only] The role this project has in a shared VPC configuration. Currently, only projects with the host role, which is specified by the value HOST, are differentiated.
     * Check the XpnProjectStatus enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string xpn_project_status = 228419265;</code>
     * @param string $var
     * @return $this
     */
    public function setXpnProjectStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->xpn_project_status = $var;

        return $this;
    }

}

