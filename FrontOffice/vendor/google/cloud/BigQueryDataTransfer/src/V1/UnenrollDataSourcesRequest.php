<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/datatransfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to unenroll a set of data sources so they are no longer visible in
 * the BigQuery UI's `Transfer` tab.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.datatransfer.v1.UnenrollDataSourcesRequest</code>
 */
class UnenrollDataSourcesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the project resource in the form:
     * `projects/{project_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Data sources that are unenrolled. It is required to provide at least one
     * data source id.
     *
     * Generated from protobuf field <code>repeated string data_source_ids = 2;</code>
     */
    private $data_source_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the project resource in the form:
     *           `projects/{project_id}`
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $data_source_ids
     *           Data sources that are unenrolled. It is required to provide at least one
     *           data source id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Datatransfer\V1\Datatransfer::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the project resource in the form:
     * `projects/{project_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the project resource in the form:
     * `projects/{project_id}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Data sources that are unenrolled. It is required to provide at least one
     * data source id.
     *
     * Generated from protobuf field <code>repeated string data_source_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataSourceIds()
    {
        return $this->data_source_ids;
    }

    /**
     * Data sources that are unenrolled. It is required to provide at least one
     * data source id.
     *
     * Generated from protobuf field <code>repeated string data_source_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataSourceIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data_source_ids = $arr;

        return $this;
    }

}

