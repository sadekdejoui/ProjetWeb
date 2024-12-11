<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vmwareengine/v1/vmwareengine.proto

namespace Google\Cloud\VmwareEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VmwareEngine.ShowVcenterCredentials][google.cloud.vmwareengine.v1.VmwareEngine.ShowVcenterCredentials]
 *
 * Generated from protobuf message <code>google.cloud.vmwareengine.v1.ShowVcenterCredentialsRequest</code>
 */
class ShowVcenterCredentialsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the private cloud
     * to be queried for credentials.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string private_cloud = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $private_cloud = '';
    /**
     * Optional. The username of the user to be queried for credentials.
     * The default value of this field is CloudOwner&#64;gve.local.
     * The provided value must be one of the following:
     * CloudOwner&#64;gve.local,
     * solution-user-01&#64;gve.local,
     * solution-user-02&#64;gve.local,
     * solution-user-03&#64;gve.local,
     * solution-user-04&#64;gve.local,
     * solution-user-05&#64;gve.local,
     * zertoadmin&#64;gve.local.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $username = '';

    /**
     * @param string $privateCloud Required. The resource name of the private cloud
     *                             to be queried for credentials.
     *                             Resource names are schemeless URIs that follow the conventions in
     *                             https://cloud.google.com/apis/design/resource_names.
     *                             For example:
     *                             `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *                             Please see {@see VmwareEngineClient::privateCloudName()} for help formatting this field.
     *
     * @return \Google\Cloud\VmwareEngine\V1\ShowVcenterCredentialsRequest
     *
     * @experimental
     */
    public static function build(string $privateCloud): self
    {
        return (new self())
            ->setPrivateCloud($privateCloud);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $private_cloud
     *           Required. The resource name of the private cloud
     *           to be queried for credentials.
     *           Resource names are schemeless URIs that follow the conventions in
     *           https://cloud.google.com/apis/design/resource_names.
     *           For example:
     *           `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *     @type string $username
     *           Optional. The username of the user to be queried for credentials.
     *           The default value of this field is CloudOwner&#64;gve.local.
     *           The provided value must be one of the following:
     *           CloudOwner&#64;gve.local,
     *           solution-user-01&#64;gve.local,
     *           solution-user-02&#64;gve.local,
     *           solution-user-03&#64;gve.local,
     *           solution-user-04&#64;gve.local,
     *           solution-user-05&#64;gve.local,
     *           zertoadmin&#64;gve.local.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vmwareengine\V1\Vmwareengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the private cloud
     * to be queried for credentials.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string private_cloud = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getPrivateCloud()
    {
        return $this->private_cloud;
    }

    /**
     * Required. The resource name of the private cloud
     * to be queried for credentials.
     * Resource names are schemeless URIs that follow the conventions in
     * https://cloud.google.com/apis/design/resource_names.
     * For example:
     * `projects/my-project/locations/us-central1-a/privateClouds/my-cloud`
     *
     * Generated from protobuf field <code>string private_cloud = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateCloud($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_cloud = $var;

        return $this;
    }

    /**
     * Optional. The username of the user to be queried for credentials.
     * The default value of this field is CloudOwner&#64;gve.local.
     * The provided value must be one of the following:
     * CloudOwner&#64;gve.local,
     * solution-user-01&#64;gve.local,
     * solution-user-02&#64;gve.local,
     * solution-user-03&#64;gve.local,
     * solution-user-04&#64;gve.local,
     * solution-user-05&#64;gve.local,
     * zertoadmin&#64;gve.local.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Optional. The username of the user to be queried for credentials.
     * The default value of this field is CloudOwner&#64;gve.local.
     * The provided value must be one of the following:
     * CloudOwner&#64;gve.local,
     * solution-user-01&#64;gve.local,
     * solution-user-02&#64;gve.local,
     * solution-user-03&#64;gve.local,
     * solution-user-04&#64;gve.local,
     * solution-user-05&#64;gve.local,
     * zertoadmin&#64;gve.local.
     *
     * Generated from protobuf field <code>string username = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

}

