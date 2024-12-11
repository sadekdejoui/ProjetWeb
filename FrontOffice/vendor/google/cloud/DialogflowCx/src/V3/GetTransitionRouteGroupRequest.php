<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/transition_route_group.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [TransitionRouteGroups.GetTransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroups.GetTransitionRouteGroup].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.GetTransitionRouteGroupRequest</code>
 */
class GetTransitionRouteGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     * or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/transitionRouteGroups/<TransitionRouteGroupID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The language to retrieve the transition route group for. The following
     * fields are language dependent:
     * *  `TransitionRouteGroup.transition_routes.trigger_fulfillment.messages`
     * *
     * `TransitionRouteGroup.transition_routes.trigger_fulfillment.conditional_cases`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    protected $language_code = '';

    /**
     * @param string $name Required. The name of the
     *                     [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     *                     Format:
     *                     `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     *                     or
     *                     `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/transitionRouteGroups/<TransitionRouteGroupID>`. Please see
     *                     {@see TransitionRouteGroupsClient::transitionRouteGroupName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\GetTransitionRouteGroupRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the
     *           [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     *           Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     *           or
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/transitionRouteGroups/<TransitionRouteGroupID>`.
     *     @type string $language_code
     *           The language to retrieve the transition route group for. The following
     *           fields are language dependent:
     *           *  `TransitionRouteGroup.transition_routes.trigger_fulfillment.messages`
     *           *
     *           `TransitionRouteGroup.transition_routes.trigger_fulfillment.conditional_cases`
     *           If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     *           are supported.
     *           Note: languages must be enabled in the agent before they can be used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     * or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/transitionRouteGroups/<TransitionRouteGroupID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     * Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     * or
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/transitionRouteGroups/<TransitionRouteGroupID>`.
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
     * The language to retrieve the transition route group for. The following
     * fields are language dependent:
     * *  `TransitionRouteGroup.transition_routes.trigger_fulfillment.messages`
     * *
     * `TransitionRouteGroup.transition_routes.trigger_fulfillment.conditional_cases`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The language to retrieve the transition route group for. The following
     * fields are language dependent:
     * *  `TransitionRouteGroup.transition_routes.trigger_fulfillment.messages`
     * *
     * `TransitionRouteGroup.transition_routes.trigger_fulfillment.conditional_cases`
     * If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/cx/docs/reference/language)
     * are supported.
     * Note: languages must be enabled in the agent before they can be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
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

