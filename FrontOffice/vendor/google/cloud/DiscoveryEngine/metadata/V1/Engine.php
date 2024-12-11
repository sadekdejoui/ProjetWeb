<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/engine.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class Engine
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,google/cloud/discoveryengine/v1/engine.protogoogle.cloud.discoveryengine.v1google/api/resource.proto,google/cloud/discoveryengine/v1/common.protogoogle/protobuf/timestamp.proto"�
EngineV
chat_engine_config (28.google.cloud.discoveryengine.v1.Engine.ChatEngineConfigH Z
search_engine_config (2:.google.cloud.discoveryengine.v1.Engine.SearchEngineConfigH _
chat_engine_metadata (2:.google.cloud.discoveryengine.v1.Engine.ChatEngineMetadataB�AH
name (	B�A
display_name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
data_store_ids (	I
solution_type (2-.google.cloud.discoveryengine.v1.SolutionTypeB�AL
industry_vertical (21.google.cloud.discoveryengine.v1.IndustryVerticalK
common_config (24.google.cloud.discoveryengine.v1.Engine.CommonConfig
disable_analytics (B�A�
SearchEngineConfig@
search_tier (2+.google.cloud.discoveryengine.v1.SearchTierD
search_add_ons (2,.google.cloud.discoveryengine.v1.SearchAddOn�
ChatEngineConfigk
agent_creation_config (2L.google.cloud.discoveryengine.v1.Engine.ChatEngineConfig.AgentCreationConfig 
dialogflow_agent_to_link (	p
AgentCreationConfig
business (	
default_language_code (	
	time_zone (	B�A
location (	$
CommonConfig
company_name (	.
ChatEngineMetadata
dialogflow_agent (	:}�Az
%discoveryengine.googleapis.com/EngineQprojects/{project}/locations/{location}/collections/{collection}/engines/{engine}B
engine_configB
engine_metadataB�
#com.google.cloud.discoveryengine.v1BEngineProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

