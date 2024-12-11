<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/generative_question_service.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for UpdateGenerativeQuestionConfig method.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.UpdateGenerativeQuestionConfigRequest</code>
 */
class UpdateGenerativeQuestionConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The question to update.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.GenerativeQuestionConfig generative_question_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $generative_question_config = null;
    /**
     * Optional. Indicates which fields in the provided
     * [GenerativeQuestionConfig][google.cloud.retail.v2.GenerativeQuestionConfig]
     * to update. The following are NOT supported:
     * * [GenerativeQuestionConfig.frequency][google.cloud.retail.v2.GenerativeQuestionConfig.frequency]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\Retail\V2\GenerativeQuestionConfig $generativeQuestionConfig Required. The question to update.
     * @param \Google\Protobuf\FieldMask                       $updateMask               Optional. Indicates which fields in the provided
     *                                                                                   [GenerativeQuestionConfig][google.cloud.retail.v2.GenerativeQuestionConfig]
     *                                                                                   to update. The following are NOT supported:
     *
     *                                                                                   * [GenerativeQuestionConfig.frequency][google.cloud.retail.v2.GenerativeQuestionConfig.frequency]
     *
     *                                                                                   If not set or empty, all supported fields are updated.
     *
     * @return \Google\Cloud\Retail\V2\UpdateGenerativeQuestionConfigRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Retail\V2\GenerativeQuestionConfig $generativeQuestionConfig, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setGenerativeQuestionConfig($generativeQuestionConfig)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\GenerativeQuestionConfig $generative_question_config
     *           Required. The question to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Indicates which fields in the provided
     *           [GenerativeQuestionConfig][google.cloud.retail.v2.GenerativeQuestionConfig]
     *           to update. The following are NOT supported:
     *           * [GenerativeQuestionConfig.frequency][google.cloud.retail.v2.GenerativeQuestionConfig.frequency]
     *           If not set or empty, all supported fields are updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\GenerativeQuestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The question to update.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.GenerativeQuestionConfig generative_question_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\GenerativeQuestionConfig|null
     */
    public function getGenerativeQuestionConfig()
    {
        return $this->generative_question_config;
    }

    public function hasGenerativeQuestionConfig()
    {
        return isset($this->generative_question_config);
    }

    public function clearGenerativeQuestionConfig()
    {
        unset($this->generative_question_config);
    }

    /**
     * Required. The question to update.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.GenerativeQuestionConfig generative_question_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\GenerativeQuestionConfig $var
     * @return $this
     */
    public function setGenerativeQuestionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\GenerativeQuestionConfig::class);
        $this->generative_question_config = $var;

        return $this;
    }

    /**
     * Optional. Indicates which fields in the provided
     * [GenerativeQuestionConfig][google.cloud.retail.v2.GenerativeQuestionConfig]
     * to update. The following are NOT supported:
     * * [GenerativeQuestionConfig.frequency][google.cloud.retail.v2.GenerativeQuestionConfig.frequency]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Indicates which fields in the provided
     * [GenerativeQuestionConfig][google.cloud.retail.v2.GenerativeQuestionConfig]
     * to update. The following are NOT supported:
     * * [GenerativeQuestionConfig.frequency][google.cloud.retail.v2.GenerativeQuestionConfig.frequency]
     * If not set or empty, all supported fields are updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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

