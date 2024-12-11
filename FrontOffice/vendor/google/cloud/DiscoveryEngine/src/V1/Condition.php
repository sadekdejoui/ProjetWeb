<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/control.proto

namespace Google\Cloud\DiscoveryEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines circumstances to be checked before allowing a behavior
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    /**
     * Search only
     * A list of terms to match the query on.
     * Cannot be set when
     * [Condition.query_regex][google.cloud.discoveryengine.v1.Condition.query_regex]
     * is set.
     * Maximum of 10 query terms.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition.QueryTerm query_terms = 2;</code>
     */
    private $query_terms;
    /**
     * Range of time(s) specifying when condition is active.
     * Maximum of 10 time ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition.TimeRange active_time_range = 3;</code>
     */
    private $active_time_range;
    /**
     * Optional. Query regex to match the whole search query.
     * Cannot be set when
     * [Condition.query_terms][google.cloud.discoveryengine.v1.Condition.query_terms]
     * is set. This is currently supporting promotion use case.
     *
     * Generated from protobuf field <code>string query_regex = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $query_regex = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Condition\QueryTerm>|\Google\Protobuf\Internal\RepeatedField $query_terms
     *           Search only
     *           A list of terms to match the query on.
     *           Cannot be set when
     *           [Condition.query_regex][google.cloud.discoveryengine.v1.Condition.query_regex]
     *           is set.
     *           Maximum of 10 query terms.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Condition\TimeRange>|\Google\Protobuf\Internal\RepeatedField $active_time_range
     *           Range of time(s) specifying when condition is active.
     *           Maximum of 10 time ranges.
     *     @type string $query_regex
     *           Optional. Query regex to match the whole search query.
     *           Cannot be set when
     *           [Condition.query_terms][google.cloud.discoveryengine.v1.Condition.query_terms]
     *           is set. This is currently supporting promotion use case.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Control::initOnce();
        parent::__construct($data);
    }

    /**
     * Search only
     * A list of terms to match the query on.
     * Cannot be set when
     * [Condition.query_regex][google.cloud.discoveryengine.v1.Condition.query_regex]
     * is set.
     * Maximum of 10 query terms.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition.QueryTerm query_terms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryTerms()
    {
        return $this->query_terms;
    }

    /**
     * Search only
     * A list of terms to match the query on.
     * Cannot be set when
     * [Condition.query_regex][google.cloud.discoveryengine.v1.Condition.query_regex]
     * is set.
     * Maximum of 10 query terms.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition.QueryTerm query_terms = 2;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Condition\QueryTerm>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryTerms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Condition\QueryTerm::class);
        $this->query_terms = $arr;

        return $this;
    }

    /**
     * Range of time(s) specifying when condition is active.
     * Maximum of 10 time ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition.TimeRange active_time_range = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActiveTimeRange()
    {
        return $this->active_time_range;
    }

    /**
     * Range of time(s) specifying when condition is active.
     * Maximum of 10 time ranges.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Condition.TimeRange active_time_range = 3;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Condition\TimeRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActiveTimeRange($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Condition\TimeRange::class);
        $this->active_time_range = $arr;

        return $this;
    }

    /**
     * Optional. Query regex to match the whole search query.
     * Cannot be set when
     * [Condition.query_terms][google.cloud.discoveryengine.v1.Condition.query_terms]
     * is set. This is currently supporting promotion use case.
     *
     * Generated from protobuf field <code>string query_regex = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQueryRegex()
    {
        return $this->query_regex;
    }

    /**
     * Optional. Query regex to match the whole search query.
     * Cannot be set when
     * [Condition.query_terms][google.cloud.discoveryengine.v1.Condition.query_terms]
     * is set. This is currently supporting promotion use case.
     *
     * Generated from protobuf field <code>string query_regex = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQueryRegex($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_regex = $var;

        return $this;
    }

}

