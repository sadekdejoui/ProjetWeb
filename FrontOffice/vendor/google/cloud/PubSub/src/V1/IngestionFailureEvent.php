<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Payload of the Platform Log entry sent when a failure is encountered while
 * ingesting.
 *
 * Generated from protobuf message <code>google.pubsub.v1.IngestionFailureEvent</code>
 */
class IngestionFailureEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the import topic. Format is:
     * projects/{project_name}/topics/{topic_name}.
     *
     * Generated from protobuf field <code>string topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $topic = '';
    /**
     * Required. Error details explaining why ingestion to Pub/Sub has failed.
     *
     * Generated from protobuf field <code>string error_message = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $error_message = '';
    protected $failure;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Required. Name of the import topic. Format is:
     *           projects/{project_name}/topics/{topic_name}.
     *     @type string $error_message
     *           Required. Error details explaining why ingestion to Pub/Sub has failed.
     *     @type \Google\Cloud\PubSub\V1\IngestionFailureEvent\CloudStorageFailure $cloud_storage_failure
     *           Optional. Failure when ingesting from Cloud Storage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the import topic. Format is:
     * projects/{project_name}/topics/{topic_name}.
     *
     * Generated from protobuf field <code>string topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Required. Name of the import topic. Format is:
     * projects/{project_name}/topics/{topic_name}.
     *
     * Generated from protobuf field <code>string topic = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Required. Error details explaining why ingestion to Pub/Sub has failed.
     *
     * Generated from protobuf field <code>string error_message = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * Required. Error details explaining why ingestion to Pub/Sub has failed.
     *
     * Generated from protobuf field <code>string error_message = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

    /**
     * Optional. Failure when ingesting from Cloud Storage.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionFailureEvent.CloudStorageFailure cloud_storage_failure = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\PubSub\V1\IngestionFailureEvent\CloudStorageFailure|null
     */
    public function getCloudStorageFailure()
    {
        return $this->readOneof(3);
    }

    public function hasCloudStorageFailure()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. Failure when ingesting from Cloud Storage.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.IngestionFailureEvent.CloudStorageFailure cloud_storage_failure = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\PubSub\V1\IngestionFailureEvent\CloudStorageFailure $var
     * @return $this
     */
    public function setCloudStorageFailure($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\IngestionFailureEvent\CloudStorageFailure::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFailure()
    {
        return $this->whichOneof("failure");
    }

}

