<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/oracledatabase.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for `DbServer.List`.
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.ListDbServersRequest</code>
 */
class ListDbServersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent value for database server in the following format:
     * projects/{project}/locations/{location}/cloudExadataInfrastructures/{cloudExadataInfrastructure}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of items to return.
     * If unspecified, a maximum of 50 db servers will be returned.
     * The maximum value is 1000; values above 1000 will be reset to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent value for database server in the following format:
     *                       projects/{project}/locations/{location}/cloudExadataInfrastructures/{cloudExadataInfrastructure}. Please see
     *                       {@see OracleDatabaseClient::cloudExadataInfrastructureName()} for help formatting this field.
     *
     * @return \Google\Cloud\OracleDatabase\V1\ListDbServersRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent value for database server in the following format:
     *           projects/{project}/locations/{location}/cloudExadataInfrastructures/{cloudExadataInfrastructure}.
     *     @type int $page_size
     *           Optional. The maximum number of items to return.
     *           If unspecified, a maximum of 50 db servers will be returned.
     *           The maximum value is 1000; values above 1000 will be reset to 1000.
     *     @type string $page_token
     *           Optional. A token identifying a page of results the server should return.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\Oracledatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent value for database server in the following format:
     * projects/{project}/locations/{location}/cloudExadataInfrastructures/{cloudExadataInfrastructure}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent value for database server in the following format:
     * projects/{project}/locations/{location}/cloudExadataInfrastructures/{cloudExadataInfrastructure}.
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
     * Optional. The maximum number of items to return.
     * If unspecified, a maximum of 50 db servers will be returned.
     * The maximum value is 1000; values above 1000 will be reset to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of items to return.
     * If unspecified, a maximum of 50 db servers will be returned.
     * The maximum value is 1000; values above 1000 will be reset to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results the server should return.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

