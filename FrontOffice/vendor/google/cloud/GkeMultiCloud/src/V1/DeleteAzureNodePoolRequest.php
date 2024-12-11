<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/azure_service.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `AzureClusters.DeleteAzureNodePool` method.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.DeleteAzureNodePoolRequest</code>
 */
class DeleteAzureNodePoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] to delete.
     * `AzureNodePool` names are formatted as
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * If set, only validate the request, but do not actually delete the node
     * pool.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     */
    protected $validate_only = false;
    /**
     * If set to true, and the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] resource is
     * not found, the request will succeed but no action will be taken on the
     * server and a completed [Operation][google.longrunning.Operation] will be
     * returned.
     * Useful for idempotent deletion.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    protected $allow_missing = false;
    /**
     * The current ETag of the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool].
     * Allows clients to perform deletions through optimistic concurrency control.
     * If the provided ETag does not match the current etag of the node pool,
     * the request will fail and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     */
    protected $etag = '';
    /**
     * Optional. If set to true, the deletion of
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] resource will
     * succeed even if errors occur during deleting in node pool resources. Using
     * this parameter may result in orphaned resources in the node pool.
     *
     * Generated from protobuf field <code>bool ignore_errors = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $ignore_errors = false;

    /**
     * @param string $name Required. The resource name the
     *                     [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] to delete.
     *
     *                     `AzureNodePool` names are formatted as
     *                     `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     *
     *                     See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *                     for more details on Google Cloud resource names. Please see
     *                     {@see AzureClustersClient::azureNodePoolName()} for help formatting this field.
     *
     * @return \Google\Cloud\GkeMultiCloud\V1\DeleteAzureNodePoolRequest
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
     *           Required. The resource name the
     *           [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] to delete.
     *           `AzureNodePool` names are formatted as
     *           `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     *           See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     *           for more details on Google Cloud resource names.
     *     @type bool $validate_only
     *           If set, only validate the request, but do not actually delete the node
     *           pool.
     *     @type bool $allow_missing
     *           If set to true, and the
     *           [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] resource is
     *           not found, the request will succeed but no action will be taken on the
     *           server and a completed [Operation][google.longrunning.Operation] will be
     *           returned.
     *           Useful for idempotent deletion.
     *     @type string $etag
     *           The current ETag of the
     *           [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool].
     *           Allows clients to perform deletions through optimistic concurrency control.
     *           If the provided ETag does not match the current etag of the node pool,
     *           the request will fail and an ABORTED error will be returned.
     *     @type bool $ignore_errors
     *           Optional. If set to true, the deletion of
     *           [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] resource will
     *           succeed even if errors occur during deleting in node pool resources. Using
     *           this parameter may result in orphaned resources in the node pool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AzureService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] to delete.
     * `AzureNodePool` names are formatted as
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] to delete.
     * `AzureNodePool` names are formatted as
     * `projects/<project-id>/locations/<region>/azureClusters/<cluster-id>/azureNodePools/<node-pool-id>`.
     * See [Resource Names](https://cloud.google.com/apis/design/resource_names)
     * for more details on Google Cloud resource names.
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
     * If set, only validate the request, but do not actually delete the node
     * pool.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If set, only validate the request, but do not actually delete the node
     * pool.
     *
     * Generated from protobuf field <code>bool validate_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * If set to true, and the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] resource is
     * not found, the request will succeed but no action will be taken on the
     * server and a completed [Operation][google.longrunning.Operation] will be
     * returned.
     * Useful for idempotent deletion.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] resource is
     * not found, the request will succeed but no action will be taken on the
     * server and a completed [Operation][google.longrunning.Operation] will be
     * returned.
     * Useful for idempotent deletion.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

    /**
     * The current ETag of the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool].
     * Allows clients to perform deletions through optimistic concurrency control.
     * If the provided ETag does not match the current etag of the node pool,
     * the request will fail and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * The current ETag of the
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool].
     * Allows clients to perform deletions through optimistic concurrency control.
     * If the provided ETag does not match the current etag of the node pool,
     * the request will fail and an ABORTED error will be returned.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional. If set to true, the deletion of
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] resource will
     * succeed even if errors occur during deleting in node pool resources. Using
     * this parameter may result in orphaned resources in the node pool.
     *
     * Generated from protobuf field <code>bool ignore_errors = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getIgnoreErrors()
    {
        return $this->ignore_errors;
    }

    /**
     * Optional. If set to true, the deletion of
     * [AzureNodePool][google.cloud.gkemulticloud.v1.AzureNodePool] resource will
     * succeed even if errors occur during deleting in node pool resources. Using
     * this parameter may result in orphaned resources in the node pool.
     *
     * Generated from protobuf field <code>bool ignore_errors = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreErrors($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_errors = $var;

        return $this;
    }

}

