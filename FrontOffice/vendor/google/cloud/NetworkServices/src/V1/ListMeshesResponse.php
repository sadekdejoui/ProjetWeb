<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/mesh.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response returned by the ListMeshes method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.ListMeshesResponse</code>
 */
class ListMeshesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of Mesh resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.Mesh meshes = 1;</code>
     */
    private $meshes;
    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
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
     *     @type array<\Google\Cloud\NetworkServices\V1\Mesh>|\Google\Protobuf\Internal\RepeatedField $meshes
     *           List of Mesh resources.
     *     @type string $next_page_token
     *           If there might be more results than those appearing in this response, then
     *           `next_page_token` is included. To get the next set of results, call this
     *           method again using the value of `next_page_token` as `page_token`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * List of Mesh resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.Mesh meshes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMeshes()
    {
        return $this->meshes;
    }

    /**
     * List of Mesh resources.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.Mesh meshes = 1;</code>
     * @param array<\Google\Cloud\NetworkServices\V1\Mesh>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMeshes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkServices\V1\Mesh::class);
        $this->meshes = $arr;

        return $this;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If there might be more results than those appearing in this response, then
     * `next_page_token` is included. To get the next set of results, call this
     * method again using the value of `next_page_token` as `page_token`.
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

