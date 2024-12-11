<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/space_event.proto

namespace Google\Apps\Chat\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for listing space events.
 *
 * Generated from protobuf message <code>google.chat.v1.ListSpaceEventsRequest</code>
 */
class ListSpaceEventsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the [Google Chat
     * space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces)
     * where the events occurred.
     * Format: `spaces/{space}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of space events returned. The service might
     * return fewer than this value.
     * Negative values return an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous list space events call. Provide this
     * to retrieve the subsequent page.
     * When paginating, all other parameters provided to list space events must
     * match the call that provided the page token. Passing different values to
     * the other parameters might lead to unexpected results.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     */
    protected $page_token = '';
    /**
     * Required. A query filter.
     * You must specify at least one event type (`event_type`)
     * using the has `:` operator. To filter by multiple event types, use the `OR`
     * operator. Omit batch event types in your filter. The request automatically
     * returns any related batch events. For example, if you filter by new
     * reactions
     * (`google.workspace.chat.reaction.v1.created`), the server also returns
     * batch new reactions events
     * (`google.workspace.chat.reaction.v1.batchCreated`). For a list of supported
     * event types, see the [`SpaceEvents` reference
     * documentation](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.spaceEvents#SpaceEvent.FIELDS.event_type).
     * Optionally, you can also filter by start time (`start_time`) and
     * end time (`end_time`):
     * * `start_time`: Exclusive timestamp from which to start listing space
     * events.
     *  You can list events that occurred up to 28 days ago. If unspecified, lists
     *  space events from the past 28 days.
     * * `end_time`: Inclusive timestamp until which space events are listed.
     *  If unspecified, lists events up to the time of the request.
     * To specify a start or end time, use the equals `=` operator and format in
     * [RFC-3339](https://www.rfc-editor.org/rfc/rfc3339). To filter by both
     * `start_time` and `end_time`, use the `AND` operator.
     * For example, the following queries are valid:
     * ```
     * start_time="2023-08-23T19:20:33+00:00" AND
     * end_time="2023-08-23T19:21:54+00:00"
     * ```
     * ```
     * start_time="2023-08-23T19:20:33+00:00" AND
     * (event_types:"google.workspace.chat.space.v1.updated" OR
     * event_types:"google.workspace.chat.message.v1.created")
     * ```
     * The following queries are invalid:
     * ```
     * start_time="2023-08-23T19:20:33+00:00" OR
     * end_time="2023-08-23T19:21:54+00:00"
     * ```
     * ```
     * event_types:"google.workspace.chat.space.v1.updated" AND
     * event_types:"google.workspace.chat.message.v1.created"
     * ```
     * Invalid queries are rejected by the server with an `INVALID_ARGUMENT`
     * error.
     *
     * Generated from protobuf field <code>string filter = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $filter = '';

    /**
     * @param string $parent Required. Resource name of the [Google Chat
     *                       space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces)
     *                       where the events occurred.
     *
     *                       Format: `spaces/{space}`. Please see
     *                       {@see ChatServiceClient::spaceName()} for help formatting this field.
     * @param string $filter Required. A query filter.
     *
     *                       You must specify at least one event type (`event_type`)
     *                       using the has `:` operator. To filter by multiple event types, use the `OR`
     *                       operator. Omit batch event types in your filter. The request automatically
     *                       returns any related batch events. For example, if you filter by new
     *                       reactions
     *                       (`google.workspace.chat.reaction.v1.created`), the server also returns
     *                       batch new reactions events
     *                       (`google.workspace.chat.reaction.v1.batchCreated`). For a list of supported
     *                       event types, see the [`SpaceEvents` reference
     *                       documentation](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.spaceEvents#SpaceEvent.FIELDS.event_type).
     *
     *                       Optionally, you can also filter by start time (`start_time`) and
     *                       end time (`end_time`):
     *
     *                       * `start_time`: Exclusive timestamp from which to start listing space
     *                       events.
     *                       You can list events that occurred up to 28 days ago. If unspecified, lists
     *                       space events from the past 28 days.
     *                       * `end_time`: Inclusive timestamp until which space events are listed.
     *                       If unspecified, lists events up to the time of the request.
     *
     *                       To specify a start or end time, use the equals `=` operator and format in
     *                       [RFC-3339](https://www.rfc-editor.org/rfc/rfc3339). To filter by both
     *                       `start_time` and `end_time`, use the `AND` operator.
     *
     *                       For example, the following queries are valid:
     *
     *                       ```
     *                       start_time="2023-08-23T19:20:33+00:00" AND
     *                       end_time="2023-08-23T19:21:54+00:00"
     *                       ```
     *                       ```
     *                       start_time="2023-08-23T19:20:33+00:00" AND
     *                       (event_types:"google.workspace.chat.space.v1.updated" OR
     *                       event_types:"google.workspace.chat.message.v1.created")
     *                       ```
     *
     *                       The following queries are invalid:
     *
     *                       ```
     *                       start_time="2023-08-23T19:20:33+00:00" OR
     *                       end_time="2023-08-23T19:21:54+00:00"
     *                       ```
     *                       ```
     *                       event_types:"google.workspace.chat.space.v1.updated" AND
     *                       event_types:"google.workspace.chat.message.v1.created"
     *                       ```
     *
     *                       Invalid queries are rejected by the server with an `INVALID_ARGUMENT`
     *                       error.
     *
     * @return \Google\Apps\Chat\V1\ListSpaceEventsRequest
     *
     * @experimental
     */
    public static function build(string $parent, string $filter): self
    {
        return (new self())
            ->setParent($parent)
            ->setFilter($filter);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the [Google Chat
     *           space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces)
     *           where the events occurred.
     *           Format: `spaces/{space}`.
     *     @type int $page_size
     *           Optional. The maximum number of space events returned. The service might
     *           return fewer than this value.
     *           Negative values return an `INVALID_ARGUMENT` error.
     *     @type string $page_token
     *           A page token, received from a previous list space events call. Provide this
     *           to retrieve the subsequent page.
     *           When paginating, all other parameters provided to list space events must
     *           match the call that provided the page token. Passing different values to
     *           the other parameters might lead to unexpected results.
     *     @type string $filter
     *           Required. A query filter.
     *           You must specify at least one event type (`event_type`)
     *           using the has `:` operator. To filter by multiple event types, use the `OR`
     *           operator. Omit batch event types in your filter. The request automatically
     *           returns any related batch events. For example, if you filter by new
     *           reactions
     *           (`google.workspace.chat.reaction.v1.created`), the server also returns
     *           batch new reactions events
     *           (`google.workspace.chat.reaction.v1.batchCreated`). For a list of supported
     *           event types, see the [`SpaceEvents` reference
     *           documentation](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.spaceEvents#SpaceEvent.FIELDS.event_type).
     *           Optionally, you can also filter by start time (`start_time`) and
     *           end time (`end_time`):
     *           * `start_time`: Exclusive timestamp from which to start listing space
     *           events.
     *            You can list events that occurred up to 28 days ago. If unspecified, lists
     *            space events from the past 28 days.
     *           * `end_time`: Inclusive timestamp until which space events are listed.
     *            If unspecified, lists events up to the time of the request.
     *           To specify a start or end time, use the equals `=` operator and format in
     *           [RFC-3339](https://www.rfc-editor.org/rfc/rfc3339). To filter by both
     *           `start_time` and `end_time`, use the `AND` operator.
     *           For example, the following queries are valid:
     *           ```
     *           start_time="2023-08-23T19:20:33+00:00" AND
     *           end_time="2023-08-23T19:21:54+00:00"
     *           ```
     *           ```
     *           start_time="2023-08-23T19:20:33+00:00" AND
     *           (event_types:"google.workspace.chat.space.v1.updated" OR
     *           event_types:"google.workspace.chat.message.v1.created")
     *           ```
     *           The following queries are invalid:
     *           ```
     *           start_time="2023-08-23T19:20:33+00:00" OR
     *           end_time="2023-08-23T19:21:54+00:00"
     *           ```
     *           ```
     *           event_types:"google.workspace.chat.space.v1.updated" AND
     *           event_types:"google.workspace.chat.message.v1.created"
     *           ```
     *           Invalid queries are rejected by the server with an `INVALID_ARGUMENT`
     *           error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\SpaceEvent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the [Google Chat
     * space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces)
     * where the events occurred.
     * Format: `spaces/{space}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the [Google Chat
     * space](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces)
     * where the events occurred.
     * Format: `spaces/{space}`.
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
     * Optional. The maximum number of space events returned. The service might
     * return fewer than this value.
     * Negative values return an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of space events returned. The service might
     * return fewer than this value.
     * Negative values return an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>int32 page_size = 5;</code>
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
     * A page token, received from a previous list space events call. Provide this
     * to retrieve the subsequent page.
     * When paginating, all other parameters provided to list space events must
     * match the call that provided the page token. Passing different values to
     * the other parameters might lead to unexpected results.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous list space events call. Provide this
     * to retrieve the subsequent page.
     * When paginating, all other parameters provided to list space events must
     * match the call that provided the page token. Passing different values to
     * the other parameters might lead to unexpected results.
     *
     * Generated from protobuf field <code>string page_token = 6;</code>
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
     * Required. A query filter.
     * You must specify at least one event type (`event_type`)
     * using the has `:` operator. To filter by multiple event types, use the `OR`
     * operator. Omit batch event types in your filter. The request automatically
     * returns any related batch events. For example, if you filter by new
     * reactions
     * (`google.workspace.chat.reaction.v1.created`), the server also returns
     * batch new reactions events
     * (`google.workspace.chat.reaction.v1.batchCreated`). For a list of supported
     * event types, see the [`SpaceEvents` reference
     * documentation](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.spaceEvents#SpaceEvent.FIELDS.event_type).
     * Optionally, you can also filter by start time (`start_time`) and
     * end time (`end_time`):
     * * `start_time`: Exclusive timestamp from which to start listing space
     * events.
     *  You can list events that occurred up to 28 days ago. If unspecified, lists
     *  space events from the past 28 days.
     * * `end_time`: Inclusive timestamp until which space events are listed.
     *  If unspecified, lists events up to the time of the request.
     * To specify a start or end time, use the equals `=` operator and format in
     * [RFC-3339](https://www.rfc-editor.org/rfc/rfc3339). To filter by both
     * `start_time` and `end_time`, use the `AND` operator.
     * For example, the following queries are valid:
     * ```
     * start_time="2023-08-23T19:20:33+00:00" AND
     * end_time="2023-08-23T19:21:54+00:00"
     * ```
     * ```
     * start_time="2023-08-23T19:20:33+00:00" AND
     * (event_types:"google.workspace.chat.space.v1.updated" OR
     * event_types:"google.workspace.chat.message.v1.created")
     * ```
     * The following queries are invalid:
     * ```
     * start_time="2023-08-23T19:20:33+00:00" OR
     * end_time="2023-08-23T19:21:54+00:00"
     * ```
     * ```
     * event_types:"google.workspace.chat.space.v1.updated" AND
     * event_types:"google.workspace.chat.message.v1.created"
     * ```
     * Invalid queries are rejected by the server with an `INVALID_ARGUMENT`
     * error.
     *
     * Generated from protobuf field <code>string filter = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. A query filter.
     * You must specify at least one event type (`event_type`)
     * using the has `:` operator. To filter by multiple event types, use the `OR`
     * operator. Omit batch event types in your filter. The request automatically
     * returns any related batch events. For example, if you filter by new
     * reactions
     * (`google.workspace.chat.reaction.v1.created`), the server also returns
     * batch new reactions events
     * (`google.workspace.chat.reaction.v1.batchCreated`). For a list of supported
     * event types, see the [`SpaceEvents` reference
     * documentation](https://developers.google.com/workspace/chat/api/reference/rest/v1/spaces.spaceEvents#SpaceEvent.FIELDS.event_type).
     * Optionally, you can also filter by start time (`start_time`) and
     * end time (`end_time`):
     * * `start_time`: Exclusive timestamp from which to start listing space
     * events.
     *  You can list events that occurred up to 28 days ago. If unspecified, lists
     *  space events from the past 28 days.
     * * `end_time`: Inclusive timestamp until which space events are listed.
     *  If unspecified, lists events up to the time of the request.
     * To specify a start or end time, use the equals `=` operator and format in
     * [RFC-3339](https://www.rfc-editor.org/rfc/rfc3339). To filter by both
     * `start_time` and `end_time`, use the `AND` operator.
     * For example, the following queries are valid:
     * ```
     * start_time="2023-08-23T19:20:33+00:00" AND
     * end_time="2023-08-23T19:21:54+00:00"
     * ```
     * ```
     * start_time="2023-08-23T19:20:33+00:00" AND
     * (event_types:"google.workspace.chat.space.v1.updated" OR
     * event_types:"google.workspace.chat.message.v1.created")
     * ```
     * The following queries are invalid:
     * ```
     * start_time="2023-08-23T19:20:33+00:00" OR
     * end_time="2023-08-23T19:21:54+00:00"
     * ```
     * ```
     * event_types:"google.workspace.chat.space.v1.updated" AND
     * event_types:"google.workspace.chat.message.v1.created"
     * ```
     * Invalid queries are rejected by the server with an `INVALID_ARGUMENT`
     * error.
     *
     * Generated from protobuf field <code>string filter = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

