<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnections/v1/app_connections_service.proto

namespace Google\Cloud\BeyondCorp\AppConnections\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A BeyondCorp AppConnection resource represents a BeyondCorp protected
 * AppConnection to a remote application. It creates all the necessary GCP
 * components needed for creating a BeyondCorp protected AppConnection. Multiple
 * connectors can be authorised for a single AppConnection.
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.appconnections.v1.AppConnection</code>
 */
class AppConnection extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Unique resource name of the AppConnection.
     * The name is ignored when creating a AppConnection.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Output only. Timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Timestamp when the resource was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Optional. An arbitrary user-provided name for the AppConnection. Cannot
     * exceed 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Output only. A unique identifier for the instance generated by the
     * system.
     *
     * Generated from protobuf field <code>string uid = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Required. The type of network connectivity used by the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.Type type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = 0;
    /**
     * Required. Address of the remote application endpoint for the BeyondCorp
     * AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.ApplicationEndpoint application_endpoint = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $application_endpoint = null;
    /**
     * Optional. List of [google.cloud.beyondcorp.v1main.Connector.name] that are
     * authorised to be associated with this AppConnection.
     *
     * Generated from protobuf field <code>repeated string connectors = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $connectors;
    /**
     * Output only. The current state of the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Optional. Gateway used by the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.Gateway gateway = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $gateway = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Unique resource name of the AppConnection.
     *           The name is ignored when creating a AppConnection.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when the resource was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Timestamp when the resource was last modified.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Resource labels to represent user provided metadata.
     *     @type string $display_name
     *           Optional. An arbitrary user-provided name for the AppConnection. Cannot
     *           exceed 64 characters.
     *     @type string $uid
     *           Output only. A unique identifier for the instance generated by the
     *           system.
     *     @type int $type
     *           Required. The type of network connectivity used by the AppConnection.
     *     @type \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\ApplicationEndpoint $application_endpoint
     *           Required. Address of the remote application endpoint for the BeyondCorp
     *           AppConnection.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $connectors
     *           Optional. List of [google.cloud.beyondcorp.v1main.Connector.name] that are
     *           authorised to be associated with this AppConnection.
     *     @type int $state
     *           Output only. The current state of the AppConnection.
     *     @type \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\Gateway $gateway
     *           Optional. Gateway used by the AppConnection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Appconnections\V1\AppConnectionsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Unique resource name of the AppConnection.
     * The name is ignored when creating a AppConnection.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Unique resource name of the AppConnection.
     * The name is ignored when creating a AppConnection.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Output only. Timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when the resource was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Timestamp when the resource was last modified.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Optional. Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Resource labels to represent user provided metadata.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Optional. An arbitrary user-provided name for the AppConnection. Cannot
     * exceed 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. An arbitrary user-provided name for the AppConnection. Cannot
     * exceed 64 characters.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Output only. A unique identifier for the instance generated by the
     * system.
     *
     * Generated from protobuf field <code>string uid = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. A unique identifier for the instance generated by the
     * system.
     *
     * Generated from protobuf field <code>string uid = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Required. The type of network connectivity used by the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.Type type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of network connectivity used by the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.Type type = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Required. Address of the remote application endpoint for the BeyondCorp
     * AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.ApplicationEndpoint application_endpoint = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\ApplicationEndpoint|null
     */
    public function getApplicationEndpoint()
    {
        return $this->application_endpoint;
    }

    public function hasApplicationEndpoint()
    {
        return isset($this->application_endpoint);
    }

    public function clearApplicationEndpoint()
    {
        unset($this->application_endpoint);
    }

    /**
     * Required. Address of the remote application endpoint for the BeyondCorp
     * AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.ApplicationEndpoint application_endpoint = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\ApplicationEndpoint $var
     * @return $this
     */
    public function setApplicationEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\ApplicationEndpoint::class);
        $this->application_endpoint = $var;

        return $this;
    }

    /**
     * Optional. List of [google.cloud.beyondcorp.v1main.Connector.name] that are
     * authorised to be associated with this AppConnection.
     *
     * Generated from protobuf field <code>repeated string connectors = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConnectors()
    {
        return $this->connectors;
    }

    /**
     * Optional. List of [google.cloud.beyondcorp.v1main.Connector.name] that are
     * authorised to be associated with this AppConnection.
     *
     * Generated from protobuf field <code>repeated string connectors = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConnectors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->connectors = $arr;

        return $this;
    }

    /**
     * Output only. The current state of the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.State state = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Optional. Gateway used by the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.Gateway gateway = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\Gateway|null
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    public function hasGateway()
    {
        return isset($this->gateway);
    }

    public function clearGateway()
    {
        unset($this->gateway);
    }

    /**
     * Optional. Gateway used by the AppConnection.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.appconnections.v1.AppConnection.Gateway gateway = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\Gateway $var
     * @return $this
     */
    public function setGateway($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BeyondCorp\AppConnections\V1\AppConnection\Gateway::class);
        $this->gateway = $var;

        return $this;
    }

}

