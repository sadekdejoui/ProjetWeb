<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/machine_resources.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of resources that to large degree are decided by Vertex AI,
 * and require only a modest additional configuration.
 * Each Model supporting these resources documents its specific guidelines.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.AutomaticResources</code>
 */
class AutomaticResources extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The minimum number of replicas this DeployedModel will be always
     * deployed on. If traffic against it increases, it may dynamically be
     * deployed onto more replicas up to
     * [max_replica_count][google.cloud.aiplatform.v1.AutomaticResources.max_replica_count],
     * and as traffic decreases, some of these extra replicas may be freed. If the
     * requested value is too large, the deployment will error.
     *
     * Generated from protobuf field <code>int32 min_replica_count = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $min_replica_count = 0;
    /**
     * Immutable. The maximum number of replicas this DeployedModel may be
     * deployed on when the traffic against it increases. If the requested value
     * is too large, the deployment will error, but if deployment succeeds then
     * the ability to scale the model to that many replicas is guaranteed (barring
     * service outages). If traffic against the DeployedModel increases beyond
     * what its replicas at maximum may handle, a portion of the traffic will be
     * dropped. If this value is not provided, a no upper bound for scaling under
     * heavy traffic will be assume, though Vertex AI may be unable to scale
     * beyond certain replica number.
     *
     * Generated from protobuf field <code>int32 max_replica_count = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $max_replica_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $min_replica_count
     *           Immutable. The minimum number of replicas this DeployedModel will be always
     *           deployed on. If traffic against it increases, it may dynamically be
     *           deployed onto more replicas up to
     *           [max_replica_count][google.cloud.aiplatform.v1.AutomaticResources.max_replica_count],
     *           and as traffic decreases, some of these extra replicas may be freed. If the
     *           requested value is too large, the deployment will error.
     *     @type int $max_replica_count
     *           Immutable. The maximum number of replicas this DeployedModel may be
     *           deployed on when the traffic against it increases. If the requested value
     *           is too large, the deployment will error, but if deployment succeeds then
     *           the ability to scale the model to that many replicas is guaranteed (barring
     *           service outages). If traffic against the DeployedModel increases beyond
     *           what its replicas at maximum may handle, a portion of the traffic will be
     *           dropped. If this value is not provided, a no upper bound for scaling under
     *           heavy traffic will be assume, though Vertex AI may be unable to scale
     *           beyond certain replica number.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MachineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The minimum number of replicas this DeployedModel will be always
     * deployed on. If traffic against it increases, it may dynamically be
     * deployed onto more replicas up to
     * [max_replica_count][google.cloud.aiplatform.v1.AutomaticResources.max_replica_count],
     * and as traffic decreases, some of these extra replicas may be freed. If the
     * requested value is too large, the deployment will error.
     *
     * Generated from protobuf field <code>int32 min_replica_count = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getMinReplicaCount()
    {
        return $this->min_replica_count;
    }

    /**
     * Immutable. The minimum number of replicas this DeployedModel will be always
     * deployed on. If traffic against it increases, it may dynamically be
     * deployed onto more replicas up to
     * [max_replica_count][google.cloud.aiplatform.v1.AutomaticResources.max_replica_count],
     * and as traffic decreases, some of these extra replicas may be freed. If the
     * requested value is too large, the deployment will error.
     *
     * Generated from protobuf field <code>int32 min_replica_count = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setMinReplicaCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_replica_count = $var;

        return $this;
    }

    /**
     * Immutable. The maximum number of replicas this DeployedModel may be
     * deployed on when the traffic against it increases. If the requested value
     * is too large, the deployment will error, but if deployment succeeds then
     * the ability to scale the model to that many replicas is guaranteed (barring
     * service outages). If traffic against the DeployedModel increases beyond
     * what its replicas at maximum may handle, a portion of the traffic will be
     * dropped. If this value is not provided, a no upper bound for scaling under
     * heavy traffic will be assume, though Vertex AI may be unable to scale
     * beyond certain replica number.
     *
     * Generated from protobuf field <code>int32 max_replica_count = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getMaxReplicaCount()
    {
        return $this->max_replica_count;
    }

    /**
     * Immutable. The maximum number of replicas this DeployedModel may be
     * deployed on when the traffic against it increases. If the requested value
     * is too large, the deployment will error, but if deployment succeeds then
     * the ability to scale the model to that many replicas is guaranteed (barring
     * service outages). If traffic against the DeployedModel increases beyond
     * what its replicas at maximum may handle, a portion of the traffic will be
     * dropped. If this value is not provided, a no upper bound for scaling under
     * heavy traffic will be assume, though Vertex AI may be unable to scale
     * beyond certain replica number.
     *
     * Generated from protobuf field <code>int32 max_replica_count = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setMaxReplicaCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_replica_count = $var;

        return $this;
    }

}

