<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/delivery/v1/delivery_api.proto

namespace Google\Maps\FleetEngine\Delivery\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `UpdateDeliveryVehicle` request message.
 *
 * Generated from protobuf message <code>maps.fleetengine.delivery.v1.UpdateDeliveryVehicleRequest</code>
 */
class UpdateDeliveryVehicleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The standard Delivery API request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryRequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $header = null;
    /**
     * Required. The `DeliveryVehicle` entity update to apply.
     * Note: You cannot update the name of the `DeliveryVehicle`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicle delivery_vehicle = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $delivery_vehicle = null;
    /**
     * Required. A field mask that indicates which `DeliveryVehicle` fields to
     * update. Note that the update_mask must contain at least one field.
     * This is a comma-separated list of fully qualified names of fields. Example:
     * `"remaining_vehicle_journey_segments"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicle $deliveryVehicle Required. The `DeliveryVehicle` entity update to apply.
     *                                                                              Note: You cannot update the name of the `DeliveryVehicle`.
     * @param \Google\Protobuf\FieldMask                           $updateMask      Required. A field mask that indicates which `DeliveryVehicle` fields to
     *                                                                              update. Note that the update_mask must contain at least one field.
     *
     *                                                                              This is a comma-separated list of fully qualified names of fields. Example:
     *                                                                              `"remaining_vehicle_journey_segments"`.
     *
     * @return \Google\Maps\FleetEngine\Delivery\V1\UpdateDeliveryVehicleRequest
     *
     * @experimental
     */
    public static function build(\Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicle $deliveryVehicle, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setDeliveryVehicle($deliveryVehicle)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader $header
     *           Optional. The standard Delivery API request header.
     *     @type \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicle $delivery_vehicle
     *           Required. The `DeliveryVehicle` entity update to apply.
     *           Note: You cannot update the name of the `DeliveryVehicle`.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. A field mask that indicates which `DeliveryVehicle` fields to
     *           update. Note that the update_mask must contain at least one field.
     *           This is a comma-separated list of fully qualified names of fields. Example:
     *           `"remaining_vehicle_journey_segments"`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Maps\Fleetengine\Delivery\V1\DeliveryApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The standard Delivery API request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryRequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Optional. The standard Delivery API request header.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryRequestHeader header = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\DeliveryRequestHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Required. The `DeliveryVehicle` entity update to apply.
     * Note: You cannot update the name of the `DeliveryVehicle`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicle delivery_vehicle = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicle|null
     */
    public function getDeliveryVehicle()
    {
        return $this->delivery_vehicle;
    }

    public function hasDeliveryVehicle()
    {
        return isset($this->delivery_vehicle);
    }

    public function clearDeliveryVehicle()
    {
        unset($this->delivery_vehicle);
    }

    /**
     * Required. The `DeliveryVehicle` entity update to apply.
     * Note: You cannot update the name of the `DeliveryVehicle`.
     *
     * Generated from protobuf field <code>.maps.fleetengine.delivery.v1.DeliveryVehicle delivery_vehicle = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicle $var
     * @return $this
     */
    public function setDeliveryVehicle($var)
    {
        GPBUtil::checkMessage($var, \Google\Maps\FleetEngine\Delivery\V1\DeliveryVehicle::class);
        $this->delivery_vehicle = $var;

        return $this;
    }

    /**
     * Required. A field mask that indicates which `DeliveryVehicle` fields to
     * update. Note that the update_mask must contain at least one field.
     * This is a comma-separated list of fully qualified names of fields. Example:
     * `"remaining_vehicle_journey_segments"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. A field mask that indicates which `DeliveryVehicle` fields to
     * update. Note that the update_mask must contain at least one field.
     * This is a comma-separated list of fully qualified names of fields. Example:
     * `"remaining_vehicle_journey_segments"`.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

