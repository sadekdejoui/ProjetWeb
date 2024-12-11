<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace Google\Cloud\Metastore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Error details in public error message for
 * [DataprocMetastore.QueryMetadata][google.cloud.metastore.v1beta.DataprocMetastore.QueryMetadata].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1beta.ErrorDetails</code>
 */
class ErrorDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Additional structured details about this error.
     * Keys define the failure items.
     * Value describes the exception or details of the item.
     *
     * Generated from protobuf field <code>map<string, string> details = 1;</code>
     */
    private $details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $details
     *           Additional structured details about this error.
     *           Keys define the failure items.
     *           Value describes the exception or details of the item.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Beta\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Additional structured details about this error.
     * Keys define the failure items.
     * Value describes the exception or details of the item.
     *
     * Generated from protobuf field <code>map<string, string> details = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Additional structured details about this error.
     * Keys define the failure items.
     * Value describes the exception or details of the item.
     *
     * Generated from protobuf field <code>map<string, string> details = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setDetails($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->details = $arr;

        return $this;
    }

}

