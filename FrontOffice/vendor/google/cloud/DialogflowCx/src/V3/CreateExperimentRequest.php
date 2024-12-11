<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/experiment.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Experiments.CreateExperiment][google.cloud.dialogflow.cx.v3.Experiments.CreateExperiment].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.CreateExperimentRequest</code>
 */
class CreateExperimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [Agent][google.cloud.dialogflow.cx.v3.Agent] to create an
     * [Environment][google.cloud.dialogflow.cx.v3.Environment] for. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The experiment to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment experiment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $experiment = null;

    /**
     * @param string                                    $parent     Required. The [Agent][google.cloud.dialogflow.cx.v3.Agent] to create an
     *                                                              [Environment][google.cloud.dialogflow.cx.v3.Environment] for. Format:
     *                                                              `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>`. Please see
     *                                                              {@see ExperimentsClient::environmentName()} for help formatting this field.
     * @param \Google\Cloud\Dialogflow\Cx\V3\Experiment $experiment Required. The experiment to create.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\CreateExperimentRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dialogflow\Cx\V3\Experiment $experiment): self
    {
        return (new self())
            ->setParent($parent)
            ->setExperiment($experiment);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The [Agent][google.cloud.dialogflow.cx.v3.Agent] to create an
     *           [Environment][google.cloud.dialogflow.cx.v3.Environment] for. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>`.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\Experiment $experiment
     *           Required. The experiment to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Experiment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [Agent][google.cloud.dialogflow.cx.v3.Agent] to create an
     * [Environment][google.cloud.dialogflow.cx.v3.Environment] for. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The [Agent][google.cloud.dialogflow.cx.v3.Agent] to create an
     * [Environment][google.cloud.dialogflow.cx.v3.Environment] for. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/environments/<EnvironmentID>`.
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
     * Required. The experiment to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment experiment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\Experiment|null
     */
    public function getExperiment()
    {
        return $this->experiment;
    }

    public function hasExperiment()
    {
        return isset($this->experiment);
    }

    public function clearExperiment()
    {
        unset($this->experiment);
    }

    /**
     * Required. The experiment to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.Experiment experiment = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\Experiment $var
     * @return $this
     */
    public function setExperiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\Experiment::class);
        $this->experiment = $var;

        return $this;
    }

}

