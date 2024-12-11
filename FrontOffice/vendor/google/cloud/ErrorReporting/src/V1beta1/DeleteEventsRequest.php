<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deletes all events in the project.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.DeleteEventsRequest</code>
 */
class DeleteEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/{projectID}` or `projects/{projectID}/locations/{location}`,
     * where `{projectID}` is the [Google Cloud Platform project
     * ID](https://support.google.com/cloud/answer/6158840) and `{location}` is
     * a Cloud region.
     * Examples: `projects/my-project-123`,
     * `projects/my-project-123/locations/global`.
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $project_name = '';

    /**
     * @param string $projectName Required. The resource name of the Google Cloud Platform project. Written
     *                            as `projects/{projectID}` or `projects/{projectID}/locations/{location}`,
     *                            where `{projectID}` is the [Google Cloud Platform project
     *                            ID](https://support.google.com/cloud/answer/6158840) and `{location}` is
     *                            a Cloud region.
     *
     *                            Examples: `projects/my-project-123`,
     *                            `projects/my-project-123/locations/global`.
     *
     *                            For a list of supported locations, see [Supported
     *                            Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     *                            the default when unspecified. Please see
     *                            {@see ErrorStatsServiceClient::projectName()} for help formatting this field.
     *
     * @return \Google\Cloud\ErrorReporting\V1beta1\DeleteEventsRequest
     *
     * @experimental
     */
    public static function build(string $projectName): self
    {
        return (new self())
            ->setProjectName($projectName);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_name
     *           Required. The resource name of the Google Cloud Platform project. Written
     *           as `projects/{projectID}` or `projects/{projectID}/locations/{location}`,
     *           where `{projectID}` is the [Google Cloud Platform project
     *           ID](https://support.google.com/cloud/answer/6158840) and `{location}` is
     *           a Cloud region.
     *           Examples: `projects/my-project-123`,
     *           `projects/my-project-123/locations/global`.
     *           For a list of supported locations, see [Supported
     *           Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     *           the default when unspecified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/{projectID}` or `projects/{projectID}/locations/{location}`,
     * where `{projectID}` is the [Google Cloud Platform project
     * ID](https://support.google.com/cloud/answer/6158840) and `{location}` is
     * a Cloud region.
     * Examples: `projects/my-project-123`,
     * `projects/my-project-123/locations/global`.
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * Required. The resource name of the Google Cloud Platform project. Written
     * as `projects/{projectID}` or `projects/{projectID}/locations/{location}`,
     * where `{projectID}` is the [Google Cloud Platform project
     * ID](https://support.google.com/cloud/answer/6158840) and `{location}` is
     * a Cloud region.
     * Examples: `projects/my-project-123`,
     * `projects/my-project-123/locations/global`.
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string project_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_name = $var;

        return $this;
    }

}

