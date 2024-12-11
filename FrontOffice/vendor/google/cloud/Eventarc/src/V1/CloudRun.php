<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/eventarc/v1/trigger.proto

namespace Google\Cloud\Eventarc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Cloud Run destination.
 *
 * Generated from protobuf message <code>google.cloud.eventarc.v1.CloudRun</code>
 */
class CloudRun extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Cloud Run service being addressed. See
     * https://cloud.google.com/run/docs/reference/rest/v1/namespaces.services.
     * Only services located in the same project as the trigger object
     * can be addressed.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $service = '';
    /**
     * Optional. The relative path on the Cloud Run service the events should be
     * sent to.
     * The value must conform to the definition of a URI path segment (section 3.3
     * of RFC2396). Examples: "/route", "route", "route/subroute".
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $path = '';
    /**
     * Required. The region the Cloud Run service is deployed in.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Required. The name of the Cloud Run service being addressed. See
     *           https://cloud.google.com/run/docs/reference/rest/v1/namespaces.services.
     *           Only services located in the same project as the trigger object
     *           can be addressed.
     *     @type string $path
     *           Optional. The relative path on the Cloud Run service the events should be
     *           sent to.
     *           The value must conform to the definition of a URI path segment (section 3.3
     *           of RFC2396). Examples: "/route", "route", "route/subroute".
     *     @type string $region
     *           Required. The region the Cloud Run service is deployed in.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Eventarc\V1\Trigger::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Cloud Run service being addressed. See
     * https://cloud.google.com/run/docs/reference/rest/v1/namespaces.services.
     * Only services located in the same project as the trigger object
     * can be addressed.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Required. The name of the Cloud Run service being addressed. See
     * https://cloud.google.com/run/docs/reference/rest/v1/namespaces.services.
     * Only services located in the same project as the trigger object
     * can be addressed.
     *
     * Generated from protobuf field <code>string service = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Optional. The relative path on the Cloud Run service the events should be
     * sent to.
     * The value must conform to the definition of a URI path segment (section 3.3
     * of RFC2396). Examples: "/route", "route", "route/subroute".
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Optional. The relative path on the Cloud Run service the events should be
     * sent to.
     * The value must conform to the definition of a URI path segment (section 3.3
     * of RFC2396). Examples: "/route", "route", "route/subroute".
     *
     * Generated from protobuf field <code>string path = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Required. The region the Cloud Run service is deployed in.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. The region the Cloud Run service is deployed in.
     *
     * Generated from protobuf field <code>string region = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

