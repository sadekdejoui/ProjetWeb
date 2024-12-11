<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/grpc_route.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the GetGrpcRoute method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.GetGrpcRouteRequest</code>
 */
class GetGrpcRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A name of the GrpcRoute to get. Must be in the format
     * `projects/&#42;&#47;locations/global/grpcRoutes/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. A name of the GrpcRoute to get. Must be in the format
     *                     `projects/&#42;/locations/global/grpcRoutes/*`. Please see
     *                     {@see NetworkServicesClient::grpcRouteName()} for help formatting this field.
     *
     * @return \Google\Cloud\NetworkServices\V1\GetGrpcRouteRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. A name of the GrpcRoute to get. Must be in the format
     *           `projects/&#42;&#47;locations/global/grpcRoutes/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\GrpcRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A name of the GrpcRoute to get. Must be in the format
     * `projects/&#42;&#47;locations/global/grpcRoutes/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. A name of the GrpcRoute to get. Must be in the format
     * `projects/&#42;&#47;locations/global/grpcRoutes/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

