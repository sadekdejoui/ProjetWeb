<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/memcache/v1/cloud_memcache.proto

namespace Google\Cloud\Memcache\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [ApplyParameters][google.cloud.memcache.v1.CloudMemcache.ApplyParameters].
 *
 * Generated from protobuf message <code>google.cloud.memcache.v1.ApplyParametersRequest</code>
 */
class ApplyParametersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the Memcached instance for which parameter group updates
     * should be applied.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Nodes to which the instance-level parameter group is applied.
     *
     * Generated from protobuf field <code>repeated string node_ids = 2;</code>
     */
    private $node_ids;
    /**
     * Whether to apply instance-level parameter group to all nodes. If set to
     * true, users are restricted from specifying individual nodes, and
     * `ApplyParameters` updates all nodes within the instance.
     *
     * Generated from protobuf field <code>bool apply_all = 3;</code>
     */
    protected $apply_all = false;

    /**
     * @param string   $name     Required. Resource name of the Memcached instance for which parameter group updates
     *                           should be applied. Please see
     *                           {@see CloudMemcacheClient::instanceName()} for help formatting this field.
     * @param string[] $nodeIds  Nodes to which the instance-level parameter group is applied.
     * @param bool     $applyAll Whether to apply instance-level parameter group to all nodes. If set to
     *                           true, users are restricted from specifying individual nodes, and
     *                           `ApplyParameters` updates all nodes within the instance.
     *
     * @return \Google\Cloud\Memcache\V1\ApplyParametersRequest
     *
     * @experimental
     */
    public static function build(string $name, array $nodeIds, bool $applyAll): self
    {
        return (new self())
            ->setName($name)
            ->setNodeIds($nodeIds)
            ->setApplyAll($applyAll);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Resource name of the Memcached instance for which parameter group updates
     *           should be applied.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $node_ids
     *           Nodes to which the instance-level parameter group is applied.
     *     @type bool $apply_all
     *           Whether to apply instance-level parameter group to all nodes. If set to
     *           true, users are restricted from specifying individual nodes, and
     *           `ApplyParameters` updates all nodes within the instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Memcache\V1\CloudMemcache::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the Memcached instance for which parameter group updates
     * should be applied.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the Memcached instance for which parameter group updates
     * should be applied.
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
     * Nodes to which the instance-level parameter group is applied.
     *
     * Generated from protobuf field <code>repeated string node_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeIds()
    {
        return $this->node_ids;
    }

    /**
     * Nodes to which the instance-level parameter group is applied.
     *
     * Generated from protobuf field <code>repeated string node_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->node_ids = $arr;

        return $this;
    }

    /**
     * Whether to apply instance-level parameter group to all nodes. If set to
     * true, users are restricted from specifying individual nodes, and
     * `ApplyParameters` updates all nodes within the instance.
     *
     * Generated from protobuf field <code>bool apply_all = 3;</code>
     * @return bool
     */
    public function getApplyAll()
    {
        return $this->apply_all;
    }

    /**
     * Whether to apply instance-level parameter group to all nodes. If set to
     * true, users are restricted from specifying individual nodes, and
     * `ApplyParameters` updates all nodes within the instance.
     *
     * Generated from protobuf field <code>bool apply_all = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setApplyAll($var)
    {
        GPBUtil::checkBool($var);
        $this->apply_all = $var;

        return $this;
    }

}

