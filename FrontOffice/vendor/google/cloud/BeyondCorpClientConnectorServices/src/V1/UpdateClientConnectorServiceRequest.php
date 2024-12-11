<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/beyondcorp/clientconnectorservices/v1/client_connector_services_service.proto

namespace Google\Cloud\BeyondCorp\ClientConnectorServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for updating a ClientConnectorService
 *
 * Generated from protobuf message <code>google.cloud.beyondcorp.clientconnectorservices.v1.UpdateClientConnectorServiceRequest</code>
 */
class UpdateClientConnectorServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * ClientConnectorService resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     * Mutable fields: display_name.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. The resource being updated.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.clientconnectorservices.v1.ClientConnectorService client_connector_service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $client_connector_service = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';
    /**
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;
    /**
     * Optional. If set as true, will create the resource if it is not found.
     *
     * Generated from protobuf field <code>bool allow_missing = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $allow_missing = false;

    /**
     * @param \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService $clientConnectorService Required. The resource being updated.
     * @param \Google\Protobuf\FieldMask                                                 $updateMask             Required. Field mask is used to specify the fields to be overwritten in the
     *                                                                                                           ClientConnectorService resource by the update.
     *                                                                                                           The fields specified in the update_mask are relative to the resource, not
     *                                                                                                           the full request. A field will be overwritten if it is in the mask. If the
     *                                                                                                           user does not provide a mask then all fields will be overwritten.
     *
     *                                                                                                           Mutable fields: display_name.
     *
     * @return \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\UpdateClientConnectorServiceRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService $clientConnectorService, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setClientConnectorService($clientConnectorService)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           ClientConnectorService resource by the update.
     *           The fields specified in the update_mask are relative to the resource, not
     *           the full request. A field will be overwritten if it is in the mask. If the
     *           user does not provide a mask then all fields will be overwritten.
     *           Mutable fields: display_name.
     *     @type \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService $client_connector_service
     *           Required. The resource being updated.
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     *     @type bool $validate_only
     *           Optional. If set, validates request by executing a dry-run which would not
     *           alter the resource in any way.
     *     @type bool $allow_missing
     *           Optional. If set as true, will create the resource if it is not found.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Beyondcorp\Clientconnectorservices\V1\ClientConnectorServicesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * ClientConnectorService resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     * Mutable fields: display_name.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Field mask is used to specify the fields to be overwritten in the
     * ClientConnectorService resource by the update.
     * The fields specified in the update_mask are relative to the resource, not
     * the full request. A field will be overwritten if it is in the mask. If the
     * user does not provide a mask then all fields will be overwritten.
     * Mutable fields: display_name.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The resource being updated.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.clientconnectorservices.v1.ClientConnectorService client_connector_service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService|null
     */
    public function getClientConnectorService()
    {
        return $this->client_connector_service;
    }

    public function hasClientConnectorService()
    {
        return isset($this->client_connector_service);
    }

    public function clearClientConnectorService()
    {
        unset($this->client_connector_service);
    }

    /**
     * Required. The resource being updated.
     *
     * Generated from protobuf field <code>.google.cloud.beyondcorp.clientconnectorservices.v1.ClientConnectorService client_connector_service = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService $var
     * @return $this
     */
    public function setClientConnectorService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BeyondCorp\ClientConnectorServices\V1\ClientConnectorService::class);
        $this->client_connector_service = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, validates request by executing a dry-run which would not
     * alter the resource in any way.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. If set as true, will create the resource if it is not found.
     *
     * Generated from protobuf field <code>bool allow_missing = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * Optional. If set as true, will create the resource if it is not found.
     *
     * Generated from protobuf field <code>bool allow_missing = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}

