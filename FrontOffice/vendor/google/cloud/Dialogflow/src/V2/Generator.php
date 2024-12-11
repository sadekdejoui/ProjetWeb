<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/generator.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * LLM generator.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Generator</code>
 */
class Generator extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Identifier. The resource name of the generator. Format:
     * `projects/<Project ID>/locations/<Location ID>/generators/<Generator ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Optional. Human readable description of the generator.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $description = '';
    /**
     * Optional. Inference parameters for this generator.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InferenceParameter inference_parameter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $inference_parameter = null;
    /**
     * Optional. The trigger event of the generator. It defines when the generator
     * is triggered in a conversation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TriggerEvent trigger_event = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $trigger_event = 0;
    /**
     * Output only. Creation time of this generator.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Update time of this generator.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    protected $context;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Identifier. The resource name of the generator. Format:
     *           `projects/<Project ID>/locations/<Location ID>/generators/<Generator ID>`
     *     @type string $description
     *           Optional. Human readable description of the generator.
     *     @type \Google\Cloud\Dialogflow\V2\SummarizationContext $summarization_context
     *           Input of prebuilt Summarization feature.
     *     @type \Google\Cloud\Dialogflow\V2\InferenceParameter $inference_parameter
     *           Optional. Inference parameters for this generator.
     *     @type int $trigger_event
     *           Optional. The trigger event of the generator. It defines when the generator
     *           is triggered in a conversation.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time of this generator.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Update time of this generator.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Generator::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Identifier. The resource name of the generator. Format:
     * `projects/<Project ID>/locations/<Location ID>/generators/<Generator ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Identifier. The resource name of the generator. Format:
     * `projects/<Project ID>/locations/<Location ID>/generators/<Generator ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IDENTIFIER, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. Human readable description of the generator.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Human readable description of the generator.
     *
     * Generated from protobuf field <code>string description = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Input of prebuilt Summarization feature.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SummarizationContext summarization_context = 13;</code>
     * @return \Google\Cloud\Dialogflow\V2\SummarizationContext|null
     */
    public function getSummarizationContext()
    {
        return $this->readOneof(13);
    }

    public function hasSummarizationContext()
    {
        return $this->hasOneof(13);
    }

    /**
     * Input of prebuilt Summarization feature.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SummarizationContext summarization_context = 13;</code>
     * @param \Google\Cloud\Dialogflow\V2\SummarizationContext $var
     * @return $this
     */
    public function setSummarizationContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SummarizationContext::class);
        $this->writeOneof(13, $var);

        return $this;
    }

    /**
     * Optional. Inference parameters for this generator.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InferenceParameter inference_parameter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\InferenceParameter|null
     */
    public function getInferenceParameter()
    {
        return $this->inference_parameter;
    }

    public function hasInferenceParameter()
    {
        return isset($this->inference_parameter);
    }

    public function clearInferenceParameter()
    {
        unset($this->inference_parameter);
    }

    /**
     * Optional. Inference parameters for this generator.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InferenceParameter inference_parameter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\InferenceParameter $var
     * @return $this
     */
    public function setInferenceParameter($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\InferenceParameter::class);
        $this->inference_parameter = $var;

        return $this;
    }

    /**
     * Optional. The trigger event of the generator. It defines when the generator
     * is triggered in a conversation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TriggerEvent trigger_event = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getTriggerEvent()
    {
        return $this->trigger_event;
    }

    /**
     * Optional. The trigger event of the generator. It defines when the generator
     * is triggered in a conversation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.TriggerEvent trigger_event = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setTriggerEvent($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\TriggerEvent::class);
        $this->trigger_event = $var;

        return $this;
    }

    /**
     * Output only. Creation time of this generator.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Creation time of this generator.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Update time of this generator.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Update time of this generator.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->whichOneof("context");
    }

}

