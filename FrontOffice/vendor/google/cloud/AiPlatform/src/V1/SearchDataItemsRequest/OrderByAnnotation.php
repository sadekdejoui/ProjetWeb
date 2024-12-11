<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/dataset_service.proto

namespace Google\Cloud\AIPlatform\V1\SearchDataItemsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Expression that allows ranking results based on annotation's property.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SearchDataItemsRequest.OrderByAnnotation</code>
 */
class OrderByAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Saved query of the Annotation. Only Annotations belong to this
     * saved query will be considered for ordering.
     *
     * Generated from protobuf field <code>string saved_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $saved_query = '';
    /**
     * A comma-separated list of annotation fields to order by, sorted in
     * ascending order. Use "desc" after a field name for descending. Must also
     * specify saved_query.
     *
     * Generated from protobuf field <code>string order_by = 2;</code>
     */
    protected $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $saved_query
     *           Required. Saved query of the Annotation. Only Annotations belong to this
     *           saved query will be considered for ordering.
     *     @type string $order_by
     *           A comma-separated list of annotation fields to order by, sorted in
     *           ascending order. Use "desc" after a field name for descending. Must also
     *           specify saved_query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Saved query of the Annotation. Only Annotations belong to this
     * saved query will be considered for ordering.
     *
     * Generated from protobuf field <code>string saved_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSavedQuery()
    {
        return $this->saved_query;
    }

    /**
     * Required. Saved query of the Annotation. Only Annotations belong to this
     * saved query will be considered for ordering.
     *
     * Generated from protobuf field <code>string saved_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSavedQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->saved_query = $var;

        return $this;
    }

    /**
     * A comma-separated list of annotation fields to order by, sorted in
     * ascending order. Use "desc" after a field name for descending. Must also
     * specify saved_query.
     *
     * Generated from protobuf field <code>string order_by = 2;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * A comma-separated list of annotation fields to order by, sorted in
     * ascending order. Use "desc" after a field name for descending. Must also
     * specify saved_query.
     *
     * Generated from protobuf field <code>string order_by = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}


