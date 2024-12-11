<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/grounded_generation_service.proto

namespace Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentRequest\DynamicRetrievalConfiguration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the predictor settings for dynamic retrieval.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.GenerateGroundedContentRequest.DynamicRetrievalConfiguration.DynamicRetrievalPredictor</code>
 */
class DynamicRetrievalPredictor extends \Google\Protobuf\Internal\Message
{
    /**
     * The version of the predictor to be used in dynamic retrieval.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.GenerateGroundedContentRequest.DynamicRetrievalConfiguration.DynamicRetrievalPredictor.Version version = 1;</code>
     */
    protected $version = 0;
    /**
     * The value of the threshold. If the predictor will predict a
     * value smaller than this, it would suppress grounding in the source.
     *
     * Generated from protobuf field <code>optional float threshold = 2;</code>
     */
    protected $threshold = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $version
     *           The version of the predictor to be used in dynamic retrieval.
     *     @type float $threshold
     *           The value of the threshold. If the predictor will predict a
     *           value smaller than this, it would suppress grounding in the source.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\GroundedGenerationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The version of the predictor to be used in dynamic retrieval.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.GenerateGroundedContentRequest.DynamicRetrievalConfiguration.DynamicRetrievalPredictor.Version version = 1;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the predictor to be used in dynamic retrieval.
     *
     * Generated from protobuf field <code>.google.cloud.discoveryengine.v1.GenerateGroundedContentRequest.DynamicRetrievalConfiguration.DynamicRetrievalPredictor.Version version = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DiscoveryEngine\V1\GenerateGroundedContentRequest\DynamicRetrievalConfiguration\DynamicRetrievalPredictor\Version::class);
        $this->version = $var;

        return $this;
    }

    /**
     * The value of the threshold. If the predictor will predict a
     * value smaller than this, it would suppress grounding in the source.
     *
     * Generated from protobuf field <code>optional float threshold = 2;</code>
     * @return float
     */
    public function getThreshold()
    {
        return isset($this->threshold) ? $this->threshold : 0.0;
    }

    public function hasThreshold()
    {
        return isset($this->threshold);
    }

    public function clearThreshold()
    {
        unset($this->threshold);
    }

    /**
     * The value of the threshold. If the predictor will predict a
     * value smaller than this, it would suppress grounding in the source.
     *
     * Generated from protobuf field <code>optional float threshold = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->threshold = $var;

        return $this;
    }

}


