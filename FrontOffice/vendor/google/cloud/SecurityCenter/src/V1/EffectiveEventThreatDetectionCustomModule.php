<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/effective_event_threat_detection_custom_module.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An EffectiveEventThreatDetectionCustomModule is the representation of
 * an Event Threat Detection custom module at a specified level of the
 * resource hierarchy: organization, folder, or project. If a custom module is
 * inherited from a parent organization or folder, the value of the
 * `enablement_state` property in EffectiveEventThreatDetectionCustomModule is
 * set to the value that is effective in the parent, instead of `INHERITED`.
 * For example, if the module is enabled in a parent organization or folder, the
 * effective `enablement_state` for the module in all child folders or projects
 * is also `enabled`. EffectiveEventThreatDetectionCustomModule is read-only.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.EffectiveEventThreatDetectionCustomModule</code>
 */
class EffectiveEventThreatDetectionCustomModule extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the effective ETD custom module.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. Config for the effective module.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $config = null;
    /**
     * Output only. The effective state of enablement for the module at the given
     * level of the hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EffectiveEventThreatDetectionCustomModule.EnablementState enablement_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $enablement_state = 0;
    /**
     * Output only. Type for the module. e.g. CONFIGURABLE_BAD_IP.
     *
     * Generated from protobuf field <code>string type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = '';
    /**
     * Output only. The human readable name to be displayed for the module.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';
    /**
     * Output only. The description for the module.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the effective ETD custom module.
     *           Its format is:
     *             * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *             * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *             * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *     @type \Google\Protobuf\Struct $config
     *           Output only. Config for the effective module.
     *     @type int $enablement_state
     *           Output only. The effective state of enablement for the module at the given
     *           level of the hierarchy.
     *     @type string $type
     *           Output only. Type for the module. e.g. CONFIGURABLE_BAD_IP.
     *     @type string $display_name
     *           Output only. The human readable name to be displayed for the module.
     *     @type string $description
     *           Output only. The description for the module.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\EffectiveEventThreatDetectionCustomModule::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the effective ETD custom module.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the effective ETD custom module.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `folders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
     *   * `projects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}`.
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
     * Output only. Config for the effective module.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Output only. Config for the effective module.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct config = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->config = $var;

        return $this;
    }

    /**
     * Output only. The effective state of enablement for the module at the given
     * level of the hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EffectiveEventThreatDetectionCustomModule.EnablementState enablement_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getEnablementState()
    {
        return $this->enablement_state;
    }

    /**
     * Output only. The effective state of enablement for the module at the given
     * level of the hierarchy.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.EffectiveEventThreatDetectionCustomModule.EnablementState enablement_state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setEnablementState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\EffectiveEventThreatDetectionCustomModule\EnablementState::class);
        $this->enablement_state = $var;

        return $this;
    }

    /**
     * Output only. Type for the module. e.g. CONFIGURABLE_BAD_IP.
     *
     * Generated from protobuf field <code>string type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. Type for the module. e.g. CONFIGURABLE_BAD_IP.
     *
     * Generated from protobuf field <code>string type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The human readable name to be displayed for the module.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The human readable name to be displayed for the module.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The description for the module.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Output only. The description for the module.
     *
     * Generated from protobuf field <code>string description = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

