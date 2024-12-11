<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/transition_route_group.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A TransitionRouteGroup represents a group of
 * [`TransitionRoutes`][google.cloud.dialogflow.cx.v3.TransitionRoute] to be
 * used by a [Page][google.cloud.dialogflow.cx.v3.Page].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.TransitionRouteGroup</code>
 */
class TransitionRouteGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the transition route group.
     * [TransitionRouteGroups.CreateTransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroups.CreateTransitionRouteGroup]
     * populates the name automatically. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     * .
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The human-readable name of the transition route group, unique
     * within the flow. The display name can be no longer than 30 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Transition routes associated with the
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRoute transition_routes = 5;</code>
     */
    private $transition_routes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique identifier of the transition route group.
     *           [TransitionRouteGroups.CreateTransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroups.CreateTransitionRouteGroup]
     *           populates the name automatically. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     *           .
     *     @type string $display_name
     *           Required. The human-readable name of the transition route group, unique
     *           within the flow. The display name can be no longer than 30 characters.
     *     @type array<\Google\Cloud\Dialogflow\Cx\V3\TransitionRoute>|\Google\Protobuf\Internal\RepeatedField $transition_routes
     *           Transition routes associated with the
     *           [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\TransitionRouteGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the transition route group.
     * [TransitionRouteGroups.CreateTransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroups.CreateTransitionRouteGroup]
     * populates the name automatically. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     * .
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique identifier of the transition route group.
     * [TransitionRouteGroups.CreateTransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroups.CreateTransitionRouteGroup]
     * populates the name automatically. Format:
     * `projects/<ProjectID>/locations/<LocationID>/agents/<AgentID>/flows/<FlowID>/transitionRouteGroups/<TransitionRouteGroupID>`
     * .
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
     * Required. The human-readable name of the transition route group, unique
     * within the flow. The display name can be no longer than 30 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The human-readable name of the transition route group, unique
     * within the flow. The display name can be no longer than 30 characters.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Transition routes associated with the
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRoute transition_routes = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransitionRoutes()
    {
        return $this->transition_routes;
    }

    /**
     * Transition routes associated with the
     * [TransitionRouteGroup][google.cloud.dialogflow.cx.v3.TransitionRouteGroup].
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.TransitionRoute transition_routes = 5;</code>
     * @param array<\Google\Cloud\Dialogflow\Cx\V3\TransitionRoute>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransitionRoutes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\Cx\V3\TransitionRoute::class);
        $this->transition_routes = $arr;

        return $this;
    }

}

