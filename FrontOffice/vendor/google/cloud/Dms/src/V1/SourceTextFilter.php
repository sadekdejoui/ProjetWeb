<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Filter for text-based data types like varchar.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.SourceTextFilter</code>
 */
class SourceTextFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The filter will match columns with length greater than or equal
     * to this number.
     *
     * Generated from protobuf field <code>int64 source_min_length_filter = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $source_min_length_filter = 0;
    /**
     * Optional. The filter will match columns with length smaller than or equal
     * to this number.
     *
     * Generated from protobuf field <code>int64 source_max_length_filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $source_max_length_filter = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $source_min_length_filter
     *           Optional. The filter will match columns with length greater than or equal
     *           to this number.
     *     @type int|string $source_max_length_filter
     *           Optional. The filter will match columns with length smaller than or equal
     *           to this number.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The filter will match columns with length greater than or equal
     * to this number.
     *
     * Generated from protobuf field <code>int64 source_min_length_filter = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getSourceMinLengthFilter()
    {
        return $this->source_min_length_filter;
    }

    /**
     * Optional. The filter will match columns with length greater than or equal
     * to this number.
     *
     * Generated from protobuf field <code>int64 source_min_length_filter = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSourceMinLengthFilter($var)
    {
        GPBUtil::checkInt64($var);
        $this->source_min_length_filter = $var;

        return $this;
    }

    /**
     * Optional. The filter will match columns with length smaller than or equal
     * to this number.
     *
     * Generated from protobuf field <code>int64 source_max_length_filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getSourceMaxLengthFilter()
    {
        return $this->source_max_length_filter;
    }

    /**
     * Optional. The filter will match columns with length smaller than or equal
     * to this number.
     *
     * Generated from protobuf field <code>int64 source_max_length_filter = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSourceMaxLengthFilter($var)
    {
        GPBUtil::checkInt64($var);
        $this->source_max_length_filter = $var;

        return $this;
    }

}

