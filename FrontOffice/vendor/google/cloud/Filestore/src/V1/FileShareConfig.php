<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * File share configuration for the instance.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.FileShareConfig</code>
 */
class FileShareConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the file share. Must use 1-16 characters for the
     * basic service tier and 1-63 characters for all other service tiers.
     * Must use lowercase letters, numbers, or underscores `[a-z0-9_]`. Must
     * start with a letter. Immutable.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * File share capacity in gigabytes (GB).
     * Filestore defines 1 GB as 1024^3 bytes.
     *
     * Generated from protobuf field <code>int64 capacity_gb = 2;</code>
     */
    protected $capacity_gb = 0;
    /**
     * Nfs Export Options.
     * There is a limit of 10 export options per file share.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.NfsExportOptions nfs_export_options = 7;</code>
     */
    private $nfs_export_options;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the file share. Must use 1-16 characters for the
     *           basic service tier and 1-63 characters for all other service tiers.
     *           Must use lowercase letters, numbers, or underscores `[a-z0-9_]`. Must
     *           start with a letter. Immutable.
     *     @type int|string $capacity_gb
     *           File share capacity in gigabytes (GB).
     *           Filestore defines 1 GB as 1024^3 bytes.
     *     @type string $source_backup
     *           The resource name of the backup, in the format
     *           `projects/{project_number}/locations/{location_id}/backups/{backup_id}`,
     *           that this file share has been restored from.
     *     @type array<\Google\Cloud\Filestore\V1\NfsExportOptions>|\Google\Protobuf\Internal\RepeatedField $nfs_export_options
     *           Nfs Export Options.
     *           There is a limit of 10 export options per file share.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the file share. Must use 1-16 characters for the
     * basic service tier and 1-63 characters for all other service tiers.
     * Must use lowercase letters, numbers, or underscores `[a-z0-9_]`. Must
     * start with a letter. Immutable.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the file share. Must use 1-16 characters for the
     * basic service tier and 1-63 characters for all other service tiers.
     * Must use lowercase letters, numbers, or underscores `[a-z0-9_]`. Must
     * start with a letter. Immutable.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * File share capacity in gigabytes (GB).
     * Filestore defines 1 GB as 1024^3 bytes.
     *
     * Generated from protobuf field <code>int64 capacity_gb = 2;</code>
     * @return int|string
     */
    public function getCapacityGb()
    {
        return $this->capacity_gb;
    }

    /**
     * File share capacity in gigabytes (GB).
     * Filestore defines 1 GB as 1024^3 bytes.
     *
     * Generated from protobuf field <code>int64 capacity_gb = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacityGb($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity_gb = $var;

        return $this;
    }

    /**
     * The resource name of the backup, in the format
     * `projects/{project_number}/locations/{location_id}/backups/{backup_id}`,
     * that this file share has been restored from.
     *
     * Generated from protobuf field <code>string source_backup = 8 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSourceBackup()
    {
        return $this->readOneof(8);
    }

    public function hasSourceBackup()
    {
        return $this->hasOneof(8);
    }

    /**
     * The resource name of the backup, in the format
     * `projects/{project_number}/locations/{location_id}/backups/{backup_id}`,
     * that this file share has been restored from.
     *
     * Generated from protobuf field <code>string source_backup = 8 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSourceBackup($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Nfs Export Options.
     * There is a limit of 10 export options per file share.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.NfsExportOptions nfs_export_options = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNfsExportOptions()
    {
        return $this->nfs_export_options;
    }

    /**
     * Nfs Export Options.
     * There is a limit of 10 export options per file share.
     *
     * Generated from protobuf field <code>repeated .google.cloud.filestore.v1.NfsExportOptions nfs_export_options = 7;</code>
     * @param array<\Google\Cloud\Filestore\V1\NfsExportOptions>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNfsExportOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Filestore\V1\NfsExportOptions::class);
        $this->nfs_export_options = $arr;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

