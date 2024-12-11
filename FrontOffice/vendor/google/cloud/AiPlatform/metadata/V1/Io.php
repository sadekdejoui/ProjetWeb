<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/io.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class Io
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ApiAuth::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/cloud/aiplatform/v1/io.protogoogle.cloud.aiplatform.v1)google/cloud/aiplatform/v1/api_auth.protogoogle/protobuf/timestamp.proto"L

AvroSource>

gcs_source (2%.google.cloud.aiplatform.v1.GcsSourceB�A"K
	CsvSource>

gcs_source (2%.google.cloud.aiplatform.v1.GcsSourceB�A"
	GcsSource
uris (	B�A"0
GcsDestination
output_uri_prefix (	B�A"(
BigQuerySource
	input_uri (	B�A".
BigQueryDestination

output_uri (	B�A"Z
CsvDestinationH
gcs_destination (2*.google.cloud.aiplatform.v1.GcsDestinationB�A"_
TFRecordDestinationH
gcs_destination (2*.google.cloud.aiplatform.v1.GcsDestinationB�A"7
ContainerRegistryDestination

output_uri (	B�A"�
GoogleDriveSourceS
resource_ids (28.google.cloud.aiplatform.v1.GoogleDriveSource.ResourceIdB�A�

ResourceIda
resource_type (2E.google.cloud.aiplatform.v1.GoogleDriveSource.ResourceId.ResourceTypeB�A
resource_id (	B�A"_
ResourceType
RESOURCE_TYPE_UNSPECIFIED 
RESOURCE_TYPE_FILE
RESOURCE_TYPE_FOLDER"
DirectUploadSource"�
SlackSourceL
channels (25.google.cloud.aiplatform.v1.SlackSource.SlackChannelsB�A�
SlackChannelsY
channels (2B.google.cloud.aiplatform.v1.SlackSource.SlackChannels.SlackChannelB�AM
api_key_config (20.google.cloud.aiplatform.v1.ApiAuth.ApiKeyConfigB�A�
SlackChannel

channel_id (	B�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A"�

JiraSourceM
jira_queries (22.google.cloud.aiplatform.v1.JiraSource.JiraQueriesB�A�
JiraQueries
projects (	
custom_queries (	
email (	B�A

server_uri (	B�AM
api_key_config (20.google.cloud.aiplatform.v1.ApiAuth.ApiKeyConfigB�A"�
SharePointSources[
share_point_sources (2>.google.cloud.aiplatform.v1.SharePointSources.SharePointSource�
SharePointSource 
sharepoint_folder_path (	H 
sharepoint_folder_id (	H 

drive_name (	H
drive_id (	H
	client_id (	G
client_secret (20.google.cloud.aiplatform.v1.ApiAuth.ApiKeyConfig
	tenant_id (	
sharepoint_site_name (	
file_id	 (	B�AB
folder_sourceB
drive_sourceB�
com.google.cloud.aiplatform.v1BIoProtoPZ>cloud.google.com/go/aiplatform/apiv1/aiplatformpb;aiplatformpb�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

