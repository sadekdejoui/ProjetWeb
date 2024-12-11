<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/fulfillment.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * By default, your agent responds to a matched intent with a static response.
 * As an alternative, you can provide a more dynamic response by using
 * fulfillment. When you enable fulfillment for an intent, Dialogflow responds
 * to that intent by calling a service that you define. For example, if an
 * end-user wants to schedule a haircut on Friday, your service can check your
 * database and respond to the end-user with availability information for
 * Friday.
 * For more information, see the [fulfillment
 * guide](https://cloud.google.com/dialogflow/docs/fulfillment-overview).
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Fulfillment</code>
 */
class Fulfillment extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The unique identifier of the fulfillment.
     * Supported formats:
     * - `projects/<Project ID>/agent/fulfillment`
     * - `projects/<Project ID>/locations/<Location ID>/agent/fulfillment`
     * This field is not used for Fulfillment in an Environment.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Optional. The human-readable name of the fulfillment, unique within the
     * agent.
     * This field is not used for Fulfillment in an Environment.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $display_name = '';
    /**
     * Optional. Whether fulfillment is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enabled = false;
    /**
     * Optional. The field defines whether the fulfillment is enabled for certain
     * features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Fulfillment.Feature features = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $features;
    protected $fulfillment;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The unique identifier of the fulfillment.
     *           Supported formats:
     *           - `projects/<Project ID>/agent/fulfillment`
     *           - `projects/<Project ID>/locations/<Location ID>/agent/fulfillment`
     *           This field is not used for Fulfillment in an Environment.
     *     @type string $display_name
     *           Optional. The human-readable name of the fulfillment, unique within the
     *           agent.
     *           This field is not used for Fulfillment in an Environment.
     *     @type \Google\Cloud\Dialogflow\V2\Fulfillment\GenericWebService $generic_web_service
     *           Configuration for a generic web service.
     *     @type bool $enabled
     *           Optional. Whether fulfillment is enabled.
     *     @type array<\Google\Cloud\Dialogflow\V2\Fulfillment\Feature>|\Google\Protobuf\Internal\RepeatedField $features
     *           Optional. The field defines whether the fulfillment is enabled for certain
     *           features.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Fulfillment::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The unique identifier of the fulfillment.
     * Supported formats:
     * - `projects/<Project ID>/agent/fulfillment`
     * - `projects/<Project ID>/locations/<Location ID>/agent/fulfillment`
     * This field is not used for Fulfillment in an Environment.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The unique identifier of the fulfillment.
     * Supported formats:
     * - `projects/<Project ID>/agent/fulfillment`
     * - `projects/<Project ID>/locations/<Location ID>/agent/fulfillment`
     * This field is not used for Fulfillment in an Environment.
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
     * Optional. The human-readable name of the fulfillment, unique within the
     * agent.
     * This field is not used for Fulfillment in an Environment.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. The human-readable name of the fulfillment, unique within the
     * agent.
     * This field is not used for Fulfillment in an Environment.
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
     * Configuration for a generic web service.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Fulfillment.GenericWebService generic_web_service = 3;</code>
     * @return \Google\Cloud\Dialogflow\V2\Fulfillment\GenericWebService|null
     */
    public function getGenericWebService()
    {
        return $this->readOneof(3);
    }

    public function hasGenericWebService()
    {
        return $this->hasOneof(3);
    }

    /**
     * Configuration for a generic web service.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.Fulfillment.GenericWebService generic_web_service = 3;</code>
     * @param \Google\Cloud\Dialogflow\V2\Fulfillment\GenericWebService $var
     * @return $this
     */
    public function setGenericWebService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2\Fulfillment\GenericWebService::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. Whether fulfillment is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Optional. Whether fulfillment is enabled.
     *
     * Generated from protobuf field <code>bool enabled = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Optional. The field defines whether the fulfillment is enabled for certain
     * features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Fulfillment.Feature features = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Optional. The field defines whether the fulfillment is enabled for certain
     * features.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2.Fulfillment.Feature features = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dialogflow\V2\Fulfillment\Feature>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeatures($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2\Fulfillment\Feature::class);
        $this->features = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getFulfillment()
    {
        return $this->whichOneof("fulfillment");
    }

}

