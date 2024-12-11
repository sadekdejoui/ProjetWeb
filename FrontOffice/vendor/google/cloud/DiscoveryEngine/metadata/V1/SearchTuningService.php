<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/search_tuning_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class SearchTuningService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\CustomTuningModel::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\ImportConfig::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
;google/cloud/discoveryengine/v1/search_tuning_service.protogoogle.cloud.discoveryengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto9google/cloud/discoveryengine/v1/custom_tuning_model.proto3google/cloud/discoveryengine/v1/import_config.proto#google/longrunning/operations.protogoogle/protobuf/timestamp.protogoogle/rpc/status.proto"_
ListCustomModelsRequestD

data_store (	B0�A�A*
(discoveryengine.googleapis.com/DataStore"^
ListCustomModelsResponseB
models (22.google.cloud.discoveryengine.v1.CustomTuningModel"�
TrainCustomModelRequestg
gcs_training_input (2I.google.cloud.discoveryengine.v1.TrainCustomModelRequest.GcsTrainingInputH D

data_store (	B0�A�A*
(discoveryengine.googleapis.com/DataStore

model_type (	H
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfig
model_id (	v
GcsTrainingInput
corpus_data_path (	
query_data_path (	
train_data_path (	
test_data_path (	B
training_input"�
TrainCustomModelResponse)
error_samples (2.google.rpc.StatusH
error_config (22.google.cloud.discoveryengine.v1.ImportErrorConfig
model_status (	W
metrics (2F.google.cloud.discoveryengine.v1.TrainCustomModelResponse.MetricsEntry

model_name (	.
MetricsEntry
key (	
value (:8"|
TrainCustomModelMetadata/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp2�
SearchTuningService�
TrainCustomModel8.google.cloud.discoveryengine.v1.TrainCustomModelRequest.google.longrunning.Operation"��At
8google.cloud.discoveryengine.v1.TrainCustomModelResponse8google.cloud.discoveryengine.v1.TrainCustomModelMetadata���X"S/v1/{data_store=projects/*/locations/*/collections/*/dataStores/*}:trainCustomModel:*�
ListCustomModels8.google.cloud.discoveryengine.v1.ListCustomModelsRequest9.google.cloud.discoveryengine.v1.ListCustomModelsResponse"W���QO/v1/{data_store=projects/*/locations/*/collections/*/dataStores/*}/customModelsR�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.discoveryengine.v1BSearchTuningServiceProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

