<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/security_settings.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\Cx\V3;

class SecuritySettings
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
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�#
5google/cloud/dialogflow/cx/v3/security_settings.protogoogle.cloud.dialogflow.cx.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"^
GetSecuritySettingsRequest@
name (	B2�A�A,
*dialogflow.googleapis.com/SecuritySettings"�
UpdateSecuritySettingsRequestO
security_settings (2/.google.cloud.dialogflow.cx.v3.SecuritySettingsB�A4
update_mask (2.google.protobuf.FieldMaskB�A"�
ListSecuritySettingsRequestB
parent (	B2�A�A,*dialogflow.googleapis.com/SecuritySettings
	page_size (

page_token (	"�
ListSecuritySettingsResponseJ
security_settings (2/.google.cloud.dialogflow.cx.v3.SecuritySettings
next_page_token (	"�
CreateSecuritySettingsRequestB
parent (	B2�A�A,*dialogflow.googleapis.com/SecuritySettingsO
security_settings (2/.google.cloud.dialogflow.cx.v3.SecuritySettingsB�A"a
DeleteSecuritySettingsRequest@
name (	B2�A�A,
*dialogflow.googleapis.com/SecuritySettings"�
SecuritySettings
name (	
display_name (	B�A]
redaction_strategy (2A.google.cloud.dialogflow.cx.v3.SecuritySettings.RedactionStrategyW
redaction_scope (2>.google.cloud.dialogflow.cx.v3.SecuritySettings.RedactionScopeA
inspect_template	 (	B\'�A$
"dlp.googleapis.com/InspectTemplateG
deidentify_template (	B*�A\'
%dlp.googleapis.com/DeidentifyTemplate
retention_window_days (H _
retention_strategy (2A.google.cloud.dialogflow.cx.v3.SecuritySettings.RetentionStrategyH W
purge_data_types (2=.google.cloud.dialogflow.cx.v3.SecuritySettings.PurgeDataTypeb
audio_export_settings (2C.google.cloud.dialogflow.cx.v3.SecuritySettings.AudioExportSettingsh
insights_export_settings (2F.google.cloud.dialogflow.cx.v3.SecuritySettings.InsightsExportSettings�
AudioExportSettings

gcs_bucket (	
audio_export_pattern (	
enable_audio_redaction (e
audio_format (2O.google.cloud.dialogflow.cx.v3.SecuritySettings.AudioExportSettings.AudioFormat
store_tts_audio ("H
AudioFormat
AUDIO_FORMAT_UNSPECIFIED 	
MULAW
MP3
OGG8
InsightsExportSettings
enable_insights_export ("P
RedactionStrategy"
REDACTION_STRATEGY_UNSPECIFIED 
REDACT_WITH_SERVICE"J
RedactionScope
REDACTION_SCOPE_UNSPECIFIED 
REDACT_DISK_STORAGE"V
RetentionStrategy"
RETENTION_STRATEGY_UNSPECIFIED 
REMOVE_AFTER_CONVERSATION"H
PurgeDataType
PURGE_DATA_TYPE_UNSPECIFIED 
DIALOGFLOW_HISTORY:}�Az
*dialogflow.googleapis.com/SecuritySettingsLprojects/{project}/locations/{location}/securitySettings/{security_settings}B
data_retention2�	
SecuritySettingsService�
CreateSecuritySettings<.google.cloud.dialogflow.cx.v3.CreateSecuritySettingsRequest/.google.cloud.dialogflow.cx.v3.SecuritySettings"j�Aparent,security_settings���I"4/v3/{parent=projects/*/locations/*}/securitySettings:security_settings�
GetSecuritySettings9.google.cloud.dialogflow.cx.v3.GetSecuritySettingsRequest/.google.cloud.dialogflow.cx.v3.SecuritySettings"C�Aname���64/v3/{name=projects/*/locations/*/securitySettings/*}�
UpdateSecuritySettings<.google.cloud.dialogflow.cx.v3.UpdateSecuritySettingsRequest/.google.cloud.dialogflow.cx.v3.SecuritySettings"��Asecurity_settings,update_mask���[2F/v3/{security_settings.name=projects/*/locations/*/securitySettings/*}:security_settings�
ListSecuritySettings:.google.cloud.dialogflow.cx.v3.ListSecuritySettingsRequest;.google.cloud.dialogflow.cx.v3.ListSecuritySettingsResponse"E�Aparent���64/v3/{parent=projects/*/locations/*}/securitySettings�
DeleteSecuritySettings<.google.cloud.dialogflow.cx.v3.DeleteSecuritySettingsRequest.google.protobuf.Empty"C�Aname���6*4/v3/{name=projects/*/locations/*/securitySettings/*}x�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
!com.google.cloud.dialogflow.cx.v3BSecuritySettingsProtoPZ1cloud.google.com/go/dialogflow/cx/apiv3/cxpb;cxpb��DF�Google.Cloud.Dialogflow.Cx.V3�!Google::Cloud::Dialogflow::CX::V3�A�
"dlp.googleapis.com/InspectTemplateUorganizations/{organization}/locations/{location}/inspectTemplates/{inspect_template}Kprojects/{project}/locations/{location}/inspectTemplates/{inspect_template}�A�
%dlp.googleapis.com/DeidentifyTemplate[organizations/{organization}/locations/{location}/deidentifyTemplates/{deidentify_template}Qprojects/{project}/locations/{location}/deidentifyTemplates/{deidentify_template}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

