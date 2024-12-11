<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/webhook.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class Webhook
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Context::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Session::initOnce();
        \GPBMetadata\Google\Cloud\Dialogflow\V2\SessionEntityType::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/dialogflow/v2/webhook.protogoogle.cloud.dialogflow.v2\'google/cloud/dialogflow/v2/intent.proto(google/cloud/dialogflow/v2/session.proto4google/cloud/dialogflow/v2/session_entity_type.protogoogle/protobuf/struct.proto"�
WebhookRequest
session (	
response_id (	=
query_result (2\'.google.cloud.dialogflow.v2.QueryResult_
original_detect_intent_request (27.google.cloud.dialogflow.v2.OriginalDetectIntentRequest"�
WebhookResponse
fulfillment_text (	H
fulfillment_messages (2*.google.cloud.dialogflow.v2.Intent.Message
source (	(
payload (2.google.protobuf.Struct<
output_contexts (2#.google.cloud.dialogflow.v2.ContextD
followup_event_input (2&.google.cloud.dialogflow.v2.EventInputK
session_entity_types
 (2-.google.cloud.dialogflow.v2.SessionEntityType"h
OriginalDetectIntentRequest
source (	
version (	(
payload (2.google.protobuf.StructB�
com.google.cloud.dialogflow.v2BWebhookProtoPZ>cloud.google.com/go/dialogflow/apiv2/dialogflowpb;dialogflowpb�DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

