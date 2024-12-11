<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/conversation_dataset.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [ConversationDatasets.ImportConversationData][google.cloud.dialogflow.v2.ConversationDatasets.ImportConversationData].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ImportConversationDataRequest</code>
 */
class ImportConversationDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Dataset resource name. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversationDatasets/<Conversation Dataset ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. Configuration describing where to import data from.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $input_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Dataset resource name. Format:
     *           `projects/<Project ID>/locations/<Location
     *           ID>/conversationDatasets/<Conversation Dataset ID>`
     *     @type \Google\Cloud\Dialogflow\V2\InputConfig $input_config
     *           Required. Configuration describing where to import data from.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\ConversationDataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Dataset resource name. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversationDatasets/<Conversation Dataset ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Dataset resource name. Format:
     * `projects/<Project ID>/locations/<Location
     * ID>/conversationDatasets/<Conversation Dataset ID>`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. Configuration describing where to import data from.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2\InputConfig|null
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Required. Configuration describing where to import data from.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.InputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2\InputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\InputConfig::class);
        $this->input_config = $var;

        return $this;
    }

}

