<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/security_settings.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [SecuritySettings.DeleteSecuritySettings][].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.DeleteSecuritySettingsRequest</code>
 */
class DeleteSecuritySettingsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings] to
     * delete. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the
     *                     [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings] to
     *                     delete. Format:
     *                     `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`. Please see
     *                     {@see SecuritySettingsServiceClient::securitySettingsName()} for help formatting this field.
     *
     * @return \Google\Cloud\Dialogflow\Cx\V3\DeleteSecuritySettingsRequest
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
     *           Required. The name of the
     *           [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings] to
     *           delete. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\SecuritySettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings] to
     * delete. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the
     * [SecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettings] to
     * delete. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
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

}

