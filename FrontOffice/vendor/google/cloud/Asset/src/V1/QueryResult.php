<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execution results of the query.
 * The result is formatted as rows represented by BigQuery compatible [schema].
 * When pagination is necessary, it will contains the page token to retrieve
 * the results of following pages.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.QueryResult</code>
 */
class QueryResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Each row hold a query result in the format of `Struct`.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Struct rows = 1;</code>
     */
    private $rows;
    /**
     * Describes the format of the [rows].
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.TableSchema schema = 2;</code>
     */
    protected $schema = null;
    /**
     * Token to retrieve the next page of the results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    protected $next_page_token = '';
    /**
     * Total rows of the whole query results.
     *
     * Generated from protobuf field <code>int64 total_rows = 4;</code>
     */
    protected $total_rows = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Protobuf\Struct>|\Google\Protobuf\Internal\RepeatedField $rows
     *           Each row hold a query result in the format of `Struct`.
     *     @type \Google\Cloud\Asset\V1\TableSchema $schema
     *           Describes the format of the [rows].
     *     @type string $next_page_token
     *           Token to retrieve the next page of the results.
     *     @type int|string $total_rows
     *           Total rows of the whole query results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Each row hold a query result in the format of `Struct`.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Struct rows = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Each row hold a query result in the format of `Struct`.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Struct rows = 1;</code>
     * @param array<\Google\Protobuf\Struct>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Struct::class);
        $this->rows = $arr;

        return $this;
    }

    /**
     * Describes the format of the [rows].
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.TableSchema schema = 2;</code>
     * @return \Google\Cloud\Asset\V1\TableSchema|null
     */
    public function getSchema()
    {
        return $this->schema;
    }

    public function hasSchema()
    {
        return isset($this->schema);
    }

    public function clearSchema()
    {
        unset($this->schema);
    }

    /**
     * Describes the format of the [rows].
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.TableSchema schema = 2;</code>
     * @param \Google\Cloud\Asset\V1\TableSchema $var
     * @return $this
     */
    public function setSchema($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\TableSchema::class);
        $this->schema = $var;

        return $this;
    }

    /**
     * Token to retrieve the next page of the results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of the results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * Total rows of the whole query results.
     *
     * Generated from protobuf field <code>int64 total_rows = 4;</code>
     * @return int|string
     */
    public function getTotalRows()
    {
        return $this->total_rows;
    }

    /**
     * Total rows of the whole query results.
     *
     * Generated from protobuf field <code>int64 total_rows = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalRows($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_rows = $var;

        return $this;
    }

}

