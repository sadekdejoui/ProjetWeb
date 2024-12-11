<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Nearest Neighbors search config. The ordering provided by FindNearest
 * supersedes the order_by stage. If multiple documents have the same vector
 * distance, the returned document order is not guaranteed to be stable between
 * queries.
 *
 * Generated from protobuf message <code>google.datastore.v1.FindNearest</code>
 */
class FindNearest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. An indexed vector property to search upon. Only documents which
     * contain vectors whose dimensionality match the query_vector can be
     * returned.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PropertyReference vector_property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $vector_property = null;
    /**
     * Required. The query vector that we are searching on. Must be a vector of no
     * more than 2048 dimensions.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Value query_vector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $query_vector = null;
    /**
     * Required. The Distance Measure to use, required.
     *
     * Generated from protobuf field <code>.google.datastore.v1.FindNearest.DistanceMeasure distance_measure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $distance_measure = 0;
    /**
     * Required. The number of nearest neighbors to return. Must be a positive
     * integer of no more than 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $limit = null;
    /**
     * Optional. Optional name of the field to output the result of the vector
     * distance calculation. Must conform to [entity
     * property][google.datastore.v1.Entity.properties] limitations.
     *
     * Generated from protobuf field <code>string distance_result_property = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $distance_result_property = '';
    /**
     * Optional. Option to specify a threshold for which no less similar documents
     * will be returned. The behavior of the specified `distance_measure` will
     * affect the meaning of the distance threshold. Since DOT_PRODUCT distances
     * increase when the vectors are more similar, the comparison is inverted.
     * For EUCLIDEAN, COSINE: WHERE distance <= distance_threshold
     * For DOT_PRODUCT:       WHERE distance >= distance_threshold
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue distance_threshold = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $distance_threshold = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1\PropertyReference $vector_property
     *           Required. An indexed vector property to search upon. Only documents which
     *           contain vectors whose dimensionality match the query_vector can be
     *           returned.
     *     @type \Google\Cloud\Datastore\V1\Value $query_vector
     *           Required. The query vector that we are searching on. Must be a vector of no
     *           more than 2048 dimensions.
     *     @type int $distance_measure
     *           Required. The Distance Measure to use, required.
     *     @type \Google\Protobuf\Int32Value $limit
     *           Required. The number of nearest neighbors to return. Must be a positive
     *           integer of no more than 100.
     *     @type string $distance_result_property
     *           Optional. Optional name of the field to output the result of the vector
     *           distance calculation. Must conform to [entity
     *           property][google.datastore.v1.Entity.properties] limitations.
     *     @type \Google\Protobuf\DoubleValue $distance_threshold
     *           Optional. Option to specify a threshold for which no less similar documents
     *           will be returned. The behavior of the specified `distance_measure` will
     *           affect the meaning of the distance threshold. Since DOT_PRODUCT distances
     *           increase when the vectors are more similar, the comparison is inverted.
     *           For EUCLIDEAN, COSINE: WHERE distance <= distance_threshold
     *           For DOT_PRODUCT:       WHERE distance >= distance_threshold
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. An indexed vector property to search upon. Only documents which
     * contain vectors whose dimensionality match the query_vector can be
     * returned.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PropertyReference vector_property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Datastore\V1\PropertyReference|null
     */
    public function getVectorProperty()
    {
        return $this->vector_property;
    }

    public function hasVectorProperty()
    {
        return isset($this->vector_property);
    }

    public function clearVectorProperty()
    {
        unset($this->vector_property);
    }

    /**
     * Required. An indexed vector property to search upon. Only documents which
     * contain vectors whose dimensionality match the query_vector can be
     * returned.
     *
     * Generated from protobuf field <code>.google.datastore.v1.PropertyReference vector_property = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Datastore\V1\PropertyReference $var
     * @return $this
     */
    public function setVectorProperty($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\PropertyReference::class);
        $this->vector_property = $var;

        return $this;
    }

    /**
     * Required. The query vector that we are searching on. Must be a vector of no
     * more than 2048 dimensions.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Value query_vector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Datastore\V1\Value|null
     */
    public function getQueryVector()
    {
        return $this->query_vector;
    }

    public function hasQueryVector()
    {
        return isset($this->query_vector);
    }

    public function clearQueryVector()
    {
        unset($this->query_vector);
    }

    /**
     * Required. The query vector that we are searching on. Must be a vector of no
     * more than 2048 dimensions.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Value query_vector = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Datastore\V1\Value $var
     * @return $this
     */
    public function setQueryVector($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Value::class);
        $this->query_vector = $var;

        return $this;
    }

    /**
     * Required. The Distance Measure to use, required.
     *
     * Generated from protobuf field <code>.google.datastore.v1.FindNearest.DistanceMeasure distance_measure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getDistanceMeasure()
    {
        return $this->distance_measure;
    }

    /**
     * Required. The Distance Measure to use, required.
     *
     * Generated from protobuf field <code>.google.datastore.v1.FindNearest.DistanceMeasure distance_measure = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setDistanceMeasure($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Datastore\V1\FindNearest\DistanceMeasure::class);
        $this->distance_measure = $var;

        return $this;
    }

    /**
     * Required. The number of nearest neighbors to return. Must be a positive
     * integer of no more than 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    public function hasLimit()
    {
        return isset($this->limit);
    }

    public function clearLimit()
    {
        unset($this->limit);
    }

    /**
     * Returns the unboxed value from <code>getLimit()</code>

     * Required. The number of nearest neighbors to return. Must be a positive
     * integer of no more than 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|null
     */
    public function getLimitValue()
    {
        return $this->readWrapperValue("limit");
    }

    /**
     * Required. The number of nearest neighbors to return. Must be a positive
     * integer of no more than 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->limit = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Required. The number of nearest neighbors to return. Must be a positive
     * integer of no more than 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value limit = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|null $var
     * @return $this
     */
    public function setLimitValue($var)
    {
        $this->writeWrapperValue("limit", $var);
        return $this;}

    /**
     * Optional. Optional name of the field to output the result of the vector
     * distance calculation. Must conform to [entity
     * property][google.datastore.v1.Entity.properties] limitations.
     *
     * Generated from protobuf field <code>string distance_result_property = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDistanceResultProperty()
    {
        return $this->distance_result_property;
    }

    /**
     * Optional. Optional name of the field to output the result of the vector
     * distance calculation. Must conform to [entity
     * property][google.datastore.v1.Entity.properties] limitations.
     *
     * Generated from protobuf field <code>string distance_result_property = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDistanceResultProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->distance_result_property = $var;

        return $this;
    }

    /**
     * Optional. Option to specify a threshold for which no less similar documents
     * will be returned. The behavior of the specified `distance_measure` will
     * affect the meaning of the distance threshold. Since DOT_PRODUCT distances
     * increase when the vectors are more similar, the comparison is inverted.
     * For EUCLIDEAN, COSINE: WHERE distance <= distance_threshold
     * For DOT_PRODUCT:       WHERE distance >= distance_threshold
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue distance_threshold = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\DoubleValue|null
     */
    public function getDistanceThreshold()
    {
        return $this->distance_threshold;
    }

    public function hasDistanceThreshold()
    {
        return isset($this->distance_threshold);
    }

    public function clearDistanceThreshold()
    {
        unset($this->distance_threshold);
    }

    /**
     * Returns the unboxed value from <code>getDistanceThreshold()</code>

     * Optional. Option to specify a threshold for which no less similar documents
     * will be returned. The behavior of the specified `distance_measure` will
     * affect the meaning of the distance threshold. Since DOT_PRODUCT distances
     * increase when the vectors are more similar, the comparison is inverted.
     * For EUCLIDEAN, COSINE: WHERE distance <= distance_threshold
     * For DOT_PRODUCT:       WHERE distance >= distance_threshold
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue distance_threshold = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float|null
     */
    public function getDistanceThresholdValue()
    {
        return $this->readWrapperValue("distance_threshold");
    }

    /**
     * Optional. Option to specify a threshold for which no less similar documents
     * will be returned. The behavior of the specified `distance_measure` will
     * affect the meaning of the distance threshold. Since DOT_PRODUCT distances
     * increase when the vectors are more similar, the comparison is inverted.
     * For EUCLIDEAN, COSINE: WHERE distance <= distance_threshold
     * For DOT_PRODUCT:       WHERE distance >= distance_threshold
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue distance_threshold = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setDistanceThreshold($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->distance_threshold = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Optional. Option to specify a threshold for which no less similar documents
     * will be returned. The behavior of the specified `distance_measure` will
     * affect the meaning of the distance threshold. Since DOT_PRODUCT distances
     * increase when the vectors are more similar, the comparison is inverted.
     * For EUCLIDEAN, COSINE: WHERE distance <= distance_threshold
     * For DOT_PRODUCT:       WHERE distance >= distance_threshold
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue distance_threshold = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float|null $var
     * @return $this
     */
    public function setDistanceThresholdValue($var)
    {
        $this->writeWrapperValue("distance_threshold", $var);
        return $this;}

}

