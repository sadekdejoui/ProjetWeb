<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Structured content to inspect. Up to 50,000 `Value`s per request allowed. See
 * https://cloud.google.com/sensitive-data-protection/docs/inspecting-structured-text#inspecting_a_table
 * to learn more.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Table</code>
 */
class Table extends \Google\Protobuf\Internal\Message
{
    /**
     * Headers of the table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId headers = 1;</code>
     */
    private $headers;
    /**
     * Rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Table.Row rows = 2;</code>
     */
    private $rows;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dlp\V2\FieldId>|\Google\Protobuf\Internal\RepeatedField $headers
     *           Headers of the table.
     *     @type array<\Google\Cloud\Dlp\V2\Table\Row>|\Google\Protobuf\Internal\RepeatedField $rows
     *           Rows of the table.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Headers of the table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId headers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Headers of the table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId headers = 1;</code>
     * @param array<\Google\Cloud\Dlp\V2\FieldId>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->headers = $arr;

        return $this;
    }

    /**
     * Rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Table.Row rows = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * Rows of the table.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Table.Row rows = 2;</code>
     * @param array<\Google\Cloud\Dlp\V2\Table\Row>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Table\Row::class);
        $this->rows = $arr;

        return $this;
    }

}

