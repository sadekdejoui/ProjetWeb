<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_model.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents evaluation result of a conversation model.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ConversationModelEvaluation</code>
 */
class ConversationModelEvaluation extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the evaluation. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model
     * ID>/evaluations/<Evaluation ID>`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Optional. The display name of the model evaluation. At most 64 bytes long.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $display_name = '';
    /**
     * Optional. The configuration of the evaluation task.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EvaluationConfig evaluation_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $evaluation_config = null;
    /**
     * Output only. Creation time of this model.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. Human eval template in csv format.
     * It tooks real-world conversations provided through input dataset, generates
     * example suggestions for customer to verify quality of the model.
     * For Smart Reply, the generated csv file contains columns of
     * Context, (Suggestions,Q1,Q2)*3, Actual reply.
     * Context contains at most 10 latest messages in the conversation prior to
     * the current suggestion.
     * Q1: "Would you send it as the next message of agent?"
     * Evaluated based on whether the suggest is appropriate to be sent by
     * agent in current context.
     * Q2: "Does the suggestion move the conversation closer to resolution?"
     * Evaluated based on whether the suggestion provide solutions, or answers
     * customer's question or collect information from customer to resolve the
     * customer's issue.
     * Actual reply column contains the actual agent reply sent in the context.
     *
     * Generated from protobuf field <code>string raw_human_eval_template_csv = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $raw_human_eval_template_csv = '';
    protected $metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the evaluation. Format:
     *           `projects/<Project ID>/conversationModels/<Conversation Model
     *           ID>/evaluations/<Evaluation ID>`
     *     @type string $display_name
     *           Optional. The display name of the model evaluation. At most 64 bytes long.
     *     @type \Google\Cloud\Dialogflow\V2\EvaluationConfig $evaluation_config
     *           Optional. The configuration of the evaluation task.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Creation time of this model.
     *     @type \Google\Cloud\Dialogflow\V2\SmartReplyMetrics $smart_reply_metrics
     *           Output only. Only available when model is for smart reply.
     *     @type string $raw_human_eval_template_csv
     *           Output only. Human eval template in csv format.
     *           It tooks real-world conversations provided through input dataset, generates
     *           example suggestions for customer to verify quality of the model.
     *           For Smart Reply, the generated csv file contains columns of
     *           Context, (Suggestions,Q1,Q2)*3, Actual reply.
     *           Context contains at most 10 latest messages in the conversation prior to
     *           the current suggestion.
     *           Q1: "Would you send it as the next message of agent?"
     *           Evaluated based on whether the suggest is appropriate to be sent by
     *           agent in current context.
     *           Q2: "Does the suggestion move the conversation closer to resolution?"
     *           Evaluated based on whether the suggestion provide solutions, or answers
     *           customer's question or collect information from customer to resolve the
     *           customer's issue.
     *           Actual reply column contains the actual agent reply sent in the context.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationModel::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the evaluation. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model
     * ID>/evaluations/<Evaluation ID>`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the evaluation. Format:
     * `projects/<Project ID>/conversationModels/<Conversation Model
     * ID>/evaluations/<Evaluation ID>`
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Optional. The display name of the model evaluation. At most 64 bytes long.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. The display name of the model evaluation. At most 64 bytes long.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. The configuration of the evaluation task.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EvaluationConfig evaluation_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dialogflow\V2\EvaluationConfig|null
     */
    public function getEvaluationConfig()
    {
        return $this->evaluation_config;
    }

    public function hasEvaluationConfig()
    {
        return isset($this->evaluation_config);
    }

    public function clearEvaluationConfig()
    {
        unset($this->evaluation_config);
    }

    /**
     * Optional. The configuration of the evaluation task.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.EvaluationConfig evaluation_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dialogflow\V2\EvaluationConfig $var
     * @return $this
     */
    public function setEvaluationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\EvaluationConfig::class);
        $this->evaluation_config = $var;

        return $this;
    }

    /**
     * Output only. Creation time of this model.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Creation time of this model.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Only available when model is for smart reply.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SmartReplyMetrics smart_reply_metrics = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dialogflow\V2\SmartReplyMetrics|null
     */
    public function getSmartReplyMetrics()
    {
        return $this->readOneof(5);
    }

    public function hasSmartReplyMetrics()
    {
        return $this->hasOneof(5);
    }

    /**
     * Output only. Only available when model is for smart reply.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.SmartReplyMetrics smart_reply_metrics = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dialogflow\V2\SmartReplyMetrics $var
     * @return $this
     */
    public function setSmartReplyMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\SmartReplyMetrics::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Output only. Human eval template in csv format.
     * It tooks real-world conversations provided through input dataset, generates
     * example suggestions for customer to verify quality of the model.
     * For Smart Reply, the generated csv file contains columns of
     * Context, (Suggestions,Q1,Q2)*3, Actual reply.
     * Context contains at most 10 latest messages in the conversation prior to
     * the current suggestion.
     * Q1: "Would you send it as the next message of agent?"
     * Evaluated based on whether the suggest is appropriate to be sent by
     * agent in current context.
     * Q2: "Does the suggestion move the conversation closer to resolution?"
     * Evaluated based on whether the suggestion provide solutions, or answers
     * customer's question or collect information from customer to resolve the
     * customer's issue.
     * Actual reply column contains the actual agent reply sent in the context.
     *
     * Generated from protobuf field <code>string raw_human_eval_template_csv = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getRawHumanEvalTemplateCsv()
    {
        return $this->raw_human_eval_template_csv;
    }

    /**
     * Output only. Human eval template in csv format.
     * It tooks real-world conversations provided through input dataset, generates
     * example suggestions for customer to verify quality of the model.
     * For Smart Reply, the generated csv file contains columns of
     * Context, (Suggestions,Q1,Q2)*3, Actual reply.
     * Context contains at most 10 latest messages in the conversation prior to
     * the current suggestion.
     * Q1: "Would you send it as the next message of agent?"
     * Evaluated based on whether the suggest is appropriate to be sent by
     * agent in current context.
     * Q2: "Does the suggestion move the conversation closer to resolution?"
     * Evaluated based on whether the suggestion provide solutions, or answers
     * customer's question or collect information from customer to resolve the
     * customer's issue.
     * Actual reply column contains the actual agent reply sent in the context.
     *
     * Generated from protobuf field <code>string raw_human_eval_template_csv = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setRawHumanEvalTemplateCsv($var)
    {
        GPBUtil::checkString($var, True);
        $this->raw_human_eval_template_csv = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMetrics()
    {
        return $this->whichOneof("metrics");
    }

}

