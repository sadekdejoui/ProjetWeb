<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/kubernetes.proto

namespace Google\Cloud\SecurityCenter\V2\Kubernetes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Kubernetes object related to the finding, uniquely identified by GKNN.
 * Used if the object Kind is not one of Pod, Node, NodePool, Binding, or
 * AccessReview.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Kubernetes.Object</code>
 */
class Object extends \Google\Protobuf\Internal\Message
{
    /**
     * Kubernetes object group, such as "policy.k8s.io/v1".
     *
     * Generated from protobuf field <code>string group = 1;</code>
     */
    protected $group = '';
    /**
     * Kubernetes object kind, such as "Namespace".
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     */
    protected $kind = '';
    /**
     * Kubernetes object namespace. Must be a valid DNS label. Named
     * "ns" to avoid collision with C++ namespace keyword. For details see
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/.
     *
     * Generated from protobuf field <code>string ns = 3;</code>
     */
    protected $ns = '';
    /**
     * Kubernetes object name. For details see
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Pod containers associated with this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Container containers = 5;</code>
     */
    private $containers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group
     *           Kubernetes object group, such as "policy.k8s.io/v1".
     *     @type string $kind
     *           Kubernetes object kind, such as "Namespace".
     *     @type string $ns
     *           Kubernetes object namespace. Must be a valid DNS label. Named
     *           "ns" to avoid collision with C++ namespace keyword. For details see
     *           https://kubernetes.io/docs/tasks/administer-cluster/namespaces/.
     *     @type string $name
     *           Kubernetes object name. For details see
     *           https://kubernetes.io/docs/concepts/overview/working-with-objects/names/.
     *     @type array<\Google\Cloud\SecurityCenter\V2\Container>|\Google\Protobuf\Internal\RepeatedField $containers
     *           Pod containers associated with this finding, if any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Kubernetes::initOnce();
        parent::__construct($data);
    }

    /**
     * Kubernetes object group, such as "policy.k8s.io/v1".
     *
     * Generated from protobuf field <code>string group = 1;</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Kubernetes object group, such as "policy.k8s.io/v1".
     *
     * Generated from protobuf field <code>string group = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * Kubernetes object kind, such as "Namespace".
     *
     * Generated from protobuf field <code>string kind = 2;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Kubernetes object kind, such as "Namespace".
     *
     * Generated from protobuf field <code>string kind = 2;</code>
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
     * Kubernetes object namespace. Must be a valid DNS label. Named
     * "ns" to avoid collision with C++ namespace keyword. For details see
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/.
     *
     * Generated from protobuf field <code>string ns = 3;</code>
     * @return string
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * Kubernetes object namespace. Must be a valid DNS label. Named
     * "ns" to avoid collision with C++ namespace keyword. For details see
     * https://kubernetes.io/docs/tasks/administer-cluster/namespaces/.
     *
     * Generated from protobuf field <code>string ns = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNs($var)
    {
        GPBUtil::checkString($var, True);
        $this->ns = $var;

        return $this;
    }

    /**
     * Kubernetes object name. For details see
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/.
     *
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Kubernetes object name. For details see
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/.
     *
     * Generated from protobuf field <code>string name = 4;</code>
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
     * Pod containers associated with this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Container containers = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContainers()
    {
        return $this->containers;
    }

    /**
     * Pod containers associated with this finding, if any.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Container containers = 5;</code>
     * @param array<\Google\Cloud\SecurityCenter\V2\Container>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContainers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V2\Container::class);
        $this->containers = $arr;

        return $this;
    }

}


