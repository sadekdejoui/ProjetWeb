<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycentermanagement/v1/security_center_management.proto

namespace Google\Cloud\SecurityCenterManagement\V1\SimulateSecurityHealthAnalyticsCustomModuleResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Possible test result.
 *
 * Generated from protobuf message <code>google.cloud.securitycentermanagement.v1.SimulateSecurityHealthAnalyticsCustomModuleResponse.SimulatedResult</code>
 */
class SimulatedResult extends \Google\Protobuf\Internal\Message
{
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenterManagement\V1\SimulatedFinding $finding
     *           Finding that would be published for the test case if a violation is
     *           detected.
     *     @type \Google\Protobuf\GPBEmpty $no_violation
     *           Indicates that the test case does not trigger any violation.
     *     @type \Google\Rpc\Status $error
     *           Error encountered during the test.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycentermanagement\V1\SecurityCenterManagement::initOnce();
        parent::__construct($data);
    }

    /**
     * Finding that would be published for the test case if a violation is
     * detected.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.SimulatedFinding finding = 1;</code>
     * @return \Google\Cloud\SecurityCenterManagement\V1\SimulatedFinding|null
     */
    public function getFinding()
    {
        return $this->readOneof(1);
    }

    public function hasFinding()
    {
        return $this->hasOneof(1);
    }

    /**
     * Finding that would be published for the test case if a violation is
     * detected.
     *
     * Generated from protobuf field <code>.google.cloud.securitycentermanagement.v1.SimulatedFinding finding = 1;</code>
     * @param \Google\Cloud\SecurityCenterManagement\V1\SimulatedFinding $var
     * @return $this
     */
    public function setFinding($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenterManagement\V1\SimulatedFinding::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Indicates that the test case does not trigger any violation.
     *
     * Generated from protobuf field <code>.google.protobuf.Empty no_violation = 2;</code>
     * @return \Google\Protobuf\GPBEmpty|null
     */
    public function getNoViolation()
    {
        return $this->readOneof(2);
    }

    public function hasNoViolation()
    {
        return $this->hasOneof(2);
    }

    /**
     * Indicates that the test case does not trigger any violation.
     *
     * Generated from protobuf field <code>.google.protobuf.Empty no_violation = 2;</code>
     * @param \Google\Protobuf\GPBEmpty $var
     * @return $this
     */
    public function setNoViolation($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\GPBEmpty::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Error encountered during the test.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->readOneof(3);
    }

    public function hasError()
    {
        return $this->hasOneof(3);
    }

    /**
     * Error encountered during the test.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}


