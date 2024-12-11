<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to update a workflow template.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.UpdateWorkflowTemplateRequest</code>
 */
class UpdateWorkflowTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated workflow template.
     * The `template.version` field must match the current version.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.WorkflowTemplate template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $template = null;

    /**
     * @param \Google\Cloud\Dataproc\V1\WorkflowTemplate $template Required. The updated workflow template.
     *
     *                                                             The `template.version` field must match the current version.
     *
     * @return \Google\Cloud\Dataproc\V1\UpdateWorkflowTemplateRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Dataproc\V1\WorkflowTemplate $template): self
    {
        return (new self())
            ->setTemplate($template);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1\WorkflowTemplate $template
     *           Required. The updated workflow template.
     *           The `template.version` field must match the current version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated workflow template.
     * The `template.version` field must match the current version.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.WorkflowTemplate template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\WorkflowTemplate|null
     */
    public function getTemplate()
    {
        return $this->template;
    }

    public function hasTemplate()
    {
        return isset($this->template);
    }

    public function clearTemplate()
    {
        unset($this->template);
    }

    /**
     * Required. The updated workflow template.
     * The `template.version` field must match the current version.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.WorkflowTemplate template = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\WorkflowTemplate $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\WorkflowTemplate::class);
        $this->template = $var;

        return $this;
    }

}

