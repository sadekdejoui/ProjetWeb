<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/metastore/v1beta/metastore.proto

namespace Google\Cloud\Metastore\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [DataprocMetastore.Restore][].
 *
 * Generated from protobuf message <code>google.cloud.metastore.v1beta.RestoreServiceRequest</code>
 */
class RestoreServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the metastore service to run
     * restore, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $service = '';
    /**
     * Required. The relative resource name of the metastore service backup to
     * restore from, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string backup = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $backup = '';
    /**
     * Optional. The type of restore. If unspecified, defaults to `METADATA_ONLY`.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Restore.RestoreType restore_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $restore_type = 0;
    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format).
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string $service Required. The relative resource name of the metastore service to run
     *                        restore, in the following form:
     *
     *                        `projects/{project_id}/locations/{location_id}/services/{service_id}`. Please see
     *                        {@see DataprocMetastoreClient::serviceName()} for help formatting this field.
     * @param string $backup  Required. The relative resource name of the metastore service backup to
     *                        restore from, in the following form:
     *
     *                        `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`. Please see
     *                        {@see DataprocMetastoreClient::backupName()} for help formatting this field.
     *
     * @return \Google\Cloud\Metastore\V1beta\RestoreServiceRequest
     *
     * @experimental
     */
    public static function build(string $service, string $backup): self
    {
        return (new self())
            ->setService($service)
            ->setBackup($backup);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Required. The relative resource name of the metastore service to run
     *           restore, in the following form:
     *           `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *     @type string $backup
     *           Required. The relative resource name of the metastore service backup to
     *           restore from, in the following form:
     *           `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`.
     *     @type int $restore_type
     *           Optional. The type of restore. If unspecified, defaults to `METADATA_ONLY`.
     *     @type string $request_id
     *           Optional. A request ID. Specify a unique request ID to allow the server to
     *           ignore the request if it has completed. The server will ignore subsequent
     *           requests that provide a duplicate request ID for at least 60 minutes after
     *           the first request.
     *           For example, if an initial request times out, followed by another request
     *           with the same request ID, the server ignores the second request to prevent
     *           the creation of duplicate commitments.
     *           The request ID must be a valid
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format).
     *           A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Metastore\V1Beta\Metastore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the metastore service to run
     * restore, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Required. The relative resource name of the metastore service to run
     * restore, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}`.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Required. The relative resource name of the metastore service backup to
     * restore from, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string backup = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getBackup()
    {
        return $this->backup;
    }

    /**
     * Required. The relative resource name of the metastore service backup to
     * restore from, in the following form:
     * `projects/{project_id}/locations/{location_id}/services/{service_id}/backups/{backup_id}`.
     *
     * Generated from protobuf field <code>string backup = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup = $var;

        return $this;
    }

    /**
     * Optional. The type of restore. If unspecified, defaults to `METADATA_ONLY`.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Restore.RestoreType restore_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getRestoreType()
    {
        return $this->restore_type;
    }

    /**
     * Optional. The type of restore. If unspecified, defaults to `METADATA_ONLY`.
     *
     * Generated from protobuf field <code>.google.cloud.metastore.v1beta.Restore.RestoreType restore_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setRestoreType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Metastore\V1beta\Restore\RestoreType::class);
        $this->restore_type = $var;

        return $this;
    }

    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format).
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A request ID. Specify a unique request ID to allow the server to
     * ignore the request if it has completed. The server will ignore subsequent
     * requests that provide a duplicate request ID for at least 60 minutes after
     * the first request.
     * For example, if an initial request times out, followed by another request
     * with the same request ID, the server ignores the second request to prevent
     * the creation of duplicate commitments.
     * The request ID must be a valid
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier#Format).
     * A zero UUID (00000000-0000-0000-0000-000000000000) is not supported.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

