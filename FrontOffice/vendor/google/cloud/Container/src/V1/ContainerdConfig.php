<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ContainerdConfig contains configuration to customize containerd.
 *
 * Generated from protobuf message <code>google.container.v1.ContainerdConfig</code>
 */
class ContainerdConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * PrivateRegistryAccessConfig is used to configure access configuration
     * for private container registries.
     *
     * Generated from protobuf field <code>.google.container.v1.ContainerdConfig.PrivateRegistryAccessConfig private_registry_access_config = 1;</code>
     */
    protected $private_registry_access_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig $private_registry_access_config
     *           PrivateRegistryAccessConfig is used to configure access configuration
     *           for private container registries.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * PrivateRegistryAccessConfig is used to configure access configuration
     * for private container registries.
     *
     * Generated from protobuf field <code>.google.container.v1.ContainerdConfig.PrivateRegistryAccessConfig private_registry_access_config = 1;</code>
     * @return \Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig|null
     */
    public function getPrivateRegistryAccessConfig()
    {
        return $this->private_registry_access_config;
    }

    public function hasPrivateRegistryAccessConfig()
    {
        return isset($this->private_registry_access_config);
    }

    public function clearPrivateRegistryAccessConfig()
    {
        unset($this->private_registry_access_config);
    }

    /**
     * PrivateRegistryAccessConfig is used to configure access configuration
     * for private container registries.
     *
     * Generated from protobuf field <code>.google.container.v1.ContainerdConfig.PrivateRegistryAccessConfig private_registry_access_config = 1;</code>
     * @param \Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig $var
     * @return $this
     */
    public function setPrivateRegistryAccessConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\ContainerdConfig\PrivateRegistryAccessConfig::class);
        $this->private_registry_access_config = $var;

        return $this;
    }

}

