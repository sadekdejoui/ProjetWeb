<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_store.proto

namespace Google\Cloud\AIPlatform\V1\MetadataStore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents Dataplex integration settings.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.MetadataStore.DataplexConfig</code>
 */
class DataplexConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Whether or not Data Lineage synchronization is enabled for
     * Vertex Pipelines.
     *
     * Generated from protobuf field <code>bool enabled_pipelines_lineage = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enabled_pipelines_lineage = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled_pipelines_lineage
     *           Optional. Whether or not Data Lineage synchronization is enabled for
     *           Vertex Pipelines.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataStore::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Whether or not Data Lineage synchronization is enabled for
     * Vertex Pipelines.
     *
     * Generated from protobuf field <code>bool enabled_pipelines_lineage = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnabledPipelinesLineage()
    {
        return $this->enabled_pipelines_lineage;
    }

    /**
     * Optional. Whether or not Data Lineage synchronization is enabled for
     * Vertex Pipelines.
     *
     * Generated from protobuf field <code>bool enabled_pipelines_lineage = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabledPipelinesLineage($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled_pipelines_lineage = $var;

        return $this;
    }

}


