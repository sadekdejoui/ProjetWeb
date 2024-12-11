<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/repricing.proto

namespace GPBMetadata\Google\Cloud\Channel\V1;

class Repricing
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Date::initOnce();
        \GPBMetadata\Google\Type\Decimal::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
\'google/cloud/channel/v1/repricing.protogoogle.cloud.channel.v1google/api/resource.protogoogle/protobuf/timestamp.protogoogle/type/date.protogoogle/type/decimal.proto"�
CustomerRepricingConfig
name (	B�AG
repricing_config (2(.google.cloud.channel.v1.RepricingConfigB�A4
update_time (2.google.protobuf.TimestampB�A:��A�
3cloudchannel.googleapis.com/CustomerRepricingConfig\\accounts/{account}/customers/{customer}/customerRepricingConfigs/{customer_repricing_config}"�
ChannelPartnerRepricingConfig
name (	B�AG
repricing_config (2(.google.cloud.channel.v1.RepricingConfigB�A4
update_time (2.google.protobuf.TimestampB�A:��A�
9cloudchannel.googleapis.com/ChannelPartnerRepricingConfigzaccounts/{account}/channelPartnerLinks/{channel_partner}/channelPartnerRepricingConfigs/{channel_partner_repricing_config}"�
RepricingConfigb
entitlement_granularity (2?.google.cloud.channel.v1.RepricingConfig.EntitlementGranularityH m
channel_partner_granularity (2B.google.cloud.channel.v1.RepricingConfig.ChannelPartnerGranularityBH 7
effective_invoice_month (2.google.type.DateB�AE

adjustment (2,.google.cloud.channel.v1.RepricingAdjustmentB�AE
rebilling_basis (2\'.google.cloud.channel.v1.RebillingBasisB�AK
conditional_overrides (2,.google.cloud.channel.v1.ConditionalOverride[
EntitlementGranularityA
entitlement (	B,�A)
\'cloudchannel.googleapis.com/Entitlement
ChannelPartnerGranularity:B
granularity"s
RepricingAdjustmentN
percentage_adjustment (2-.google.cloud.channel.v1.PercentageAdjustmentH B

adjustment"@
PercentageAdjustment(

percentage (2.google.type.Decimal"�
ConditionalOverrideE

adjustment (2,.google.cloud.channel.v1.RepricingAdjustmentB�AE
rebilling_basis (2\'.google.cloud.channel.v1.RebillingBasisB�AM
repricing_condition (2+.google.cloud.channel.v1.RepricingConditionB�A"l
RepricingConditionI
sku_group_condition (2*.google.cloud.channel.v1.SkuGroupConditionH B
	condition"&
SkuGroupCondition
	sku_group (	*]
RebillingBasis
REBILLING_BASIS_UNSPECIFIED 
COST_AT_LIST
DIRECT_CUSTOMER_COSTBf
com.google.cloud.channel.v1BRepricingProtoPZ5cloud.google.com/go/channel/apiv1/channelpb;channelpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

