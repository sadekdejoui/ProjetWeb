<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/confidentialcomputing/v1/service.proto

namespace Google\Cloud\ConfidentialComputing\V1\TokenOptions\AwsPrincipalTagsOptions\AllowedPrincipalTags;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Allowed Container Image Signatures. Key IDs are required to allow this
 * claim to fit within the narrow AWS IAM restrictions.
 *
 * Generated from protobuf message <code>google.cloud.confidentialcomputing.v1.TokenOptions.AwsPrincipalTagsOptions.AllowedPrincipalTags.ContainerImageSignatures</code>
 */
class ContainerImageSignatures extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. List of key ids to filter into the Principal tags. Only
     * keys that have been validated and added to the token will be filtered
     * into principal tags. Unrecognized key ids will be ignored.
     *
     * Generated from protobuf field <code>repeated string key_ids = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $key_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $key_ids
     *           Optional. List of key ids to filter into the Principal tags. Only
     *           keys that have been validated and added to the token will be filtered
     *           into principal tags. Unrecognized key ids will be ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Confidentialcomputing\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. List of key ids to filter into the Principal tags. Only
     * keys that have been validated and added to the token will be filtered
     * into principal tags. Unrecognized key ids will be ignored.
     *
     * Generated from protobuf field <code>repeated string key_ids = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeyIds()
    {
        return $this->key_ids;
    }

    /**
     * Optional. List of key ids to filter into the Principal tags. Only
     * keys that have been validated and added to the token will be filtered
     * into principal tags. Unrecognized key ids will be ignored.
     *
     * Generated from protobuf field <code>repeated string key_ids = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeyIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->key_ids = $arr;

        return $this;
    }

}


