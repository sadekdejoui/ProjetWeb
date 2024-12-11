<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ModelService.ImportModelEvaluation][google.cloud.aiplatform.v1.ModelService.ImportModelEvaluation]
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ImportModelEvaluationRequest</code>
 */
class ImportModelEvaluationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Model evaluation resource to be imported.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelEvaluation model_evaluation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $model_evaluation = null;

    /**
     * @param string                                      $parent          Required. The name of the parent model resource.
     *                                                                     Format: `projects/{project}/locations/{location}/models/{model}`
     *                                                                     Please see {@see ModelServiceClient::modelName()} for help formatting this field.
     * @param \Google\Cloud\AIPlatform\V1\ModelEvaluation $modelEvaluation Required. Model evaluation resource to be imported.
     *
     * @return \Google\Cloud\AIPlatform\V1\ImportModelEvaluationRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\AIPlatform\V1\ModelEvaluation $modelEvaluation): self
    {
        return (new self())
            ->setParent($parent)
            ->setModelEvaluation($modelEvaluation);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent model resource.
     *           Format: `projects/{project}/locations/{location}/models/{model}`
     *     @type \Google\Cloud\AIPlatform\V1\ModelEvaluation $model_evaluation
     *           Required. Model evaluation resource to be imported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent model resource.
     * Format: `projects/{project}/locations/{location}/models/{model}`
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
     * Required. Model evaluation resource to be imported.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelEvaluation model_evaluation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelEvaluation|null
     */
    public function getModelEvaluation()
    {
        return $this->model_evaluation;
    }

    public function hasModelEvaluation()
    {
        return isset($this->model_evaluation);
    }

    public function clearModelEvaluation()
    {
        unset($this->model_evaluation);
    }

    /**
     * Required. Model evaluation resource to be imported.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelEvaluation model_evaluation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelEvaluation $var
     * @return $this
     */
    public function setModelEvaluation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelEvaluation::class);
        $this->model_evaluation = $var;

        return $this;
    }

}

