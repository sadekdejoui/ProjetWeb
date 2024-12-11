<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1\TrainProcessorVersionMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The dataset validation information.
 * This includes any and all errors with documents and the dataset.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.TrainProcessorVersionMetadata.DatasetValidation</code>
 */
class DatasetValidation extends \Google\Protobuf\Internal\Message
{
    /**
     * The total number of document errors.
     *
     * Generated from protobuf field <code>int32 document_error_count = 3;</code>
     */
    protected $document_error_count = 0;
    /**
     * The total number of dataset errors.
     *
     * Generated from protobuf field <code>int32 dataset_error_count = 4;</code>
     */
    protected $dataset_error_count = 0;
    /**
     * Error information pertaining to specific documents. A maximum of 10
     * document errors will be returned.
     * Any document with errors will not be used throughout training.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status document_errors = 1;</code>
     */
    private $document_errors;
    /**
     * Error information for the dataset as a whole. A maximum of 10 dataset
     * errors will be returned.
     * A single dataset error is terminal for training.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status dataset_errors = 2;</code>
     */
    private $dataset_errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $document_error_count
     *           The total number of document errors.
     *     @type int $dataset_error_count
     *           The total number of dataset errors.
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $document_errors
     *           Error information pertaining to specific documents. A maximum of 10
     *           document errors will be returned.
     *           Any document with errors will not be used throughout training.
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $dataset_errors
     *           Error information for the dataset as a whole. A maximum of 10 dataset
     *           errors will be returned.
     *           A single dataset error is terminal for training.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * The total number of document errors.
     *
     * Generated from protobuf field <code>int32 document_error_count = 3;</code>
     * @return int
     */
    public function getDocumentErrorCount()
    {
        return $this->document_error_count;
    }

    /**
     * The total number of document errors.
     *
     * Generated from protobuf field <code>int32 document_error_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDocumentErrorCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->document_error_count = $var;

        return $this;
    }

    /**
     * The total number of dataset errors.
     *
     * Generated from protobuf field <code>int32 dataset_error_count = 4;</code>
     * @return int
     */
    public function getDatasetErrorCount()
    {
        return $this->dataset_error_count;
    }

    /**
     * The total number of dataset errors.
     *
     * Generated from protobuf field <code>int32 dataset_error_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDatasetErrorCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->dataset_error_count = $var;

        return $this;
    }

    /**
     * Error information pertaining to specific documents. A maximum of 10
     * document errors will be returned.
     * Any document with errors will not be used throughout training.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status document_errors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocumentErrors()
    {
        return $this->document_errors;
    }

    /**
     * Error information pertaining to specific documents. A maximum of 10
     * document errors will be returned.
     * Any document with errors will not be used throughout training.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status document_errors = 1;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocumentErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->document_errors = $arr;

        return $this;
    }

    /**
     * Error information for the dataset as a whole. A maximum of 10 dataset
     * errors will be returned.
     * A single dataset error is terminal for training.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status dataset_errors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDatasetErrors()
    {
        return $this->dataset_errors;
    }

    /**
     * Error information for the dataset as a whole. A maximum of 10 dataset
     * errors will be returned.
     * A single dataset error is terminal for training.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status dataset_errors = 2;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDatasetErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->dataset_errors = $arr;

        return $this;
    }

}


