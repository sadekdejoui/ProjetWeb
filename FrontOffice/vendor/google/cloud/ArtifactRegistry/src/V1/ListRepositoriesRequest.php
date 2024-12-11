<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1/repository.proto

namespace Google\Cloud\ArtifactRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to list repositories.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1.ListRepositoriesRequest</code>
 */
class ListRepositoriesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent resource whose repositories will be
     * listed.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The maximum number of repositories to return. Maximum page size is 1,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    protected $page_size = 0;
    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';
    /**
     * Optional. An expression for filtering the results of the request. Filter
     * rules are case insensitive. The fields eligible for filtering are:
     *   * `name`
     *  Examples of using a filter:
     * To filter the results of your request to repositories with the name
     * `my-repo` in project `my-project` in the `us-central` region, append the
     * following filter expression to your request:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo"`
     *  You can also use wildcards to match any number of characters before or
     *  after the value:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-*"`
     *   * `name="projects/my-project/locations/us-central1/repositories/&#42;repo"`
     *   * `name="projects/my-project/locations/us-central1/repositories/&#42;repo*"`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $filter = '';
    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $order_by = '';

    /**
     * @param string $parent Required. The name of the parent resource whose repositories will be
     *                       listed. Please see
     *                       {@see ArtifactRegistryClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ArtifactRegistry\V1\ListRepositoriesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent resource whose repositories will be
     *           listed.
     *     @type int $page_size
     *           The maximum number of repositories to return. Maximum page size is 1,000.
     *     @type string $page_token
     *           The next_page_token value returned from a previous list request, if any.
     *     @type string $filter
     *           Optional. An expression for filtering the results of the request. Filter
     *           rules are case insensitive. The fields eligible for filtering are:
     *             * `name`
     *            Examples of using a filter:
     *           To filter the results of your request to repositories with the name
     *           `my-repo` in project `my-project` in the `us-central` region, append the
     *           following filter expression to your request:
     *             * `name="projects/my-project/locations/us-central1/repositories/my-repo"`
     *            You can also use wildcards to match any number of characters before or
     *            after the value:
     *             * `name="projects/my-project/locations/us-central1/repositories/my-*"`
     *             * `name="projects/my-project/locations/us-central1/repositories/&#42;repo"`
     *             * `name="projects/my-project/locations/us-central1/repositories/&#42;repo*"`
     *     @type string $order_by
     *           Optional. The field to order the results by.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1\Repository::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent resource whose repositories will be
     * listed.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent resource whose repositories will be
     * listed.
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
     * The maximum number of repositories to return. Maximum page size is 1,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of repositories to return. Maximum page size is 1,000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The next_page_token value returned from a previous list request, if any.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. An expression for filtering the results of the request. Filter
     * rules are case insensitive. The fields eligible for filtering are:
     *   * `name`
     *  Examples of using a filter:
     * To filter the results of your request to repositories with the name
     * `my-repo` in project `my-project` in the `us-central` region, append the
     * following filter expression to your request:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo"`
     *  You can also use wildcards to match any number of characters before or
     *  after the value:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-*"`
     *   * `name="projects/my-project/locations/us-central1/repositories/&#42;repo"`
     *   * `name="projects/my-project/locations/us-central1/repositories/&#42;repo*"`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. An expression for filtering the results of the request. Filter
     * rules are case insensitive. The fields eligible for filtering are:
     *   * `name`
     *  Examples of using a filter:
     * To filter the results of your request to repositories with the name
     * `my-repo` in project `my-project` in the `us-central` region, append the
     * following filter expression to your request:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-repo"`
     *  You can also use wildcards to match any number of characters before or
     *  after the value:
     *   * `name="projects/my-project/locations/us-central1/repositories/my-*"`
     *   * `name="projects/my-project/locations/us-central1/repositories/&#42;repo"`
     *   * `name="projects/my-project/locations/us-central1/repositories/&#42;repo*"`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional. The field to order the results by.
     *
     * Generated from protobuf field <code>string order_by = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

