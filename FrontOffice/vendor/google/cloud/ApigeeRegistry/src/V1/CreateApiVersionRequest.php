<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateApiVersion.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.CreateApiVersionRequest</code>
 */
class CreateApiVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent, which owns this collection of versions.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The version to create.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.ApiVersion api_version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $api_version = null;
    /**
     * Required. The ID to use for the version, which will become the final component of
     * the version's resource name.
     * This value should be 1-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     * Following AIP-162, IDs must not have the form of a UUID.
     *
     * Generated from protobuf field <code>string api_version_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $api_version_id = '';

    /**
     * @param string                                     $parent       Required. The parent, which owns this collection of versions.
     *                                                                 Format: `projects/&#42;/locations/&#42;/apis/*`
     *                                                                 Please see {@see RegistryClient::apiName()} for help formatting this field.
     * @param \Google\Cloud\ApigeeRegistry\V1\ApiVersion $apiVersion   Required. The version to create.
     * @param string                                     $apiVersionId Required. The ID to use for the version, which will become the final component of
     *                                                                 the version's resource name.
     *
     *                                                                 This value should be 1-63 characters, and valid characters
     *                                                                 are /[a-z][0-9]-/.
     *
     *                                                                 Following AIP-162, IDs must not have the form of a UUID.
     *
     * @return \Google\Cloud\ApigeeRegistry\V1\CreateApiVersionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ApigeeRegistry\V1\ApiVersion $apiVersion, string $apiVersionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setApiVersion($apiVersion)
            ->setApiVersionId($apiVersionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent, which owns this collection of versions.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;`
     *     @type \Google\Cloud\ApigeeRegistry\V1\ApiVersion $api_version
     *           Required. The version to create.
     *     @type string $api_version_id
     *           Required. The ID to use for the version, which will become the final component of
     *           the version's resource name.
     *           This value should be 1-63 characters, and valid characters
     *           are /[a-z][0-9]-/.
     *           Following AIP-162, IDs must not have the form of a UUID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent, which owns this collection of versions.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent, which owns this collection of versions.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;`
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
     * Required. The version to create.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.ApiVersion api_version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApigeeRegistry\V1\ApiVersion|null
     */
    public function getApiVersion()
    {
        return $this->api_version;
    }

    public function hasApiVersion()
    {
        return isset($this->api_version);
    }

    public function clearApiVersion()
    {
        unset($this->api_version);
    }

    /**
     * Required. The version to create.
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.ApiVersion api_version = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApigeeRegistry\V1\ApiVersion $var
     * @return $this
     */
    public function setApiVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApigeeRegistry\V1\ApiVersion::class);
        $this->api_version = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the version, which will become the final component of
     * the version's resource name.
     * This value should be 1-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     * Following AIP-162, IDs must not have the form of a UUID.
     *
     * Generated from protobuf field <code>string api_version_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getApiVersionId()
    {
        return $this->api_version_id;
    }

    /**
     * Required. The ID to use for the version, which will become the final component of
     * the version's resource name.
     * This value should be 1-63 characters, and valid characters
     * are /[a-z][0-9]-/.
     * Following AIP-162, IDs must not have the form of a UUID.
     *
     * Generated from protobuf field <code>string api_version_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setApiVersionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_version_id = $var;

        return $this;
    }

}

