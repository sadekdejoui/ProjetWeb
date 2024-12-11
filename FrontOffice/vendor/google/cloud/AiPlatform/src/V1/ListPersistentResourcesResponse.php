<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/persistent_resource_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [PersistentResourceService.ListPersistentResources][google.cloud.aiplatform.v1.PersistentResourceService.ListPersistentResources]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListPersistentResourcesResponse</code>
 */
class ListPersistentResourcesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.PersistentResource persistent_resources = 1;</code>
     */
    private $persistent_resources;
    /**
     * A token to retrieve next page of results.
     * Pass to
     * [ListPersistentResourcesRequest.page_token][google.cloud.aiplatform.v1.ListPersistentResourcesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AIPlatform\V1\PersistentResource>|\Google\Protobuf\Internal\RepeatedField $persistent_resources
     *     @type string $next_page_token
     *           A token to retrieve next page of results.
     *           Pass to
     *           [ListPersistentResourcesRequest.page_token][google.cloud.aiplatform.v1.ListPersistentResourcesRequest.page_token]
     *           to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PersistentResourceService::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.PersistentResource persistent_resources = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPersistentResources()
    {
        return $this->persistent_resources;
    }

    /**
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.PersistentResource persistent_resources = 1;</code>
     * @param array<\Google\Cloud\AIPlatform\V1\PersistentResource>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPersistentResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\PersistentResource::class);
        $this->persistent_resources = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to
     * [ListPersistentResourcesRequest.page_token][google.cloud.aiplatform.v1.ListPersistentResourcesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to
     * [ListPersistentResourcesRequest.page_token][google.cloud.aiplatform.v1.ListPersistentResourcesRequest.page_token]
     * to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

