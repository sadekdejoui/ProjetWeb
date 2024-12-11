<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/lfp/v1beta/lfpstore.proto

namespace Google\Shopping\Merchant\Lfp\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `GetLfpStore` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.lfp.v1beta.GetLfpStoreRequest</code>
 */
class GetLfpStoreRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the store to retrieve.
     * Format: `accounts/{account}/lfpStores/{target_merchant}~{store_code}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The name of the store to retrieve.
     *                     Format: `accounts/{account}/lfpStores/{target_merchant}~{store_code}`
     *                     Please see {@see LfpStoreServiceClient::lfpStoreName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\Lfp\V1beta\GetLfpStoreRequest
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
     *           Required. The name of the store to retrieve.
     *           Format: `accounts/{account}/lfpStores/{target_merchant}~{store_code}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Lfp\V1Beta\Lfpstore::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the store to retrieve.
     * Format: `accounts/{account}/lfpStores/{target_merchant}~{store_code}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the store to retrieve.
     * Format: `accounts/{account}/lfpStores/{target_merchant}~{store_code}`
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

