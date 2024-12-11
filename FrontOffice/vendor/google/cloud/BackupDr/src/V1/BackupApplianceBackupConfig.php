<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/backupdr/v1/backupvault.proto

namespace Google\Cloud\BackupDR\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BackupApplianceBackupConfig captures the backup configuration for
 * applications that are protected by Backup Appliances.
 *
 * Generated from protobuf message <code>google.cloud.backupdr.v1.BackupApplianceBackupConfig</code>
 */
class BackupApplianceBackupConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the backup appliance.
     *
     * Generated from protobuf field <code>string backup_appliance_name = 1;</code>
     */
    protected $backup_appliance_name = '';
    /**
     * The ID of the backup appliance.
     *
     * Generated from protobuf field <code>int64 backup_appliance_id = 2;</code>
     */
    protected $backup_appliance_id = 0;
    /**
     * The ID of the SLA of this application.
     *
     * Generated from protobuf field <code>int64 sla_id = 3;</code>
     */
    protected $sla_id = 0;
    /**
     * The name of the application.
     *
     * Generated from protobuf field <code>string application_name = 4;</code>
     */
    protected $application_name = '';
    /**
     * The name of the host where the application is running.
     *
     * Generated from protobuf field <code>string host_name = 5;</code>
     */
    protected $host_name = '';
    /**
     * The name of the SLT associated with the application.
     *
     * Generated from protobuf field <code>string slt_name = 6;</code>
     */
    protected $slt_name = '';
    /**
     * The name of the SLP associated with the application.
     *
     * Generated from protobuf field <code>string slp_name = 7;</code>
     */
    protected $slp_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $backup_appliance_name
     *           The name of the backup appliance.
     *     @type int|string $backup_appliance_id
     *           The ID of the backup appliance.
     *     @type int|string $sla_id
     *           The ID of the SLA of this application.
     *     @type string $application_name
     *           The name of the application.
     *     @type string $host_name
     *           The name of the host where the application is running.
     *     @type string $slt_name
     *           The name of the SLT associated with the application.
     *     @type string $slp_name
     *           The name of the SLP associated with the application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Backupdr\V1\Backupvault::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the backup appliance.
     *
     * Generated from protobuf field <code>string backup_appliance_name = 1;</code>
     * @return string
     */
    public function getBackupApplianceName()
    {
        return $this->backup_appliance_name;
    }

    /**
     * The name of the backup appliance.
     *
     * Generated from protobuf field <code>string backup_appliance_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBackupApplianceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->backup_appliance_name = $var;

        return $this;
    }

    /**
     * The ID of the backup appliance.
     *
     * Generated from protobuf field <code>int64 backup_appliance_id = 2;</code>
     * @return int|string
     */
    public function getBackupApplianceId()
    {
        return $this->backup_appliance_id;
    }

    /**
     * The ID of the backup appliance.
     *
     * Generated from protobuf field <code>int64 backup_appliance_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBackupApplianceId($var)
    {
        GPBUtil::checkInt64($var);
        $this->backup_appliance_id = $var;

        return $this;
    }

    /**
     * The ID of the SLA of this application.
     *
     * Generated from protobuf field <code>int64 sla_id = 3;</code>
     * @return int|string
     */
    public function getSlaId()
    {
        return $this->sla_id;
    }

    /**
     * The ID of the SLA of this application.
     *
     * Generated from protobuf field <code>int64 sla_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlaId($var)
    {
        GPBUtil::checkInt64($var);
        $this->sla_id = $var;

        return $this;
    }

    /**
     * The name of the application.
     *
     * Generated from protobuf field <code>string application_name = 4;</code>
     * @return string
     */
    public function getApplicationName()
    {
        return $this->application_name;
    }

    /**
     * The name of the application.
     *
     * Generated from protobuf field <code>string application_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_name = $var;

        return $this;
    }

    /**
     * The name of the host where the application is running.
     *
     * Generated from protobuf field <code>string host_name = 5;</code>
     * @return string
     */
    public function getHostName()
    {
        return $this->host_name;
    }

    /**
     * The name of the host where the application is running.
     *
     * Generated from protobuf field <code>string host_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHostName($var)
    {
        GPBUtil::checkString($var, True);
        $this->host_name = $var;

        return $this;
    }

    /**
     * The name of the SLT associated with the application.
     *
     * Generated from protobuf field <code>string slt_name = 6;</code>
     * @return string
     */
    public function getSltName()
    {
        return $this->slt_name;
    }

    /**
     * The name of the SLT associated with the application.
     *
     * Generated from protobuf field <code>string slt_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSltName($var)
    {
        GPBUtil::checkString($var, True);
        $this->slt_name = $var;

        return $this;
    }

    /**
     * The name of the SLP associated with the application.
     *
     * Generated from protobuf field <code>string slp_name = 7;</code>
     * @return string
     */
    public function getSlpName()
    {
        return $this->slp_name;
    }

    /**
     * The name of the SLP associated with the application.
     *
     * Generated from protobuf field <code>string slp_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setSlpName($var)
    {
        GPBUtil::checkString($var, True);
        $this->slp_name = $var;

        return $this;
    }

}

