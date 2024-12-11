<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Cloud\Datastore\V1\AggregationQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines an aggregation that produces a single result.
 *
 * Generated from protobuf message <code>google.datastore.v1.AggregationQuery.Aggregation</code>
 */
class Aggregation extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Optional name of the property to store the result of the
     * aggregation.
     * If not provided, Datastore will pick a default name following the format
     * `property_<incremental_id++>`. For example:
     * ```
     * AGGREGATE
     *   COUNT_UP_TO(1) AS count_up_to_1,
     *   COUNT_UP_TO(2),
     *   COUNT_UP_TO(3) AS count_up_to_3,
     *   COUNT(*)
     * OVER (
     *   ...
     * );
     * ```
     * becomes:
     * ```
     * AGGREGATE
     *   COUNT_UP_TO(1) AS count_up_to_1,
     *   COUNT_UP_TO(2) AS property_1,
     *   COUNT_UP_TO(3) AS count_up_to_3,
     *   COUNT(*) AS property_2
     * OVER (
     *   ...
     * );
     * ```
     * Requires:
     * * Must be unique across all aggregation aliases.
     * * Conform to [entity property
     * name][google.datastore.v1.Entity.properties] limitations.
     *
     * Generated from protobuf field <code>string alias = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $alias = '';
    protected $operator;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Count $count
     *           Count aggregator.
     *     @type \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Sum $sum
     *           Sum aggregator.
     *     @type \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Avg $avg
     *           Average aggregator.
     *     @type string $alias
     *           Optional. Optional name of the property to store the result of the
     *           aggregation.
     *           If not provided, Datastore will pick a default name following the format
     *           `property_<incremental_id++>`. For example:
     *           ```
     *           AGGREGATE
     *             COUNT_UP_TO(1) AS count_up_to_1,
     *             COUNT_UP_TO(2),
     *             COUNT_UP_TO(3) AS count_up_to_3,
     *             COUNT(*)
     *           OVER (
     *             ...
     *           );
     *           ```
     *           becomes:
     *           ```
     *           AGGREGATE
     *             COUNT_UP_TO(1) AS count_up_to_1,
     *             COUNT_UP_TO(2) AS property_1,
     *             COUNT_UP_TO(3) AS count_up_to_3,
     *             COUNT(*) AS property_2
     *           OVER (
     *             ...
     *           );
     *           ```
     *           Requires:
     *           * Must be unique across all aggregation aliases.
     *           * Conform to [entity property
     *           name][google.datastore.v1.Entity.properties] limitations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * Count aggregator.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery.Aggregation.Count count = 1;</code>
     * @return \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Count|null
     */
    public function getCount()
    {
        return $this->readOneof(1);
    }

    public function hasCount()
    {
        return $this->hasOneof(1);
    }

    /**
     * Count aggregator.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery.Aggregation.Count count = 1;</code>
     * @param \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Count $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Count::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Sum aggregator.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery.Aggregation.Sum sum = 2;</code>
     * @return \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Sum|null
     */
    public function getSum()
    {
        return $this->readOneof(2);
    }

    public function hasSum()
    {
        return $this->hasOneof(2);
    }

    /**
     * Sum aggregator.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery.Aggregation.Sum sum = 2;</code>
     * @param \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Sum $var
     * @return $this
     */
    public function setSum($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Sum::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Average aggregator.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery.Aggregation.Avg avg = 3;</code>
     * @return \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Avg|null
     */
    public function getAvg()
    {
        return $this->readOneof(3);
    }

    public function hasAvg()
    {
        return $this->hasOneof(3);
    }

    /**
     * Average aggregator.
     *
     * Generated from protobuf field <code>.google.datastore.v1.AggregationQuery.Aggregation.Avg avg = 3;</code>
     * @param \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Avg $var
     * @return $this
     */
    public function setAvg($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\AggregationQuery\Aggregation\Avg::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. Optional name of the property to store the result of the
     * aggregation.
     * If not provided, Datastore will pick a default name following the format
     * `property_<incremental_id++>`. For example:
     * ```
     * AGGREGATE
     *   COUNT_UP_TO(1) AS count_up_to_1,
     *   COUNT_UP_TO(2),
     *   COUNT_UP_TO(3) AS count_up_to_3,
     *   COUNT(*)
     * OVER (
     *   ...
     * );
     * ```
     * becomes:
     * ```
     * AGGREGATE
     *   COUNT_UP_TO(1) AS count_up_to_1,
     *   COUNT_UP_TO(2) AS property_1,
     *   COUNT_UP_TO(3) AS count_up_to_3,
     *   COUNT(*) AS property_2
     * OVER (
     *   ...
     * );
     * ```
     * Requires:
     * * Must be unique across all aggregation aliases.
     * * Conform to [entity property
     * name][google.datastore.v1.Entity.properties] limitations.
     *
     * Generated from protobuf field <code>string alias = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Optional. Optional name of the property to store the result of the
     * aggregation.
     * If not provided, Datastore will pick a default name following the format
     * `property_<incremental_id++>`. For example:
     * ```
     * AGGREGATE
     *   COUNT_UP_TO(1) AS count_up_to_1,
     *   COUNT_UP_TO(2),
     *   COUNT_UP_TO(3) AS count_up_to_3,
     *   COUNT(*)
     * OVER (
     *   ...
     * );
     * ```
     * becomes:
     * ```
     * AGGREGATE
     *   COUNT_UP_TO(1) AS count_up_to_1,
     *   COUNT_UP_TO(2) AS property_1,
     *   COUNT_UP_TO(3) AS count_up_to_3,
     *   COUNT(*) AS property_2
     * OVER (
     *   ...
     * );
     * ```
     * Requires:
     * * Must be unique across all aggregation aliases.
     * * Conform to [entity property
     * name][google.datastore.v1.Entity.properties] limitations.
     *
     * Generated from protobuf field <code>string alias = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAlias($var)
    {
        GPBUtil::checkString($var, True);
        $this->alias = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->whichOneof("operator");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Aggregation::class, \Google\Cloud\Datastore\V1\AggregationQuery_Aggregation::class);

