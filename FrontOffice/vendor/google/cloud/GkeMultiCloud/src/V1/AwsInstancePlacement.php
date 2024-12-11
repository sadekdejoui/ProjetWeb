<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkemulticloud/v1/aws_resources.proto

namespace Google\Cloud\GkeMultiCloud\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details of placement information for an instance.
 * Limitations for using the `host` tenancy:
 *  * T3 instances that use the unlimited CPU credit option don't support host
 *  tenancy.
 *
 * Generated from protobuf message <code>google.cloud.gkemulticloud.v1.AwsInstancePlacement</code>
 */
class AwsInstancePlacement extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The tenancy for instance.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsInstancePlacement.Tenancy tenancy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $tenancy = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $tenancy
     *           Required. The tenancy for instance.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkemulticloud\V1\AwsResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The tenancy for instance.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsInstancePlacement.Tenancy tenancy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getTenancy()
    {
        return $this->tenancy;
    }

    /**
     * Required. The tenancy for instance.
     *
     * Generated from protobuf field <code>.google.cloud.gkemulticloud.v1.AwsInstancePlacement.Tenancy tenancy = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setTenancy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\GkeMultiCloud\V1\AwsInstancePlacement\Tenancy::class);
        $this->tenancy = $var;

        return $this;
    }

}

