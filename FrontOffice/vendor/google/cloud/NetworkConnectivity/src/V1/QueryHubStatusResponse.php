<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkconnectivity/v1/hub.proto

namespace Google\Cloud\NetworkConnectivity\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response for
 * [HubService.QueryHubStatus][google.cloud.networkconnectivity.v1.HubService.QueryHubStatus].
 *
 * Generated from protobuf message <code>google.cloud.networkconnectivity.v1.QueryHubStatusResponse</code>
 */
class QueryHubStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of hub status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.HubStatusEntry hub_status_entries = 1;</code>
     */
    private $hub_status_entries;
    /**
     * The token for the next page of the response. To see more results,
     * use this value as the page_token for your next request. If this value
     * is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\NetworkConnectivity\V1\HubStatusEntry>|\Google\Protobuf\Internal\RepeatedField $hub_status_entries
     *           The list of hub status.
     *     @type string $next_page_token
     *           The token for the next page of the response. To see more results,
     *           use this value as the page_token for your next request. If this value
     *           is empty, there are no more results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkconnectivity\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of hub status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.HubStatusEntry hub_status_entries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHubStatusEntries()
    {
        return $this->hub_status_entries;
    }

    /**
     * The list of hub status.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkconnectivity.v1.HubStatusEntry hub_status_entries = 1;</code>
     * @param array<\Google\Cloud\NetworkConnectivity\V1\HubStatusEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHubStatusEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\NetworkConnectivity\V1\HubStatusEntry::class);
        $this->hub_status_entries = $arr;

        return $this;
    }

    /**
     * The token for the next page of the response. To see more results,
     * use this value as the page_token for your next request. If this value
     * is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token for the next page of the response. To see more results,
     * use this value as the page_token for your next request. If this value
     * is empty, there are no more results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

