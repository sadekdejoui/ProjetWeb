<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for RCToken generated for service mesh workloads protected by
 * IAP. RCToken are IAP generated JWTs that can be verified at the application.
 * The RCToken is primarily used for service mesh deployments, and can be scoped
 * to a single mesh by configuring the audience field accordingly.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.CsmSettings</code>
 */
class CsmSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Audience claim set in the generated RCToken. This value is not validated by
     * IAP.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue rctoken_aud = 1;</code>
     */
    protected $rctoken_aud = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $rctoken_aud
     *           Audience claim set in the generated RCToken. This value is not validated by
     *           IAP.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Audience claim set in the generated RCToken. This value is not validated by
     * IAP.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue rctoken_aud = 1;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getRctokenAud()
    {
        return $this->rctoken_aud;
    }

    public function hasRctokenAud()
    {
        return isset($this->rctoken_aud);
    }

    public function clearRctokenAud()
    {
        unset($this->rctoken_aud);
    }

    /**
     * Returns the unboxed value from <code>getRctokenAud()</code>

     * Audience claim set in the generated RCToken. This value is not validated by
     * IAP.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue rctoken_aud = 1;</code>
     * @return string|null
     */
    public function getRctokenAudUnwrapped()
    {
        return $this->readWrapperValue("rctoken_aud");
    }

    /**
     * Audience claim set in the generated RCToken. This value is not validated by
     * IAP.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue rctoken_aud = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setRctokenAud($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->rctoken_aud = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Audience claim set in the generated RCToken. This value is not validated by
     * IAP.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue rctoken_aud = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setRctokenAudUnwrapped($var)
    {
        $this->writeWrapperValue("rctoken_aud", $var);
        return $this;}

}

