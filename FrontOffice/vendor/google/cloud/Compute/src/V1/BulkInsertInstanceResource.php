<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A transient resource used in compute.instances.bulkInsert and compute.regionInstances.bulkInsert . This resource is not persisted anywhere, it is used only for processing the requests.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.BulkInsertInstanceResource</code>
 */
class BulkInsertInstanceResource extends \Google\Protobuf\Internal\Message
{
    /**
     * The maximum number of instances to create.
     *
     * Generated from protobuf field <code>optional int64 count = 94851343;</code>
     */
    private $count = null;
    /**
     * The instance properties defining the VM instances to be created. Required if sourceInstanceTemplate is not provided.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceProperties instance_properties = 215355165;</code>
     */
    private $instance_properties = null;
    /**
     * Policy for choosing target zone. For more information, see Create VMs in bulk.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LocationPolicy location_policy = 465689852;</code>
     */
    private $location_policy = null;
    /**
     * The minimum number of instances to create. If no min_count is specified then count is used as the default value. If min_count instances cannot be created, then no instances will be created and instances already created will be deleted.
     *
     * Generated from protobuf field <code>optional int64 min_count = 523228386;</code>
     */
    private $min_count = null;
    /**
     * The string pattern used for the names of the VMs. Either name_pattern or per_instance_properties must be set. The pattern must contain one continuous sequence of placeholder hash characters (#) with each character corresponding to one digit of the generated instance name. Example: a name_pattern of inst-#### generates instance names such as inst-0001 and inst-0002. If existing instances in the same project and zone have names that match the name pattern then the generated instance numbers start after the biggest existing number. For example, if there exists an instance with name inst-0050, then instance names generated using the pattern inst-#### begin with inst-0051. The name pattern placeholder #...# can contain up to 18 characters.
     *
     * Generated from protobuf field <code>optional string name_pattern = 413815260;</code>
     */
    private $name_pattern = null;
    /**
     * Per-instance properties to be set on individual instances. Keys of this map specify requested instance names. Can be empty if name_pattern is used.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.BulkInsertInstanceResourcePerInstanceProperties> per_instance_properties = 108502267;</code>
     */
    private $per_instance_properties;
    /**
     * Specifies the instance template from which to create instances. You may combine sourceInstanceTemplate with instanceProperties to override specific values from an existing instance template. Bulk API follows the semantics of JSON Merge Patch described by RFC 7396. It can be a full or partial URL. For example, the following are all valid URLs to an instance template: - https://www.googleapis.com/compute/v1/projects/project /global/instanceTemplates/instanceTemplate - projects/project/global/instanceTemplates/instanceTemplate - global/instanceTemplates/instanceTemplate This field is optional.
     *
     * Generated from protobuf field <code>optional string source_instance_template = 332423616;</code>
     */
    private $source_instance_template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $count
     *           The maximum number of instances to create.
     *     @type \Google\Cloud\Compute\V1\InstanceProperties $instance_properties
     *           The instance properties defining the VM instances to be created. Required if sourceInstanceTemplate is not provided.
     *     @type \Google\Cloud\Compute\V1\LocationPolicy $location_policy
     *           Policy for choosing target zone. For more information, see Create VMs in bulk.
     *     @type int|string $min_count
     *           The minimum number of instances to create. If no min_count is specified then count is used as the default value. If min_count instances cannot be created, then no instances will be created and instances already created will be deleted.
     *     @type string $name_pattern
     *           The string pattern used for the names of the VMs. Either name_pattern or per_instance_properties must be set. The pattern must contain one continuous sequence of placeholder hash characters (#) with each character corresponding to one digit of the generated instance name. Example: a name_pattern of inst-#### generates instance names such as inst-0001 and inst-0002. If existing instances in the same project and zone have names that match the name pattern then the generated instance numbers start after the biggest existing number. For example, if there exists an instance with name inst-0050, then instance names generated using the pattern inst-#### begin with inst-0051. The name pattern placeholder #...# can contain up to 18 characters.
     *     @type array|\Google\Protobuf\Internal\MapField $per_instance_properties
     *           Per-instance properties to be set on individual instances. Keys of this map specify requested instance names. Can be empty if name_pattern is used.
     *     @type string $source_instance_template
     *           Specifies the instance template from which to create instances. You may combine sourceInstanceTemplate with instanceProperties to override specific values from an existing instance template. Bulk API follows the semantics of JSON Merge Patch described by RFC 7396. It can be a full or partial URL. For example, the following are all valid URLs to an instance template: - https://www.googleapis.com/compute/v1/projects/project /global/instanceTemplates/instanceTemplate - projects/project/global/instanceTemplates/instanceTemplate - global/instanceTemplates/instanceTemplate This field is optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The maximum number of instances to create.
     *
     * Generated from protobuf field <code>optional int64 count = 94851343;</code>
     * @return int|string
     */
    public function getCount()
    {
        return isset($this->count) ? $this->count : 0;
    }

    public function hasCount()
    {
        return isset($this->count);
    }

    public function clearCount()
    {
        unset($this->count);
    }

    /**
     * The maximum number of instances to create.
     *
     * Generated from protobuf field <code>optional int64 count = 94851343;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * The instance properties defining the VM instances to be created. Required if sourceInstanceTemplate is not provided.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceProperties instance_properties = 215355165;</code>
     * @return \Google\Cloud\Compute\V1\InstanceProperties|null
     */
    public function getInstanceProperties()
    {
        return $this->instance_properties;
    }

    public function hasInstanceProperties()
    {
        return isset($this->instance_properties);
    }

    public function clearInstanceProperties()
    {
        unset($this->instance_properties);
    }

    /**
     * The instance properties defining the VM instances to be created. Required if sourceInstanceTemplate is not provided.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.InstanceProperties instance_properties = 215355165;</code>
     * @param \Google\Cloud\Compute\V1\InstanceProperties $var
     * @return $this
     */
    public function setInstanceProperties($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\InstanceProperties::class);
        $this->instance_properties = $var;

        return $this;
    }

