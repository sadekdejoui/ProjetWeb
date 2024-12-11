<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `DeleteNotificationChannel` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.DeleteNotificationChannelRequest</code>
 */
class DeleteNotificationChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The channel for which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * If true, the notification channel will be deleted regardless of its
     * use in alert policies (the policies will be updated to remove the
     * channel). If false, this operation will fail if the notification channel
     * is referenced by existing alerting policies.
     *
     * Generated from protobuf field <code>bool force = 5;</code>
     */
    private $force = false;

    /**
     * @param string $name  Required. The channel for which to execute the request. The format is:
     *
     *                      projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *                      Please see {@see NotificationChannelServiceClient::notificationChannelName()} for help formatting this field.
     * @param bool   $force If true, the notification channel will be deleted regardless of its
     *                      use in alert policies (the policies will be updated to remove the
     *                      channel). If false, this operation will fail if the notification channel
     *                      is referenced by existing alerting policies.
     *
     * @return \Google\Cloud\Monitoring\V3\DeleteNotificationChannelRequest
     *
     * @experimental
     */
    public static function build(string $name, bool $force): self
    {
        return (new self())
            ->setName($name)
            ->setForce($force);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The channel for which to execute the request. The format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *     @type bool $force
     *           If true, the notification channel will be deleted regardless of its
     *           use in alert policies (the policies will be updated to remove the
     *           channel). If false, this operation will fail if the notification channel
     *           is referenced by existing alerting policies.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The channel for which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The channel for which to execute the request. The format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/notificationChannels/[CHANNEL_ID]
     *
     * Generated from protobuf field <code>string name = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * If true, the notification channel will be deleted regardless of its
     * use in alert policies (the policies will be updated to remove the
     * channel). If false, this operation will fail if the notification channel
     * is referenced by existing alerting policies.
     *
     * Generated from protobuf field <code>bool force = 5;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * If true, the notification channel will be deleted regardless of its
     * use in alert policies (the policies will be updated to remove the
     * channel). If false, this operation will fail if the notification channel
     * is referenced by existing alerting policies.
     *
     * Generated from protobuf field <code>bool force = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

}

