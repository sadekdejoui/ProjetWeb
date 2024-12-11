<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_ssl_certs.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.sql.v1.SqlSslCertsGetRequest</code>
 */
class SqlSslCertsGetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Cloud SQL instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     */
    protected $instance = '';
    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    protected $project = '';
    /**
     * Sha1 FingerPrint.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 3;</code>
     */
    protected $sha1_fingerprint = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Cloud SQL instance ID. This does not include the project ID.
     *     @type string $project
     *           Project ID of the project that contains the instance.
     *     @type string $sha1_fingerprint
     *           Sha1 FingerPrint.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlSslCerts::initOnce();
        parent::__construct($data);
    }

    /**
     * Cloud SQL instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Cloud SQL instance ID. This does not include the project ID.
     *
     * Generated from protobuf field <code>string instance = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID of the project that contains the instance.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * Sha1 FingerPrint.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 3;</code>
     * @return string
     */
    public function getSha1Fingerprint()
    {
        return $this->sha1_fingerprint;
    }

    /**
     * Sha1 FingerPrint.
     *
     * Generated from protobuf field <code>string sha1_fingerprint = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSha1Fingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->sha1_fingerprint = $var;

        return $this;
    }

}