    /**
     * Policy for choosing target zone. For more information, see Create VMs in bulk.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LocationPolicy location_policy = 465689852;</code>
     * @return \Google\Cloud\Compute\V1\LocationPolicy|null
     */
    public function getLocationPolicy()
    {
        return $this->location_policy;
    }

    public function hasLocationPolicy()
    {
        return isset($this->location_policy);
    }

    public function clearLocationPolicy()
    {
        unset($this->location_policy);
    }

    /**
     * Policy for choosing target zone. For more information, see Create VMs in bulk.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.LocationPolicy location_policy = 465689852;</code>
     * @param \Google\Cloud\Compute\V1\LocationPolicy $var
     * @return $this
     */
    public function setLocationPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\LocationPolicy::class);
        $this->location_policy = $var;

        return $this;
    }

    /**
     * The minimum number of instances to create. If no min_count is specified then count is used as the default value. If min_count instances cannot be created, then no instances will be created and instances already created will be deleted.
     *
     * Generated from protobuf field <code>optional int64 min_count = 523228386;</code>
     * @return int|string
     */
    public function getMinCount()
    {
        return isset($this->min_count) ? $this->min_count : 0;
    }

    public function hasMinCount()
    {
        return isset($this->min_count);
    }

    public function clearMinCount()
    {
        unset($this->min_count);
    }

    /**
     * The minimum number of instances to create. If no min_count is specified then count is used as the default value. If min_count instances cannot be created, then no instances will be created and instances already created will be deleted.
     *
     * Generated from protobuf field <code>optional int64 min_count = 523228386;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_count = $var;

        return $this;
    }

    /**
     * The string pattern used for the names of the VMs. Either name_pattern or per_instance_properties must be set. The pattern must contain one continuous sequence of placeholder hash characters (#) with each character corresponding to one digit of the generated instance name. Example: a name_pattern of inst-#### generates instance names such as inst-0001 and inst-0002. If existing instances in the same project and zone have names that match the name pattern then the generated instance numbers start after the biggest existing number. For example, if there exists an instance with name inst-0050, then instance names generated using the pattern inst-#### begin with inst-0051. The name pattern placeholder #...# can contain up to 18 characters.
     *
     * Generated from protobuf field <code>optional string name_pattern = 413815260;</code>
     * @return string
     */
    public function getNamePattern()
    {
        return isset($this->name_pattern) ? $this->name_pattern : '';
    }

    public function hasNamePattern()
    {
        return isset($this->name_pattern);
    }

    public function clearNamePattern()
    {
        unset($this->name_pattern);
    }

    /**
     * The string pattern used for the names of the VMs. Either name_pattern or per_instance_properties must be set. The pattern must contain one continuous sequence of placeholder hash characters (#) with each character corresponding to one digit of the generated instance name. Example: a name_pattern of inst-#### generates instance names such as inst-0001 and inst-0002. If existing instances in the same project and zone have names that match the name pattern then the generated instance numbers start after the biggest existing number. For example, if there exists an instance with name inst-0050, then instance names generated using the pattern inst-#### begin with inst-0051. The name pattern placeholder #...# can contain up to 18 characters.
     *
     * Generated from protobuf field <code>optional string name_pattern = 413815260;</code>
     * @param string $var
     * @return $this
     */
    public function setNamePattern($var)
    {
        GPBUtil::checkString($var, True);
        $this->name_pattern = $var;

        return $this;
    }

    /**
     * Per-instance properties to be set on individual instances. Keys of this map specify requested instance names. Can be empty if name_pattern is used.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.BulkInsertInstanceResourcePerInstanceProperties> per_instance_properties = 108502267;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getPerInstanceProperties()
    {
        return $this->per_instance_properties;
    }

    /**
     * Per-instance properties to be set on individual instances. Keys of this map specify requested instance names. Can be empty if name_pattern is used.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.compute.v1.BulkInsertInstanceResourcePerInstanceProperties> per_instance_properties = 108502267;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setPerInstanceProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\BulkInsertInstanceResourcePerInstanceProperties::class);
        $this->per_instance_properties = $arr;

        return $this;
    }

    /**
     * Specifies the instance template from which to create instances. You may combine sourceInstanceTemplate with instanceProperties to override specific values from an existing instance template. Bulk API follows the semantics of JSON Merge Patch described by RFC 7396. It can be a full or partial URL. For example, the following are all valid URLs to an instance template: - https://www.googleapis.com/compute/v1/projects/project /global/instanceTemplates/instanceTemplate - projects/project/global/instanceTemplates/instanceTemplate - global/instanceTemplates/instanceTemplate This field is optional.
     *
     * Generated from protobuf field <code>optional string source_instance_template = 332423616;</code>
     * @return string
     */
    public function getSourceInstanceTemplate()
    {
        return isset($this->source_instance_template) ? $this->source_instance_template : '';
    }

    public function hasSourceInstanceTemplate()
    {
        return isset($this->source_instance_template);
    }

    public function clearSourceInstanceTemplate()
    {
        unset($this->source_instance_template);
    }

    /**
     * Specifies the instance template from which to create instances. You may combine sourceInstanceTemplate with instanceProperties to override specific values from an existing instance template. Bulk API follows the semantics of JSON Merge Patch described by RFC 7396. It can be a full or partial URL. For example, the following are all valid URLs to an instance template: - https://www.googleapis.com/compute/v1/projects/project /global/instanceTemplates/instanceTemplate - projects/project/global/instanceTemplates/instanceTemplate - global/instanceTemplates/instanceTemplate This field is optional.
     *
     * Generated from protobuf field <code>optional string source_instance_template = 332423616;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceInstanceTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_instance_template = $var;

        return $this;
    }

}

