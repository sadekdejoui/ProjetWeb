<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/types.proto

namespace Google\Cloud\Bigtable\V2\Type\PBString;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Rules used to convert to/from lower level types.
 *
 * Generated from protobuf message <code>google.bigtable.v2.Type.String.Encoding</code>
 */
class Encoding extends \Google\Protobuf\Internal\Message
{
    protected $encoding;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigtable\V2\Type\PBString\Encoding\Utf8Raw $utf8_raw
     *           Deprecated: if set, converts to an empty `utf8_bytes`.
     *     @type \Google\Cloud\Bigtable\V2\Type\PBString\Encoding\Utf8Bytes $utf8_bytes
     *           Use `Utf8Bytes` encoding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Types::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated: if set, converts to an empty `utf8_bytes`.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Type.String.Encoding.Utf8Raw utf8_raw = 1 [deprecated = true];</code>
     * @return \Google\Cloud\Bigtable\V2\Type\PBString\Encoding\Utf8Raw|null
     * @deprecated
     */
    public function getUtf8Raw()
    {
        @trigger_error('utf8_raw is deprecated.', E_USER_DEPRECATED);
        return $this->readOneof(1);
    }

    public function hasUtf8Raw()
    {
        @trigger_error('utf8_raw is deprecated.', E_USER_DEPRECATED);
        return $this->hasOneof(1);
    }

    /**
     * Deprecated: if set, converts to an empty `utf8_bytes`.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Type.String.Encoding.Utf8Raw utf8_raw = 1 [deprecated = true];</code>
     * @param \Google\Cloud\Bigtable\V2\Type\PBString\Encoding\Utf8Raw $var
     * @return $this
     * @deprecated
     */
    public function setUtf8Raw($var)
    {
        @trigger_error('utf8_raw is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\Type\PBString\Encoding\Utf8Raw::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Use `Utf8Bytes` encoding.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Type.String.Encoding.Utf8Bytes utf8_bytes = 2;</code>
     * @return \Google\Cloud\Bigtable\V2\Type\PBString\Encoding\Utf8Bytes|null
     */
    public function getUtf8Bytes()
    {
        return $this->readOneof(2);
    }

    public function hasUtf8Bytes()
    {
        return $this->hasOneof(2);
    }

    /**
     * Use `Utf8Bytes` encoding.
     *
     * Generated from protobuf field <code>.google.bigtable.v2.Type.String.Encoding.Utf8Bytes utf8_bytes = 2;</code>
     * @param \Google\Cloud\Bigtable\V2\Type\PBString\Encoding\Utf8Bytes $var
     * @return $this
     */
    public function setUtf8Bytes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\V2\Type\PBString\Encoding\Utf8Bytes::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEncoding()
    {
        return $this->whichOneof("encoding");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Encoding::class, \Google\Cloud\Bigtable\V2\Type_String_Encoding::class);

