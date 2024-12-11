<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for list all processor versions belongs to a processor.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.ListProcessorVersionsRequest</code>
 */
class ListProcessorVersionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent (project, location and processor) to list all
     * versions. Format:
     * `projects/{project}/locations/{location}/processors/{processor}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of processor versions to return.
     * If unspecified, at most `10` processor versions will be returned.
     * The maximum value is `20`. Values above `20` will be coerced to `20`.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * We will return the processor versions sorted by creation time. The page
     * token will point to the next processor version.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The parent (project, location and processor) to list all
     *                       versions. Format:
     *                       `projects/{project}/locations/{location}/processors/{processor}`
     *                       Please see {@see DocumentProcessorServiceClient::processorName()} for help formatting this field.
     *
     * @return \Google\Cloud\DocumentAI\V1\ListProcessorVersionsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent (project, location and processor) to list all
     *           versions. Format:
     *           `projects/{project}/locations/{location}/processors/{processor}`
     *     @type int $page_size
     *           The maximum number of processor versions to return.
     *           If unspecified, at most `10` processor versions will be returned.
     *           The maximum value is `20`. Values above `20` will be coerced to `20`.
     *     @type string $page_token
     *           We will return the processor versions sorted by creation time. The page
     *           token will point to the next processor version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent (project, location and processor) to list all
     * versions. Format:
     * `projects/{project}/locations/{location}/processors/{processor}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent (project, location and processor) to list all
     * versions. Format:
     * `projects/{project}/locations/{location}/processors/{processor}`
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
     * The maximum number of processor versions to return.
     * If unspecified, at most `10` processor versions will be returned.
     * The maximum value is `20`. Values above `20` will be coerced to `20`.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of processor versions to return.
     * If unspecified, at most `10` processor versions will be returned.
     * The maximum value is `20`. Values above `20` will be coerced to `20`.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * We will return the processor versions sorted by creation time. The page
     * token will point to the next processor version.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * We will return the processor versions sorted by creation time. The page
     * token will point to the next processor version.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

