<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/conversational_search_service.proto

namespace GPBMetadata\Google\Cloud\Discoveryengine\V1;

class ConversationalSearchService
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
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Answer::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Conversation::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\SearchService::initOnce();
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Session::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�d
Cgoogle/cloud/discoveryengine/v1/conversational_search_service.protogoogle.cloud.discoveryengine.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/discoveryengine/v1/answer.proto2google/cloud/discoveryengine/v1/conversation.proto4google/cloud/discoveryengine/v1/search_service.proto-google/cloud/discoveryengine/v1/session.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
ConverseConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation>
query (2*.google.cloud.discoveryengine.v1.TextInputB�AI
serving_config (	B1�A.
,discoveryengine.googleapis.com/ServingConfigC
conversation (2-.google.cloud.discoveryengine.v1.Conversation
safe_search (a
user_labels (2L.google.cloud.discoveryengine.v1.ConverseConversationRequest.UserLabelsEntryb
summary_spec (2L.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SummarySpec
filter	 (	L

boost_spec
 (28.google.cloud.discoveryengine.v1.SearchRequest.BoostSpec1
UserLabelsEntry
key (	
value (	:8"�
ConverseConversationResponse5
reply (2&.google.cloud.discoveryengine.v1.ReplyC
conversation (2-.google.cloud.discoveryengine.v1.ConversationT
search_results (2<.google.cloud.discoveryengine.v1.SearchResponse.SearchResult"�
CreateConversationRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStoreH
conversation (2-.google.cloud.discoveryengine.v1.ConversationB�A"�
UpdateConversationRequestH
conversation (2-.google.cloud.discoveryengine.v1.ConversationB�A/
update_mask (2.google.protobuf.FieldMask"^
DeleteConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation"[
GetConversationRequestA
name (	B3�A�A-
+discoveryengine.googleapis.com/Conversation"�
ListConversationsRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore
	page_size (

page_token (	
filter (	
order_by (	"z
ListConversationsResponseD
conversations (2-.google.cloud.discoveryengine.v1.Conversation
next_page_token (	"�!
AnswerQueryRequestL
serving_config (	B4�A�A.
,discoveryengine.googleapis.com/ServingConfig:
query (2&.google.cloud.discoveryengine.v1.QueryB�A<
session (	B+�A(
&discoveryengine.googleapis.com/SessionS
safety_spec (2>.google.cloud.discoveryengine.v1.AnswerQueryRequest.SafetySpech
related_questions_spec (2H.google.cloud.discoveryengine.v1.AnswerQueryRequest.RelatedQuestionsSpech
answer_generation_spec (2H.google.cloud.discoveryengine.v1.AnswerQueryRequest.AnswerGenerationSpecS
search_spec (2>.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpecl
query_understanding_spec	 (2J.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec
asynchronous_mode
 (B
user_pseudo_id (	X
user_labels (2C.google.cloud.discoveryengine.v1.AnswerQueryRequest.UserLabelsEntry

SafetySpec
enable (&
RelatedQuestionsSpec
enable (�
AnswerGenerationSpecf

model_spec (2R.google.cloud.discoveryengine.v1.AnswerQueryRequest.AnswerGenerationSpec.ModelSpech
prompt_spec (2S.google.cloud.discoveryengine.v1.AnswerQueryRequest.AnswerGenerationSpec.PromptSpec
include_citations (
answer_language_code (	 
ignore_adversarial_query (\'
ignore_non_answer_seeking_query ((
ignore_low_relevant_content (H �\'
ignore_jail_breaking_query (B�A"
	ModelSpec
model_version (	

PromptSpec
preamble (	B
_ignore_low_relevant_content�

SearchSpecd
search_params (2K.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchParamsH m
search_result_list (2O.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultListH �
SearchParams
max_return_results (
filter (	L

boost_spec (28.google.cloud.discoveryengine.v1.SearchRequest.BoostSpec
order_by (	m
search_result_mode (2Q.google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.SearchResultModeV
data_store_specs (2<.google.cloud.discoveryengine.v1.SearchRequest.DataStoreSpec�
SearchResultListt
search_results (2\\.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult�

SearchResult�
unstructured_document_info (2u.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfoH |

chunk_info (2f.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.ChunkInfoH �
UnstructuredDocumentInfo>
document (	B,�A)
\'discoveryengine.googleapis.com/Document
uri (	
title (	�
document_contexts (2�.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.DocumentContext�
extractive_segments (2�.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveSegment�
extractive_answers (2�.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.UnstructuredDocumentInfo.ExtractiveAnswerB;
DocumentContext
page_identifier (	
content (	=
ExtractiveSegment
page_identifier (	
content (	<
ExtractiveAnswer
page_identifier (	
content (	�
	ChunkInfo8
chunk (	B)�A&
$discoveryengine.googleapis.com/Chunk
content (	�
document_metadata (2w.google.cloud.discoveryengine.v1.AnswerQueryRequest.SearchSpec.SearchResultList.SearchResult.ChunkInfo.DocumentMetadata.
DocumentMetadata
uri (	
title (	B	
contentB
input�
QueryUnderstandingSpec�
query_classification_spec (2b.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryClassificationSpec{
query_rephraser_spec (2].google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryRephraserSpec�
QueryClassificationSpecv
types (2g.google.cloud.discoveryengine.v1.AnswerQueryRequest.QueryUnderstandingSpec.QueryClassificationSpec.Type"�
Type
TYPE_UNSPECIFIED 
ADVERSARIAL_QUERY
NON_ANSWER_SEEKING_QUERY
JAIL_BREAKING_QUERY
NON_ANSWER_SEEKING_QUERY_V2A
QueryRephraserSpec
disable (
max_rephrase_steps (1
UserLabelsEntry
key (	
value (	:8"�
AnswerQueryResponse7
answer (2\'.google.cloud.discoveryengine.v1.Answer9
session (2(.google.cloud.discoveryengine.v1.Session
answer_query_token (	"O
GetAnswerRequest;
name (	B-�A�A\'
%discoveryengine.googleapis.com/Answer"�
CreateSessionRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore>
session (2(.google.cloud.discoveryengine.v1.SessionB�A"�
UpdateSessionRequest>
session (2(.google.cloud.discoveryengine.v1.SessionB�A/
update_mask (2.google.protobuf.FieldMask"T
DeleteSessionRequest<
name (	B.�A�A(
&discoveryengine.googleapis.com/Session"Q
GetSessionRequest<
name (	B.�A�A(
&discoveryengine.googleapis.com/Session"�
ListSessionsRequest@
parent (	B0�A�A*
(discoveryengine.googleapis.com/DataStore
	page_size (

page_token (	
filter (	
order_by (	"k
ListSessionsResponse:
sessions (2(.google.cloud.discoveryengine.v1.Session
next_page_token (	2�\'
ConversationalSearchService�
ConverseConversation<.google.cloud.discoveryengine.v1.ConverseConversationRequest=.google.cloud.discoveryengine.v1.ConverseConversationResponse"��A
name,query����"G/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}:converse:*ZZ"U/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:converse:*ZW"R/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}:converse:*�
CreateConversation:.google.cloud.discoveryengine.v1.CreateConversationRequest-.google.cloud.discoveryengine.v1.Conversation"��Aparent,conversation����">/v1/{parent=projects/*/locations/*/dataStores/*}/conversations:conversationZ\\"L/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversations:conversationZY"I/v1/{parent=projects/*/locations/*/collections/*/engines/*}/conversations:conversation�
DeleteConversation:.google.cloud.discoveryengine.v1.DeleteConversationRequest.google.protobuf.Empty"��Aname����*>/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}ZN*L/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}ZK*I/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}�
UpdateConversation:.google.cloud.discoveryengine.v1.UpdateConversationRequest-.google.cloud.discoveryengine.v1.Conversation"��Aconversation,update_mask����2K/v1/{conversation.name=projects/*/locations/*/dataStores/*/conversations/*}:conversationZi2Y/v1/{conversation.name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}:conversationZf2V/v1/{conversation.name=projects/*/locations/*/collections/*/engines/*/conversations/*}:conversation�
GetConversation7.google.cloud.discoveryengine.v1.GetConversationRequest-.google.cloud.discoveryengine.v1.Conversation"��Aname����>/v1/{name=projects/*/locations/*/dataStores/*/conversations/*}ZNL/v1/{name=projects/*/locations/*/collections/*/dataStores/*/conversations/*}ZKI/v1/{name=projects/*/locations/*/collections/*/engines/*/conversations/*}�
ListConversations9.google.cloud.discoveryengine.v1.ListConversationsRequest:.google.cloud.discoveryengine.v1.ListConversationsResponse"��Aparent����>/v1/{parent=projects/*/locations/*/dataStores/*}/conversationsZNL/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/conversationsZKI/v1/{parent=projects/*/locations/*/collections/*/engines/*}/conversations�
AnswerQuery3.google.cloud.discoveryengine.v1.AnswerQueryRequest4.google.cloud.discoveryengine.v1.AnswerQueryResponse"�����"P/v1/{serving_config=projects/*/locations/*/dataStores/*/servingConfigs/*}:answer:*Zc"^/v1/{serving_config=projects/*/locations/*/collections/*/dataStores/*/servingConfigs/*}:answer:*Z`"[/v1/{serving_config=projects/*/locations/*/collections/*/engines/*/servingConfigs/*}:answer:*�
	GetAnswer1.google.cloud.discoveryengine.v1.GetAnswerRequest\'.google.cloud.discoveryengine.v1.Answer"��Aname����C/v1/{name=projects/*/locations/*/dataStores/*/sessions/*/answers/*}ZSQ/v1/{name=projects/*/locations/*/collections/*/dataStores/*/sessions/*/answers/*}ZPN/v1/{name=projects/*/locations/*/collections/*/engines/*/sessions/*/answers/*}�
CreateSession5.google.cloud.discoveryengine.v1.CreateSessionRequest(.google.cloud.discoveryengine.v1.Session"��Aparent,session����"9/v1/{parent=projects/*/locations/*/dataStores/*}/sessions:sessionZR"G/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/sessions:sessionZO"D/v1/{parent=projects/*/locations/*/collections/*/engines/*}/sessions:session�
DeleteSession5.google.cloud.discoveryengine.v1.DeleteSessionRequest.google.protobuf.Empty"��Aname����*9/v1/{name=projects/*/locations/*/dataStores/*/sessions/*}ZI*G/v1/{name=projects/*/locations/*/collections/*/dataStores/*/sessions/*}ZF*D/v1/{name=projects/*/locations/*/collections/*/engines/*/sessions/*}�
UpdateSession5.google.cloud.discoveryengine.v1.UpdateSessionRequest(.google.cloud.discoveryengine.v1.Session"��Asession,update_mask����2A/v1/{session.name=projects/*/locations/*/dataStores/*/sessions/*}:sessionZZ2O/v1/{session.name=projects/*/locations/*/collections/*/dataStores/*/sessions/*}:sessionZW2L/v1/{session.name=projects/*/locations/*/collections/*/engines/*/sessions/*}:session�

GetSession2.google.cloud.discoveryengine.v1.GetSessionRequest(.google.cloud.discoveryengine.v1.Session"��Aname����9/v1/{name=projects/*/locations/*/dataStores/*/sessions/*}ZIG/v1/{name=projects/*/locations/*/collections/*/dataStores/*/sessions/*}ZFD/v1/{name=projects/*/locations/*/collections/*/engines/*/sessions/*}�
ListSessions4.google.cloud.discoveryengine.v1.ListSessionsRequest5.google.cloud.discoveryengine.v1.ListSessionsResponse"��Aparent����9/v1/{parent=projects/*/locations/*/dataStores/*}/sessionsZIG/v1/{parent=projects/*/locations/*/collections/*/dataStores/*}/sessionsZFD/v1/{parent=projects/*/locations/*/collections/*/engines/*}/sessionsR�Adiscoveryengine.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.discoveryengine.v1B ConversationalSearchServiceProtoPZMcloud.google.com/go/discoveryengine/apiv1/discoveryenginepb;discoveryenginepb�DISCOVERYENGINE�Google.Cloud.DiscoveryEngine.V1�Google\\Cloud\\DiscoveryEngine\\V1�"Google::Cloud::DiscoveryEngine::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

