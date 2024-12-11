<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/migrationcenter/v1/migrationcenter.proto

namespace Google\Cloud\MigrationCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Open file Information.
 *
 * Generated from protobuf message <code>google.cloud.migrationcenter.v1.OpenFileDetails</code>
 */
class OpenFileDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Opened file command.
     *
     * Generated from protobuf field <code>string command = 1;</code>
     */
    protected $command = '';
    /**
     * Opened file user.
     *
     * Generated from protobuf field <code>string user = 2;</code>
     */
    protected $user = '';
    /**
     * Opened file file type.
     *
     * Generated from protobuf field <code>string file_type = 3;</code>
     */
    protected $file_type = '';
    /**
     * Opened file file path.
     *
     * Generated from protobuf field <code>string file_path = 4;</code>
     */
    protected $file_path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $command
     *           Opened file command.
     *     @type string $user
     *           Opened file user.
     *     @type string $file_type
     *           Opened file file type.
     *     @type string $file_path
     *           Opened file file path.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Migrationcenter\V1\Migrationcenter::initOnce();
        parent::__construct($data);
    }

    /**
     * Opened file command.
     *
     * Generated from protobuf field <code>string command = 1;</code>
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Opened file command.
     *
     * Generated from protobuf field <code>string command = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCommand($var)
    {
        GPBUtil::checkString($var, True);
        $this->command = $var;

        return $this;
    }

    /**
     * Opened file user.
     *
     * Generated from protobuf field <code>string user = 2;</code>
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Opened file user.
     *
     * Generated from protobuf field <code>string user = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkString($var, True);
        $this->user = $var;

        return $this;
    }

    /**
     * Opened file file type.
     *
     * Generated from protobuf field <code>string file_type = 3;</code>
     * @return string
     */
    public function getFileType()
    {
        return $this->file_type;
    }

    /**
     * Opened file file type.
     *
     * Generated from protobuf field <code>string file_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFileType($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_type = $var;

        return $this;
    }

    /**
     * Opened file file path.
     *
     * Generated from protobuf field <code>string file_path = 4;</code>
     * @return string
     */
    public function getFilePath()
    {
        return $this->file_path;
    }

    /**
     * Opened file file path.
     *
     * Generated from protobuf field <code>string file_path = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFilePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_path = $var;

        return $this;
    }

}

