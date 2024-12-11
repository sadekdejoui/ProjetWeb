<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/test_case.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for
 * [TestCases.CalculateCoverage][google.cloud.dialogflow.cx.v3.TestCases.CalculateCoverage].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.CalculateCoverageResponse</code>
 */
class CalculateCoverageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The agent to calculate coverage for.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string agent = 5 [(.google.api.resource_reference) = {</code>
     */
    protected $agent = '';
    protected $coverage_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $agent
     *           The agent to calculate coverage for.
     *           Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\IntentCoverage $intent_coverage
     *           Intent coverage.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage $transition_coverage
     *           Transition (excluding transition route groups) coverage.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage $route_group_coverage
     *           Transition route group coverage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TestCase::initOnce();
        parent::__construct($data);
    }

    /**
     * The agent to calculate coverage for.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string agent = 5 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * The agent to calculate coverage for.
     * Format: `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>`.
     *
     * Generated from protobuf field <code>string agent = 5 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAgent($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent = $var;

        return $this;
    }

    /**
     * Intent coverage.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.IntentCoverage intent_coverage = 2;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\IntentCoverage|null
     */
    public function getIntentCoverage()
    {
        return $this->readOneof(2);
    }

    public function hasIntentCoverage()
    {
        return $this->hasOneof(2);
    }

    /**
     * Intent coverage.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.IntentCoverage intent_coverage = 2;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\IntentCoverage $var
     * @return $this
     */
    public function setIntentCoverage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\IntentCoverage::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Transition (excluding transition route groups) coverage.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionCoverage transition_coverage = 4;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage|null
     */
    public function getTransitionCoverage()
    {
        return $this->readOneof(4);
    }

    public function hasTransitionCoverage()
    {
        return $this->hasOneof(4);
    }

    /**
     * Transition (excluding transition route groups) coverage.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionCoverage transition_coverage = 4;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage $var
     * @return $this
     */
    public function setTransitionCoverage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TransitionCoverage::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Transition route group coverage.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage route_group_coverage = 6;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage|null
     */
    public function getRouteGroupCoverage()
    {
        return $this->readOneof(6);
    }

    public function hasRouteGroupCoverage()
    {
        return $this->hasOneof(6);
    }

    /**
     * Transition route group coverage.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.TransitionRouteGroupCoverage route_group_coverage = 6;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage $var
     * @return $this
     */
    public function setRouteGroupCoverage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroupCoverage::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCoverageType()
    {
        return $this->whichOneof("coverage_type");
    }

}

