<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policysimulator/v1/simulator.proto

namespace Google\Cloud\PolicySimulator\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [Simulator.ListReplayResults][google.cloud.policysimulator.v1.Simulator.ListReplayResults].
 *
 * Generated from protobuf message <code>google.cloud.policysimulator.v1.ListReplayResultsRequest</code>
 */
class ListReplayResultsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [Replay][google.cloud.policysimulator.v1.Replay] whose
     * results are listed, in the following format:
     * `{projects|folders|organizations}/{resource-id}/locations/global/replays/{replay-id}`
     * Example:
     * `projects/my-project/locations/global/replays/506a5f7f-38ce-4d7d-8e03-479ce1833c36`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of
     * [ReplayResult][google.cloud.policysimulator.v1.ReplayResult] objects to
     * return. Defaults to 5000.
     * The maximum value is 5000; values above 5000 are rounded down to 5000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous
     * [Simulator.ListReplayResults][google.cloud.policysimulator.v1.Simulator.ListReplayResults]
     * call. Provide this token to retrieve the next page of results.
     * When paginating, all other parameters provided to
     * [Simulator.ListReplayResults[] must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The [Replay][google.cloud.policysimulator.v1.Replay] whose
     *                       results are listed, in the following format:
     *
     *                       `{projects|folders|organizations}/{resource-id}/locations/global/replays/{replay-id}`
     *
     *                       Example:
     *                       `projects/my-project/locations/global/replays/506a5f7f-38ce-4d7d-8e03-479ce1833c36`
     *                       Please see {@see SimulatorClient::replayName()} for help formatting this field.
     *
     * @return \Google\Cloud\PolicySimulator\V1\ListReplayResultsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The [Replay][google.cloud.policysimulator.v1.Replay] whose
     *           results are listed, in the following format:
     *           `{projects|folders|organizations}/{resource-id}/locations/global/replays/{replay-id}`
     *           Example:
     *           `projects/my-project/locations/global/replays/506a5f7f-38ce-4d7d-8e03-479ce1833c36`
     *     @type int $page_size
     *           The maximum number of
     *           [ReplayResult][google.cloud.policysimulator.v1.ReplayResult] objects to
     *           return. Defaults to 5000.
     *           The maximum value is 5000; values above 5000 are rounded down to 5000.
     *     @type string $page_token
     *           A page token, received from a previous
     *           [Simulator.ListReplayResults][google.cloud.policysimulator.v1.Simulator.ListReplayResults]
     *           call. Provide this token to retrieve the next page of results.
     *           When paginating, all other parameters provided to
     *           [Simulator.ListReplayResults[] must match the call that provided the page
     *           token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Policysimulator\V1\Simulator::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [Replay][google.cloud.policysimulator.v1.Replay] whose
     * results are listed, in the following format:
     * `{projects|folders|organizations}/{resource-id}/locations/global/replays/{replay-id}`
     * Example:
     * `projects/my-project/locations/global/replays/506a5f7f-38ce-4d7d-8e03-479ce1833c36`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The [Replay][google.cloud.policysimulator.v1.Replay] whose
     * results are listed, in the following format:
     * `{projects|folders|organizations}/{resource-id}/locations/global/replays/{replay-id}`
     * Example:
     * `projects/my-project/locations/global/replays/506a5f7f-38ce-4d7d-8e03-479ce1833c36`
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
     * The maximum number of
     * [ReplayResult][google.cloud.policysimulator.v1.ReplayResult] objects to
     * return. Defaults to 5000.
     * The maximum value is 5000; values above 5000 are rounded down to 5000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of
     * [ReplayResult][google.cloud.policysimulator.v1.ReplayResult] objects to
     * return. Defaults to 5000.
     * The maximum value is 5000; values above 5000 are rounded down to 5000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous
     * [Simulator.ListReplayResults][google.cloud.policysimulator.v1.Simulator.ListReplayResults]
     * call. Provide this token to retrieve the next page of results.
     * When paginating, all other parameters provided to
     * [Simulator.ListReplayResults[] must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous
     * [Simulator.ListReplayResults][google.cloud.policysimulator.v1.Simulator.ListReplayResults]
     * call. Provide this token to retrieve the next page of results.
     * When paginating, all other parameters provided to
     * [Simulator.ListReplayResults[] must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

