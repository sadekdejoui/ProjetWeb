<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/agent.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for
 * [GetGenerativeSettings][google.cloud.dialogflow.cx.v3.Agents.GetGenerativeSettings]
 * RPC.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.GetGenerativeSettingsRequest</code>
 */
class GetGenerativeSettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/generativeSettings`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. Language code of the generative settings.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $language_code = '';

    /**
     * @param string $name         Required. Format:
     *                             `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/generativeSettings`. Please see
     *                             {@see AgentsClient::agentGenerativeSettingsName()} for help formatting this field.
     * @param string $languageCode Required. Language code of the generative settings.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\GetGenerativeSettingsRequest
     *
     * @experimental
     */
    public static function build(string $name, string $languageCode): self
    {
        return (new self())
            ->setName($name)
            ->setLanguageCode($languageCode);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/generativeSettings`.
     *     @type string $language_code
     *           Required. Language code of the generative settings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/generativeSettings`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/generativeSettings`.
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
     * Required. Language code of the generative settings.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Required. Language code of the generative settings.
     *
     * Generated from protobuf field <code>string language_code = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

