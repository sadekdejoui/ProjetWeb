<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A key event in a Google Analytics property.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.KeyEvent</code>
 */
class KeyEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this key event.
     * Format: properties/{property}/keyEvents/{key_event}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Immutable. The event name for this key event.
     * Examples: 'click', 'purchase'
     *
     * Generated from protobuf field <code>string event_name = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $event_name = '';
    /**
     * Output only. Time when this key event was created in the property.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. If set to true, this event can be deleted.
     *
     * Generated from protobuf field <code>bool deletable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $deletable = false;
    /**
     * Output only. If set to true, this key event refers to a custom event.  If
     * set to false, this key event refers to a default event in GA. Default
     * events typically have special meaning in GA. Default events are usually
     * created for you by the GA system, but in some cases can be created by
     * property admins. Custom events count towards the maximum number of
     * custom key events that may be created per property.
     *
     * Generated from protobuf field <code>bool custom = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $custom = false;
    /**
     * Required. The method by which Key Events will be counted across multiple
     * events within a session.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.KeyEvent.CountingMethod counting_method = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $counting_method = 0;
    /**
     * Optional. Defines a default value/currency for a key event.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.KeyEvent.DefaultValue default_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $default_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this key event.
     *           Format: properties/{property}/keyEvents/{key_event}
     *     @type string $event_name
     *           Immutable. The event name for this key event.
     *           Examples: 'click', 'purchase'
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this key event was created in the property.
     *     @type bool $deletable
     *           Output only. If set to true, this event can be deleted.
     *     @type bool $custom
     *           Output only. If set to true, this key event refers to a custom event.  If
     *           set to false, this key event refers to a default event in GA. Default
     *           events typically have special meaning in GA. Default events are usually
     *           created for you by the GA system, but in some cases can be created by
     *           property admins. Custom events count towards the maximum number of
     *           custom key events that may be created per property.
     *     @type int $counting_method
     *           Required. The method by which Key Events will be counted across multiple
     *           events within a session.
     *     @type \Google\Analytics\Admin\V1beta\KeyEvent\DefaultValue $default_value
     *           Optional. Defines a default value/currency for a key event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this key event.
     * Format: properties/{property}/keyEvents/{key_event}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this key event.
     * Format: properties/{property}/keyEvents/{key_event}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Immutable. The event name for this key event.
     * Examples: 'click', 'purchase'
     *
     * Generated from protobuf field <code>string event_name = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getEventName()
    {
        return $this->event_name;
    }

    /**
     * Immutable. The event name for this key event.
     * Examples: 'click', 'purchase'
     *
     * Generated from protobuf field <code>string event_name = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setEventName($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_name = $var;

        return $this;
    }

    /**
     * Output only. Time when this key event was created in the property.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Time when this key event was created in the property.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. If set to true, this event can be deleted.
     *
     * Generated from protobuf field <code>bool deletable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getDeletable()
    {
        return $this->deletable;
    }

    /**
     * Output only. If set to true, this event can be deleted.
     *
     * Generated from protobuf field <code>bool deletable = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeletable($var)
    {
        GPBUtil::checkBool($var);
        $this->deletable = $var;

        return $this;
    }

    /**
     * Output only. If set to true, this key event refers to a custom event.  If
     * set to false, this key event refers to a default event in GA. Default
     * events typically have special meaning in GA. Default events are usually
     * created for you by the GA system, but in some cases can be created by
     * property admins. Custom events count towards the maximum number of
     * custom key events that may be created per property.
     *
     * Generated from protobuf field <code>bool custom = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Output only. If set to true, this key event refers to a custom event.  If
     * set to false, this key event refers to a default event in GA. Default
     * events typically have special meaning in GA. Default events are usually
     * created for you by the GA system, but in some cases can be created by
     * property admins. Custom events count towards the maximum number of
     * custom key events that may be created per property.
     *
     * Generated from protobuf field <code>bool custom = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setCustom($var)
    {
        GPBUtil::checkBool($var);
        $this->custom = $var;

        return $this;
    }

    /**
     * Required. The method by which Key Events will be counted across multiple
     * events within a session.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.KeyEvent.CountingMethod counting_method = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getCountingMethod()
    {
        return $this->counting_method;
    }

    /**
     * Required. The method by which Key Events will be counted across multiple
     * events within a session.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.KeyEvent.CountingMethod counting_method = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setCountingMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1beta\KeyEvent\CountingMethod::class);
        $this->counting_method = $var;

        return $this;
    }

    /**
     * Optional. Defines a default value/currency for a key event.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.KeyEvent.DefaultValue default_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Analytics\Admin\V1beta\KeyEvent\DefaultValue|null
     */
    public function getDefaultValue()
    {
        return $this->default_value;
    }

    public function hasDefaultValue()
    {
        return isset($this->default_value);
    }

    public function clearDefaultValue()
    {
        unset($this->default_value);
    }

    /**
     * Optional. Defines a default value/currency for a key event.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.KeyEvent.DefaultValue default_value = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Analytics\Admin\V1beta\KeyEvent\DefaultValue $var
     * @return $this
     */
    public function setDefaultValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1beta\KeyEvent\DefaultValue::class);
        $this->default_value = $var;

        return $this;
    }

}

