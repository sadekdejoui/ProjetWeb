<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Preset configuration for example-based explanations
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Presets</code>
 */
class Presets extends \Google\Protobuf\Internal\Message
{
    /**
     * Preset option controlling parameters for speed-precision trade-off when
     * querying for examples. If omitted, defaults to `PRECISE`.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Presets.Query query = 1;</code>
     */
    protected $query = null;
    /**
     * The modality of the uploaded model, which automatically configures the
     * distance measurement and feature normalization for the underlying example
     * index and queries. If your model does not precisely fit one of these types,
     * it is okay to choose the closest type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Presets.Modality modality = 2;</code>
     */
    protected $modality = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $query
     *           Preset option controlling parameters for speed-precision trade-off when
     *           querying for examples. If omitted, defaults to `PRECISE`.
     *     @type int $modality
     *           The modality of the uploaded model, which automatically configures the
     *           distance measurement and feature normalization for the underlying example
     *           index and queries. If your model does not precisely fit one of these types,
     *           it is okay to choose the closest type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * Preset option controlling parameters for speed-precision trade-off when
     * querying for examples. If omitted, defaults to `PRECISE`.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Presets.Query query = 1;</code>
     * @return int
     */
    public function getQuery()
    {
        return isset($this->query) ? $this->query : 0;
    }

    public function hasQuery()
    {
        return isset($this->query);
    }

    public function clearQuery()
    {
        unset($this->query);
    }

    /**
     * Preset option controlling parameters for speed-precision trade-off when
     * querying for examples. If omitted, defaults to `PRECISE`.
     *
     * Generated from protobuf field <code>optional .google.cloud.aiplatform.v1.Presets.Query query = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Presets\Query::class);
        $this->query = $var;

        return $this;
    }

    /**
     * The modality of the uploaded model, which automatically configures the
     * distance measurement and feature normalization for the underlying example
     * index and queries. If your model does not precisely fit one of these types,
     * it is okay to choose the closest type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Presets.Modality modality = 2;</code>
     * @return int
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * The modality of the uploaded model, which automatically configures the
     * distance measurement and feature normalization for the underlying example
     * index and queries. If your model does not precisely fit one of these types,
     * it is okay to choose the closest type.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Presets.Modality modality = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setModality($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\AIPlatform\V1\Presets\Modality::class);
        $this->modality = $var;

        return $this;
    }

}

