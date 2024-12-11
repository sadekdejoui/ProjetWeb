<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/vertex_rag_data_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [VertexRagDataService.ImportRagFiles][google.cloud.aiplatform.v1.VertexRagDataService.ImportRagFiles].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ImportRagFilesRequest</code>
 */
class ImportRagFilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the RagCorpus resource into which to import files.
     * Format:
     * `projects/{project}/locations/{location}/ragCorpora/{rag_corpus}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The config for the RagFiles to be synced and imported into the
     * RagCorpus.
     * [VertexRagDataService.ImportRagFiles][google.cloud.aiplatform.v1.VertexRagDataService.ImportRagFiles].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ImportRagFilesConfig import_rag_files_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $import_rag_files_config = null;

    /**
     * @param string                                           $parent               Required. The name of the RagCorpus resource into which to import files.
     *                                                                               Format:
     *                                                                               `projects/{project}/locations/{location}/ragCorpora/{rag_corpus}`
     *                                                                               Please see {@see VertexRagDataServiceClient::ragCorpusName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\ImportRagFilesConfig $importRagFilesConfig Required. The config for the RagFiles to be synced and imported into the
     *                                                                               RagCorpus.
     *                                                                               [VertexRagDataService.ImportRagFiles][google.cloud.aiplatform.v1.VertexRagDataService.ImportRagFiles].
     *
     * @return \Google\Cloud\AIPlatform\V1\ImportRagFilesRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\ImportRagFilesConfig $importRagFilesConfig): self
    {
        return (new self())
            ->setParent($parent)
            ->setImportRagFilesConfig($importRagFilesConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the RagCorpus resource into which to import files.
     *           Format:
     *           `projects/{project}/locations/{location}/ragCorpora/{rag_corpus}`
     *     @type \Google\Cloud\AIPlatform\V1\ImportRagFilesConfig $import_rag_files_config
     *           Required. The config for the RagFiles to be synced and imported into the
     *           RagCorpus.
     *           [VertexRagDataService.ImportRagFiles][google.cloud.aiplatform.v1.VertexRagDataService.ImportRagFiles].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\VertexRagDataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the RagCorpus resource into which to import files.
     * Format:
     * `projects/{project}/locations/{location}/ragCorpora/{rag_corpus}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the RagCorpus resource into which to import files.
     * Format:
     * `projects/{project}/locations/{location}/ragCorpora/{rag_corpus}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The config for the RagFiles to be synced and imported into the
     * RagCorpus.
     * [VertexRagDataService.ImportRagFiles][google.cloud.aiplatform.v1.VertexRagDataService.ImportRagFiles].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ImportRagFilesConfig import_rag_files_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\ImportRagFilesConfig|null
     */
    public function getImportRagFilesConfig()
    {
        return $this->import_rag_files_config;
    }

    public function hasImportRagFilesConfig()
    {
        return isset($this->import_rag_files_config);
    }

    public function clearImportRagFilesConfig()
    {
        unset($this->import_rag_files_config);
    }

    /**
     * Required. The config for the RagFiles to be synced and imported into the
     * RagCorpus.
     * [VertexRagDataService.ImportRagFiles][google.cloud.aiplatform.v1.VertexRagDataService.ImportRagFiles].
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ImportRagFilesConfig import_rag_files_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\ImportRagFilesConfig $var
     * @return $this
     */
    public function setImportRagFilesConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ImportRagFilesConfig::class);
        $this->import_rag_files_config = $var;

        return $this;
    }

}

