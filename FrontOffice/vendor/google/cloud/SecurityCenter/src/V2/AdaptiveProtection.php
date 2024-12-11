<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/cloud_armor.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about [Google Cloud Armor Adaptive
 * Protection](https://cloud.google.com/armor/docs/cloud-armor-overview#google-cloud-armor-adaptive-protection).
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.AdaptiveProtection</code>
 */
class AdaptiveProtection extends \Google\Protobuf\Internal\Message
{
    /**
     * A score of 0 means that there is low confidence that the detected event is
     * an actual attack. A score of 1 means that there is high confidence that the
     * detected event is an attack. See the [Adaptive Protection
     * documentation](https://cloud.google.com/armor/docs/adaptive-protection-overview#configure-alert-tuning)
     * for further explanation.
     *
     * Generated from protobuf field <code>double confidence = 1;</code>
     */
    protected $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $confidence
     *           A score of 0 means that there is low confidence that the detected event is
     *           an actual attack. A score of 1 means that there is high confidence that the
     *           detected event is an attack. See the [Adaptive Protection
     *           documentation](https://cloud.google.com/armor/docs/adaptive-protection-overview#configure-alert-tuning)
     *           for further explanation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\CloudArmor::initOnce();
        parent::__construct($data);
    }

    /**
     * A score of 0 means that there is low confidence that the detected event is
     * an actual attack. A score of 1 means that there is high confidence that the
     * detected event is an attack. See the [Adaptive Protection
     * documentation](https://cloud.google.com/armor/docs/adaptive-protection-overview#configure-alert-tuning)
     * for further explanation.
     *
     * Generated from protobuf field <code>double confidence = 1;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * A score of 0 means that there is low confidence that the detected event is
     * an actual attack. A score of 1 means that there is high confidence that the
     * detected event is an attack. See the [Adaptive Protection
     * documentation](https://cloud.google.com/armor/docs/adaptive-protection-overview#configure-alert-tuning)
     * for further explanation.
     *
     * Generated from protobuf field <code>double confidence = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkDouble($var);
        $this->confidence = $var;

        return $this;
    }

}

