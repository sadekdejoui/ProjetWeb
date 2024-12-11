<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A GroupPlacementPolicy specifies resource placement configuration. It specifies the failure bucket separation
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.ResourcePolicyGroupPlacementPolicy</code>
 */
class ResourcePolicyGroupPlacementPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of availability domains to spread instances across. If two instances are in different availability domain, they are not in the same low latency network.
     *
     * Generated from protobuf field <code>optional int32 availability_domain_count = 12453432;</code>
     */
    private $availability_domain_count = null;
    /**
     * Specifies network collocation
     * Check the Collocation enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string collocation = 511156533;</code>
     */
    private $collocation = null;
    /**
     * Number of VMs in this placement group. Google does not recommend that you use this field unless you use a compact policy and you want your policy to work only if it contains this exact number of VMs.
     *
     * Generated from protobuf field <code>optional int32 vm_count = 261463431;</code>
     */
    private $vm_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $availability_domain_count
     *           The number of availability domains to spread instances across. If two instances are in different availability domain, they are not in the same low latency network.
     *     @type string $collocation
     *           Specifies network collocation
     *           Check the Collocation enum for the list of possible values.
     *     @type int $vm_count
     *           Number of VMs in this placement group. Google does not recommend that you use this field unless you use a compact policy and you want your policy to work only if it contains this exact number of VMs.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of availability domains to spread instances across. If two instances are in different availability domain, they are not in the same low latency network.
     *
     * Generated from protobuf field <code>optional int32 availability_domain_count = 12453432;</code>
     * @return int
     */
    public function getAvailabilityDomainCount()
    {
        return isset($this->availability_domain_count) ? $this->availability_domain_count : 0;
    }

    public function hasAvailabilityDomainCount()
    {
        return isset($this->availability_domain_count);
    }

    public function clearAvailabilityDomainCount()
    {
        unset($this->availability_domain_count);
    }

    /**
     * The number of availability domains to spread instances across. If two instances are in different availability domain, they are not in the same low latency network.
     *
     * Generated from protobuf field <code>optional int32 availability_domain_count = 12453432;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailabilityDomainCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->availability_domain_count = $var;

        return $this;
    }

    /**
     * Specifies network collocation
     * Check the Collocation enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string collocation = 511156533;</code>
     * @return string
     */
    public function getCollocation()
    {
        return isset($this->collocation) ? $this->collocation : '';
    }

    public function hasCollocation()
    {
        return isset($this->collocation);
    }

    public function clearCollocation()
    {
        unset($this->collocation);
    }

    /**
     * Specifies network collocation
     * Check the Collocation enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string collocation = 511156533;</code>
     * @param string $var
     * @return $this
     */
    public function setCollocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->collocation = $var;

        return $this;
    }

    /**
     * Number of VMs in this placement group. Google does not recommend that you use this field unless you use a compact policy and you want your policy to work only if it contains this exact number of VMs.
     *
     * Generated from protobuf field <code>optional int32 vm_count = 261463431;</code>
     * @return int
     */
    public function getVmCount()
    {
        return isset($this->vm_count) ? $this->vm_count : 0;
    }

    public function hasVmCount()
    {
        return isset($this->vm_count);
    }

    public function clearVmCount()
    {
        unset($this->vm_count);
    }

    /**
     * Number of VMs in this placement group. Google does not recommend that you use this field unless you use a compact policy and you want your policy to work only if it contains this exact number of VMs.
     *
     * Generated from protobuf field <code>optional int32 vm_count = 261463431;</code>
     * @param int $var
     * @return $this
     */
    public function setVmCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->vm_count = $var;

        return $this;
    }

}

