<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/os_policy.proto

namespace Google\Cloud\OsConfig\V1\OSPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An OS policy resource is used to define the desired state configuration
 * and provides a specific functionality like installing/removing packages,
 * executing a script etc.
 * The system ensures that resources are always in their desired state by
 * taking necessary actions if they have drifted from their desired state.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.OSPolicy.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The id of the resource with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the OS policy.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $id = '';
    protected $resource_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Required. The id of the resource with the following restrictions:
     *           * Must contain only lowercase letters, numbers, and hyphens.
     *           * Must start with a letter.
     *           * Must be between 1-63 characters.
     *           * Must end with a number or a letter.
     *           * Must be unique within the OS policy.
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource $pkg
     *           Package resource
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\RepositoryResource $repository
     *           Package repository resource
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource $exec
     *           Exec resource
     *     @type \Google\Cloud\OsConfig\V1\OSPolicy\Resource\FileResource $file
     *           File resource
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\OsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The id of the resource with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the OS policy.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. The id of the resource with the following restrictions:
     * * Must contain only lowercase letters, numbers, and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the OS policy.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Package resource
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource pkg = 2;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource|null
     */
    public function getPkg()
    {
        return $this->readOneof(2);
    }

    public function hasPkg()
    {
        return $this->hasOneof(2);
    }

    /**
     * Package resource
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.PackageResource pkg = 2;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource $var
     * @return $this
     */
    public function setPkg($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\PackageResource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Package repository resource
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.RepositoryResource repository = 3;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\RepositoryResource|null
     */
    public function getRepository()
    {
        return $this->readOneof(3);
    }

    public function hasRepository()
    {
        return $this->hasOneof(3);
    }

    /**
     * Package repository resource
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.RepositoryResource repository = 3;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\RepositoryResource $var
     * @return $this
     */
    public function setRepository($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\RepositoryResource::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Exec resource
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource exec = 4;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource|null
     */
    public function getExec()
    {
        return $this->readOneof(4);
    }

    public function hasExec()
    {
        return $this->hasOneof(4);
    }

    /**
     * Exec resource
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.ExecResource exec = 4;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource $var
     * @return $this
     */
    public function setExec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\ExecResource::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * File resource
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.FileResource file = 5;</code>
     * @return \Google\Cloud\OsConfig\V1\OSPolicy\Resource\FileResource|null
     */
    public function getFile()
    {
        return $this->readOneof(5);
    }

    public function hasFile()
    {
        return $this->hasOneof(5);
    }

    /**
     * File resource
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1.OSPolicy.Resource.FileResource file = 5;</code>
     * @param \Google\Cloud\OsConfig\V1\OSPolicy\Resource\FileResource $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\OsConfig\V1\OSPolicy\Resource\FileResource::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResourceType()
    {
        return $this->whichOneof("resource_type");
    }

}


