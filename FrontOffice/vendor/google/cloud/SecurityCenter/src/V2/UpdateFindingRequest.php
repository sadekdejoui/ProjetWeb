<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for updating or creating a finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.UpdateFindingRequest</code>
 */
class UpdateFindingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The finding resource to update or create if it does not already
     * exist. parent, security_marks, and update_time will be ignored.
     * In the case of creation, the finding id portion of the name must be
     * alphanumeric and less than or equal to 32 characters and greater than 0
     * characters in length.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Finding finding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $finding = null;
    /**
     * The FieldMask to use when updating the finding resource. This field should
     * not be specified when creating a finding.
     * When updating a finding, an empty mask is treated as updating all mutable
     * fields and replacing source_properties.  Individual source_properties can
     * be added/updated by using "source_properties.<property key>" in the field
     * mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\SecurityCenter\V2\Finding $finding    Required. The finding resource to update or create if it does not already
     *                                                            exist. parent, security_marks, and update_time will be ignored.
     *
     *                                                            In the case of creation, the finding id portion of the name must be
     *                                                            alphanumeric and less than or equal to 32 characters and greater than 0
     *                                                            characters in length.
     * @param \Google\Protobuf\FieldMask              $updateMask The FieldMask to use when updating the finding resource. This field should
     *                                                            not be specified when creating a finding.
     *
     *                                                            When updating a finding, an empty mask is treated as updating all mutable
     *                                                            fields and replacing source_properties.  Individual source_properties can
     *                                                            be added/updated by using "source_properties.<property key>" in the field
     *                                                            mask.
     *
     * @return \Google\Cloud\SecurityCenter\V2\UpdateFindingRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\SecurityCenter\V2\Finding $finding, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setFinding($finding)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V2\Finding $finding
     *           Required. The finding resource to update or create if it does not already
     *           exist. parent, security_marks, and update_time will be ignored.
     *           In the case of creation, the finding id portion of the name must be
     *           alphanumeric and less than or equal to 32 characters and greater than 0
     *           characters in length.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The FieldMask to use when updating the finding resource. This field should
     *           not be specified when creating a finding.
     *           When updating a finding, an empty mask is treated as updating all mutable
     *           fields and replacing source_properties.  Individual source_properties can
     *           be added/updated by using "source_properties.<property key>" in the field
     *           mask.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The finding resource to update or create if it does not already
     * exist. parent, security_marks, and update_time will be ignored.
     * In the case of creation, the finding id portion of the name must be
     * alphanumeric and less than or equal to 32 characters and greater than 0
     * characters in length.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Finding finding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V2\Finding|null
     */
    public function getFinding()
    {
        return $this->finding;
    }

    public function hasFinding()
    {
        return isset($this->finding);
    }

    public function clearFinding()
    {
        unset($this->finding);
    }

    /**
     * Required. The finding resource to update or create if it does not already
     * exist. parent, security_marks, and update_time will be ignored.
     * In the case of creation, the finding id portion of the name must be
     * alphanumeric and less than or equal to 32 characters and greater than 0
     * characters in length.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Finding finding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V2\Finding $var
     * @return $this
     */
    public function setFinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V2\Finding::class);
        $this->finding = $var;

        return $this;
    }

    /**
     * The FieldMask to use when updating the finding resource. This field should
     * not be specified when creating a finding.
     * When updating a finding, an empty mask is treated as updating all mutable
     * fields and replacing source_properties.  Individual source_properties can
     * be added/updated by using "source_properties.<property key>" in the field
     * mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The FieldMask to use when updating the finding resource. This field should
     * not be specified when creating a finding.
     * When updating a finding, an empty mask is treated as updating all mutable
     * fields and replacing source_properties.  Individual source_properties can
     * be added/updated by using "source_properties.<property key>" in the field
     * mask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

