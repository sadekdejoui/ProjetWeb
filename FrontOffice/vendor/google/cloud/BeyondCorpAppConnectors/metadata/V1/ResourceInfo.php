<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/appconnectors/v1/resource_info.proto

namespace GPBMetadata\Google\Cloud\Beyondcorp\Appconnectors\V1;

class ResourceInfo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/cloud/beyondcorp/appconnectors/v1/resource_info.proto(google.cloud.beyondcorp.appconnectors.v1google/protobuf/any.protogoogle/protobuf/timestamp.proto"�
ResourceInfo
id (	B�AF
status (26.google.cloud.beyondcorp.appconnectors.v1.HealthStatus&
resource (2.google.protobuf.Any(
time (2.google.protobuf.TimestampC
sub (26.google.cloud.beyondcorp.appconnectors.v1.ResourceInfo*i
HealthStatus
HEALTH_STATUS_UNSPECIFIED 
HEALTHY
	UNHEALTHY
UNRESPONSIVE
DEGRADEDB�
,com.google.cloud.beyondcorp.appconnectors.v1BResourceInfoProtoPZRcloud.google.com/go/beyondcorp/appconnectors/apiv1/appconnectorspb;appconnectorspb�(Google.Cloud.BeyondCorp.AppConnectors.V1�(Google\\Cloud\\BeyondCorp\\AppConnectors\\V1�,Google::Cloud::BeyondCorp::AppConnectors::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

