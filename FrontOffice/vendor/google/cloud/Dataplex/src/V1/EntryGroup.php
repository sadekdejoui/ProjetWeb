<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An Entry Group represents a logical grouping of one or more Entries.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.EntryGroup</code>
 */
class EntryGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the EntryGroup, in the format
     * projects/{project_id_or_number}/locations/{location_id}/entryGroups/{entry_group_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Output only. System generated globally unique ID for the EntryGroup. If you
     * delete and recreate the EntryGroup with the same name, this ID will be
     * different.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. The time when the EntryGroup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the EntryGroup was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Optional. Description of the EntryGroup.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Optional. User-defined labels for the EntryGroup.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * This checksum is computed by the service, and might be sent on update and
     * delete requests to ensure the client has an up-to-date value before
     * proceeding.
     *
     * Generated from protobuf field <code>string etag = 8;</code>
     */
    protected $etag = '';
    /**
     * Output only. Denotes the transfer status of the Entry Group. It is
     * unspecified for Entry Group created from Dataplex API.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.TransferStatus transfer_status = 202 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $transfer_status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the EntryGroup, in the format
     *           projects/{project_id_or_number}/locations/{location_id}/entryGroups/{entry_group_id}.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the EntryGroup. If you
     *           delete and recreate the EntryGroup with the same name, this ID will be
     *           different.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the EntryGroup was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the EntryGroup was last updated.
     *     @type string $description
     *           Optional. Description of the EntryGroup.
     *     @type string $display_name
     *           Optional. User friendly display name.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels for the EntryGroup.
     *     @type string $etag
     *           This checksum is computed by the service, and might be sent on update and
     *           delete requests to ensure the client has an up-to-date value before
     *           proceeding.
     *     @type int $transfer_status
     *           Output only. Denotes the transfer status of the Entry Group. It is
     *           unspecified for Entry Group created from Dataplex API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the EntryGroup, in the format
     * projects/{project_id_or_number}/locations/{location_id}/entryGroups/{entry_group_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the EntryGroup, in the format
     * projects/{project_id_or_number}/locations/{location_id}/entryGroups/{entry_group_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. System generated globally unique ID for the EntryGroup. If you
     * delete and recreate the EntryGroup with the same name, this ID will be
     * different.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the EntryGroup. If you
     * delete and recreate the EntryGroup with the same name, this ID will be
     * different.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The time when the EntryGroup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the EntryGroup was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the EntryGroup was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the EntryGroup was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Optional. Description of the EntryGroup.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the EntryGroup.
     *
     * Generated from protobuf field <code>string description = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User friendly display name.
     *
     * Generated from protobuf field <code>string display_name = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. User-defined labels for the EntryGroup.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels for the EntryGroup.
     *
     * Generated from protobuf field <code>map<string, string> labels = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * This checksum is computed by the service, and might be sent on update and
     * delete requests to ensure the client has an up-to-date value before
     * proceeding.
     *
     * Generated from protobuf field <code>string etag = 8;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * This checksum is computed by the service, and might be sent on update and
     * delete requests to ensure the client has an up-to-date value before
     * proceeding.
     *
     * Generated from protobuf field <code>string etag = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Output only. Denotes the transfer status of the Entry Group. It is
     * unspecified for Entry Group created from Dataplex API.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.TransferStatus transfer_status = 202 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTransferStatus()
    {
        return $this->transfer_status;
    }

    /**
     * Output only. Denotes the transfer status of the Entry Group. It is
     * unspecified for Entry Group created from Dataplex API.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.TransferStatus transfer_status = 202 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTransferStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\TransferStatus::class);
        $this->transfer_status = $var;

        return $this;
    }

}

