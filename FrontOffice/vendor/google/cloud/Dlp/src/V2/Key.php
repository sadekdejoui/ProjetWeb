<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A unique identifier for a Datastore entity.
 * If a key's partition ID or any of its path kinds or names are
 * reserved/read-only, the key is reserved/read-only.
 * A reserved/read-only key is forbidden in certain documented contexts.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Key</code>
 */
class Key extends \Google\Protobuf\Internal\Message
{
    /**
     * Entities are partitioned into subsets, currently identified by a project
     * ID and namespace ID.
     * Queries are scoped to a single partition.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PartitionId partition_id = 1;</code>
     */
    protected $partition_id = null;
    /**
     * The entity path.
     * An entity path consists of one or more elements composed of a kind and a
     * string or numerical identifier, which identify entities. The first
     * element identifies a _root entity_, the second element identifies
     * a _child_ of the root entity, the third element identifies a child of the
     * second entity, and so forth. The entities identified by all prefixes of
     * the path are called the element's _ancestors_.
     * A path can never be empty, and a path can have at most 100 elements.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Key.PathElement path = 2;</code>
     */
    private $path;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\PartitionId $partition_id
     *           Entities are partitioned into subsets, currently identified by a project
     *           ID and namespace ID.
     *           Queries are scoped to a single partition.
     *     @type array<\Google\Cloud\Dlp\V2\Key\PathElement>|\Google\Protobuf\Internal\RepeatedField $path
     *           The entity path.
     *           An entity path consists of one or more elements composed of a kind and a
     *           string or numerical identifier, which identify entities. The first
     *           element identifies a _root entity_, the second element identifies
     *           a _child_ of the root entity, the third element identifies a child of the
     *           second entity, and so forth. The entities identified by all prefixes of
     *           the path are called the element's _ancestors_.
     *           A path can never be empty, and a path can have at most 100 elements.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Entities are partitioned into subsets, currently identified by a project
     * ID and namespace ID.
     * Queries are scoped to a single partition.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PartitionId partition_id = 1;</code>
     * @return \Google\Cloud\Dlp\V2\PartitionId|null
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }

    public function hasPartitionId()
    {
        return isset($this->partition_id);
    }

    public function clearPartitionId()
    {
        unset($this->partition_id);
    }

    /**
     * Entities are partitioned into subsets, currently identified by a project
     * ID and namespace ID.
     * Queries are scoped to a single partition.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.PartitionId partition_id = 1;</code>
     * @param \Google\Cloud\Dlp\V2\PartitionId $var
     * @return $this
     */
    public function setPartitionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\PartitionId::class);
        $this->partition_id = $var;

        return $this;
    }

    /**
     * The entity path.
     * An entity path consists of one or more elements composed of a kind and a
     * string or numerical identifier, which identify entities. The first
     * element identifies a _root entity_, the second element identifies
     * a _child_ of the root entity, the third element identifies a child of the
     * second entity, and so forth. The entities identified by all prefixes of
     * the path are called the element's _ancestors_.
     * A path can never be empty, and a path can have at most 100 elements.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Key.PathElement path = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The entity path.
     * An entity path consists of one or more elements composed of a kind and a
     * string or numerical identifier, which identify entities. The first
     * element identifies a _root entity_, the second element identifies
     * a _child_ of the root entity, the third element identifies a child of the
     * second entity, and so forth. The entities identified by all prefixes of
     * the path are called the element's _ancestors_.
     * A path can never be empty, and a path can have at most 100 elements.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Key.PathElement path = 2;</code>
     * @param array<\Google\Cloud\Dlp\V2\Key\PathElement>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Key\PathElement::class);
        $this->path = $arr;

        return $this;
    }

}

