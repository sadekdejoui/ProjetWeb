<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/edgenetwork/v1/service.proto

namespace Google\Cloud\EdgeNetwork\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating a Network
 *
 * Generated from protobuf message <code>google.cloud.edgenetwork.v1.CreateNetworkRequest</code>
 */
class CreateNetworkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Id of the requesting object
     * If auto-generating Id server-side, remove this field and
     * network_id from the method_signature of Create RPC
     *
     * Generated from protobuf field <code>string network_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $network_id = '';
    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.Network network = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $network = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string                               $parent    Required. Value for parent. Please see
     *                                                        {@see EdgeNetworkClient::zoneName()} for help formatting this field.
     * @param \Google\Cloud\EdgeNetwork\V1\Network $network   Required. The resource being created
     * @param string                               $networkId Required. Id of the requesting object
     *                                                        If auto-generating Id server-side, remove this field and
     *                                                        network_id from the method_signature of Create RPC
     *
     * @return \Google\Cloud\EdgeNetwork\V1\CreateNetworkRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\EdgeNetwork\V1\Network $network, string $networkId): self
    {
        return (new self())
            ->setParent($parent)
            ->setNetwork($network)
            ->setNetworkId($networkId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Value for parent.
     *     @type string $network_id
     *           Required. Id of the requesting object
     *           If auto-generating Id server-side, remove this field and
     *           network_id from the method_signature of Create RPC
     *     @type \Google\Cloud\EdgeNetwork\V1\Network $network
     *           Required. The resource being created
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Edgenetwork\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Id of the requesting object
     * If auto-generating Id server-side, remove this field and
     * network_id from the method_signature of Create RPC
     *
     * Generated from protobuf field <code>string network_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getNetworkId()
    {
        return $this->network_id;
    }

    /**
     * Required. Id of the requesting object
     * If auto-generating Id server-side, remove this field and
     * network_id from the method_signature of Create RPC
     *
     * Generated from protobuf field <code>string network_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkId($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_id = $var;

        return $this;
    }

    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.Network network = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\EdgeNetwork\V1\Network|null
     */
    public function getNetwork()
    {
        return $this->network;
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.Network network = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\EdgeNetwork\V1\Network $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\EdgeNetwork\V1\Network::class);
        $this->network = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

