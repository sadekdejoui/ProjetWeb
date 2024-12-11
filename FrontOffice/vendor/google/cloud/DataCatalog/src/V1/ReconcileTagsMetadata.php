<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * [Long-running operation][google.longrunning.Operation]
 * metadata message returned by the
 * [ReconcileTags][google.cloud.datacatalog.v1.DataCatalog.ReconcileTags].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.ReconcileTagsMetadata</code>
 */
class ReconcileTagsMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * State of the reconciliation operation.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ReconcileTagsMetadata.ReconciliationState state = 1;</code>
     */
    protected $state = 0;
    /**
     * Maps the name of each tagged column (or empty string for a
     * sole entry) to tagging operation [status][google.rpc.Status].
     *
     * Generated from protobuf field <code>map<string, .google.rpc.Status> errors = 2;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           State of the reconciliation operation.
     *     @type array|\Google\Protobuf\Internal\MapField $errors
     *           Maps the name of each tagged column (or empty string for a
     *           sole entry) to tagging operation [status][google.rpc.Status].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * State of the reconciliation operation.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ReconcileTagsMetadata.ReconciliationState state = 1;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * State of the reconciliation operation.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.ReconcileTagsMetadata.ReconciliationState state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataCatalog\V1\ReconcileTagsMetadata\ReconciliationState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Maps the name of each tagged column (or empty string for a
     * sole entry) to tagging operation [status][google.rpc.Status].
     *
     * Generated from protobuf field <code>map<string, .google.rpc.Status> errors = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Maps the name of each tagged column (or empty string for a
     * sole entry) to tagging operation [status][google.rpc.Status].
     *
     * Generated from protobuf field <code>map<string, .google.rpc.Status> errors = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->errors = $arr;

        return $this;
    }

}

