<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/rule.proto

namespace GPBMetadata\Google\Devtools\Artifactregistry\V1;

class Rule
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Type\Expr::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/devtools/artifactregistry/v1/rule.proto#google.devtools.artifactregistry.v1google/api/resource.proto google/protobuf/field_mask.protogoogle/type/expr.proto"�
Rule
name (	@
action (20.google.devtools.artifactregistry.v1.Rule.ActionF
	operation (23.google.devtools.artifactregistry.v1.Rule.Operation)
	condition (2.google.type.ExprB�A

package_id (	"5
Action
ACTION_UNSPECIFIED 	
ALLOW
DENY"4
	Operation
OPERATION_UNSPECIFIED 
DOWNLOAD:y�Av
$artifactregistry.googleapis.com/RuleNprojects/{project}/locations/{location}/repositories/{repository}/rules/{rule}"w
ListRulesRequest<
parent (	B,�A�A&$artifactregistry.googleapis.com/Rule
	page_size (

page_token (	"f
ListRulesResponse8
rules (2).google.devtools.artifactregistry.v1.Rule
next_page_token (	"L
GetRuleRequest:
name (	B,�A�A&
$artifactregistry.googleapis.com/Rule"�
CreateRuleRequest<
parent (	B,�A�A&$artifactregistry.googleapis.com/Rule
rule_id (	7
rule (2).google.devtools.artifactregistry.v1.Rule"}
UpdateRuleRequest7
rule (2).google.devtools.artifactregistry.v1.Rule/
update_mask (2.google.protobuf.FieldMask"O
DeleteRuleRequest:
name (	B,�A�A&
$artifactregistry.googleapis.com/RuleB�
\'com.google.devtools.artifactregistry.v1B	RuleProtoPZPcloud.google.com/go/artifactregistry/apiv1/artifactregistrypb;artifactregistrypb� Google.Cloud.ArtifactRegistry.V1� Google\\Cloud\\ArtifactRegistry\\V1�#Google::Cloud::ArtifactRegistry::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

