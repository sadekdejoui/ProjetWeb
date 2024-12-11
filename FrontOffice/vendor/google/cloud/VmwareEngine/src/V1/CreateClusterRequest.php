<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VmwareEngine.CreateCluster][google.cloud.vmwareengine.v1.VmwareEngine.CreateCluster]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.CreateClusterRequest</code>
 */
class CreateClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the private cloud to create a new cluster
     * in. Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The user-provided identifier of the new `Cluster`.
     * This identifier must be unique among clusters within the parent and becomes
     * the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster_id = '';
    /**
     * Required. The initial description of the new cluster.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster = null;
    /**
     * Optional. The request ID must be a valid UUID with the exception that zero
     * UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. True if you want the request to be validated and not executed;
     * false otherwise.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                $parent    Required. The resource name of the private cloud to create a new cluster
     *                                                         in. Resource names are schemeless URIs that follow the conventions in
     *                                                         https://cloud.google.com/apis/design/resource_names.
     *                                                         For example:
     *                                                         `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *                                                         Please see {@see VmwareEngineClient::privateCloudName()} for help formatting this field.
     * @param \Google\Cloud\VmwareEngine\V1\Cluster $cluster   Required. The initial description of the new cluster.
     * @param string                                $clusterId Required. The user-provided identifier of the new `Cluster`.
     *                                                         This identifier must be unique among clusters within the parent and becomes
     *                                                         the final token in the name URI.
     *                                                         The identifier must meet the following requirements:
     *
     *                                                         * Only contains 1-63 alphanumeric characters and hyphens
     *                                                         * Begins with an alphabetical character
     *                                                         * Ends with a non-hyphen character
     *                                                         * Not formatted as a UUID
     *                                                         * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     *                                                         (section 3.5)
     *
     * @return \Google\Cloud\VmwareEngine\V1\CreateClusterRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\VmwareEngine\V1\Cluster $cluster, string $clusterId): self
    {
        return (new self())
            ->setParent($parent)
            ->setCluster($cluster)
            ->setClusterId($clusterId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the private cloud to create a new cluster
     *           in. Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *     @type string $cluster_id
     *           Required. The user-provided identifier of the new `Cluster`.
     *           This identifier must be unique among clusters within the parent and becomes
     *           the final token in the name URI.
     *           The identifier must meet the following requirements:
     *           * Only contains 1-63 alphanumeric characters and hyphens
     *           * Begins with an alphabetical character
     *           * Ends with a non-hyphen character
     *           * Not formatted as a UUID
     *           * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     *           (section 3.5)
     *     @type \Google\Cloud\VmwareEngine\V1\Cluster $cluster
     *           Required. The initial description of the new cluster.
     *     @type string $request_id
     *           Optional. The request ID must be a valid UUID with the exception that zero
     *           UUID is not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. True if you want the request to be validated and not executed;
     *           false otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the private cloud to create a new cluster
     * in. Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the private cloud to create a new cluster
     * in. Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
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
     * Required. The user-provided identifier of the new `Cluster`.
     * This identifier must be unique among clusters within the parent and becomes
     * the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Required. The user-provided identifier of the new `Cluster`.
     * This identifier must be unique among clusters within the parent and becomes
     * the final token in the name URI.
     * The identifier must meet the following requirements:
     * * Only contains 1-63 alphanumeric characters and hyphens
     * * Begins with an alphabetical character
     * * Ends with a non-hyphen character
     * * Not formatted as a UUID
     * * Complies with [RFC 1034](https://datatracker.ietf.org/doc/html/rfc1034)
     * (section 3.5)
     *
     * Generated from protobuf field <code>string cluster_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. The initial description of the new cluster.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\VmwareEngine\V1\Cluster|null
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    public function hasCluster()
    {
        return isset($this->cluster);
    }

    public function clearCluster()
    {
        unset($this->cluster);
    }

    /**
     * Required. The initial description of the new cluster.
     *
     * Generated from protobuf field <code>.google.cloud.vmwareengine.v1.Cluster cluster = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\VmwareEngine\V1\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VmwareEngine\V1\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

    /**
     * Optional. The request ID must be a valid UUID with the exception that zero
     * UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. The request ID must be a valid UUID with the exception that zero
     * UUID is not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. True if you want the request to be validated and not executed;
     * false otherwise.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. True if you want the request to be validated and not executed;
     * false otherwise.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

