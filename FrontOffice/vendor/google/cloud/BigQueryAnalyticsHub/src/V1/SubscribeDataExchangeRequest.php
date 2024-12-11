<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/analyticshub/v1/analyticshub.proto

namespace Google\Cloud\BigQuery\AnalyticsHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for subscribing to a Data Exchange.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.analyticshub.v1.SubscribeDataExchangeRequest</code>
 */
class SubscribeDataExchangeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the Data Exchange.
     * e.g. `projects/publisherproject/locations/US/dataExchanges/123`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The parent resource path of the Subscription.
     * e.g. `projects/subscriberproject/locations/US`
     *
     * Generated from protobuf field <code>string destination = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $destination = '';
    /**
     * Required. Name of the subscription to create.
     * e.g. `subscription1`
     *
     * Generated from protobuf field <code>string subscription = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $subscription = '';
    /**
     * Email of the subscriber.
     *
     * Generated from protobuf field <code>string subscriber_contact = 3;</code>
     */
    protected $subscriber_contact = '';

    /**
     * @param string $name Required. Resource name of the Data Exchange.
     *                     e.g. `projects/publisherproject/locations/US/dataExchanges/123`
     *                     Please see {@see AnalyticsHubServiceClient::dataExchangeName()} for help formatting this field.
     *
     * @return \Google\Cloud\BigQuery\AnalyticsHub\V1\SubscribeDataExchangeRequest
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
     *           Required. Resource name of the Data Exchange.
     *           e.g. `projects/publisherproject/locations/US/dataExchanges/123`
     *     @type string $destination
     *           Required. The parent resource path of the Subscription.
     *           e.g. `projects/subscriberproject/locations/US`
     *     @type string $subscription
     *           Required. Name of the subscription to create.
     *           e.g. `subscription1`
     *     @type string $subscriber_contact
     *           Email of the subscriber.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Analyticshub\V1\Analyticshub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the Data Exchange.
     * e.g. `projects/publisherproject/locations/US/dataExchanges/123`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Resource name of the Data Exchange.
     * e.g. `projects/publisherproject/locations/US/dataExchanges/123`
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
     * Required. The parent resource path of the Subscription.
     * e.g. `projects/subscriberproject/locations/US`
     *
     * Generated from protobuf field <code>string destination = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Required. The parent resource path of the Subscription.
     * e.g. `projects/subscriberproject/locations/US`
     *
     * Generated from protobuf field <code>string destination = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * Required. Name of the subscription to create.
     * e.g. `subscription1`
     *
     * Generated from protobuf field <code>string subscription = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * Required. Name of the subscription to create.
     * e.g. `subscription1`
     *
     * Generated from protobuf field <code>string subscription = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;

        return $this;
    }

    /**
     * Email of the subscriber.
     *
     * Generated from protobuf field <code>string subscriber_contact = 3;</code>
     * @return string
     */
    public function getSubscriberContact()
    {
        return $this->subscriber_contact;
    }

    /**
     * Email of the subscriber.
     *
     * Generated from protobuf field <code>string subscriber_contact = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscriberContact($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscriber_contact = $var;

        return $this;
    }

}

