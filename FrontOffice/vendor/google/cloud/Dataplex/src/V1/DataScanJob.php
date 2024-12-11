<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A DataScanJob represents an instance of DataScan execution.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataScanJob</code>
 */
class DataScanJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the DataScanJob, of the form:
     * `projects/{project}/locations/{location_id}/dataScans/{datascan_id}/jobs/{job_id}`,
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. System generated globally unique ID for the DataScanJob.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Output only. The time when the DataScanJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the DataScanJob was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $start_time = null;
    /**
     * Output only. The time when the DataScanJob ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $end_time = null;
    /**
     * Output only. Execution state for the DataScanJob.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanJob.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $message = '';
    /**
     * Output only. The type of the parent DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanType type = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    protected $spec;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the DataScanJob, of the form:
     *           `projects/{project}/locations/{location_id}/dataScans/{datascan_id}/jobs/{job_id}`,
     *           where `project` refers to a *project_id* or *project_number* and
     *           `location_id` refers to a GCP region.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the DataScanJob.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the DataScanJob was created.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. The time when the DataScanJob was started.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Output only. The time when the DataScanJob ended.
     *     @type int $state
     *           Output only. Execution state for the DataScanJob.
     *     @type string $message
     *           Output only. Additional information about the current state.
     *     @type int $type
     *           Output only. The type of the parent DataScan.
     *     @type \Google\Cloud\Dataplex\V1\DataQualitySpec $data_quality_spec
     *           Output only. Settings for a data quality scan.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileSpec $data_profile_spec
     *           Output only. Settings for a data profile scan.
     *     @type \Google\Cloud\Dataplex\V1\DataDiscoverySpec $data_discovery_spec
     *           Output only. Settings for a data discovery scan.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityResult $data_quality_result
     *           Output only. The result of a data quality scan.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileResult $data_profile_result
     *           Output only. The result of a data profile scan.
     *     @type \Google\Cloud\Dataplex\V1\DataDiscoveryResult $data_discovery_result
     *           Output only. The result of a data discovery scan.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the DataScanJob, of the form:
     * `projects/{project}/locations/{location_id}/dataScans/{datascan_id}/jobs/{job_id}`,
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the DataScanJob, of the form:
     * `projects/{project}/locations/{location_id}/dataScans/{datascan_id}/jobs/{job_id}`,
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. System generated globally unique ID for the DataScanJob.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the DataScanJob.
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
     * Output only. The time when the DataScanJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the DataScanJob was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time when the DataScanJob was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Output only. The time when the DataScanJob was started.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the DataScanJob ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Output only. The time when the DataScanJob ended.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. Execution state for the DataScanJob.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanJob.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Execution state for the DataScanJob.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanJob.State state = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\DataScanJob\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Output only. Additional information about the current state.
     *
     * Generated from protobuf field <code>string message = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Output only. The type of the parent DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanType type = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of the parent DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanType type = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\DataScanType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. Settings for a data quality scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec data_quality_spec = 100 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualitySpec|null
     */
    public function getDataQualitySpec()
    {
        return $this->readOneof(100);
    }

    public function hasDataQualitySpec()
    {
        return $this->hasOneof(100);
    }

    /**
     * Output only. Settings for a data quality scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec data_quality_spec = 100 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualitySpec $var
     * @return $this
     */
    public function setDataQualitySpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualitySpec::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Output only. Settings for a data profile scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileSpec data_profile_spec = 101 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileSpec|null
     */
    public function getDataProfileSpec()
    {
        return $this->readOneof(101);
    }

    public function hasDataProfileSpec()
    {
        return $this->hasOneof(101);
    }

    /**
     * Output only. Settings for a data profile scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileSpec data_profile_spec = 101 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileSpec $var
     * @return $this
     */
    public function setDataProfileSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileSpec::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * Output only. Settings for a data discovery scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec data_discovery_spec = 102 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataDiscoverySpec|null
     */
    public function getDataDiscoverySpec()
    {
        return $this->readOneof(102);
    }

    public function hasDataDiscoverySpec()
    {
        return $this->hasOneof(102);
    }

    /**
     * Output only. Settings for a data discovery scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec data_discovery_spec = 102 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataDiscoverySpec $var
     * @return $this
     */
    public function setDataDiscoverySpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataDiscoverySpec::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * Output only. The result of a data quality scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityResult data_quality_result = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityResult|null
     */
    public function getDataQualityResult()
    {
        return $this->readOneof(200);
    }

    public function hasDataQualityResult()
    {
        return $this->hasOneof(200);
    }

    /**
     * Output only. The result of a data quality scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityResult data_quality_result = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityResult $var
     * @return $this
     */
    public function setDataQualityResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityResult::class);
        $this->writeOneof(200, $var);

        return $this;
    }

    /**
     * Output only. The result of a data profile scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult data_profile_result = 201 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileResult|null
     */
    public function getDataProfileResult()
    {
        return $this->readOneof(201);
    }

    public function hasDataProfileResult()
    {
        return $this->hasOneof(201);
    }

    /**
     * Output only. The result of a data profile scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult data_profile_result = 201 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileResult $var
     * @return $this
     */
    public function setDataProfileResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileResult::class);
        $this->writeOneof(201, $var);

        return $this;
    }

    /**
     * Output only. The result of a data discovery scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoveryResult data_discovery_result = 202 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataDiscoveryResult|null
     */
    public function getDataDiscoveryResult()
    {
        return $this->readOneof(202);
    }

    public function hasDataDiscoveryResult()
    {
        return $this->hasOneof(202);
    }

    /**
     * Output only. The result of a data discovery scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoveryResult data_discovery_result = 202 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataDiscoveryResult $var
     * @return $this
     */
    public function setDataDiscoveryResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataDiscoveryResult::class);
        $this->writeOneof(202, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSpec()
    {
        return $this->whichOneof("spec");
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}

