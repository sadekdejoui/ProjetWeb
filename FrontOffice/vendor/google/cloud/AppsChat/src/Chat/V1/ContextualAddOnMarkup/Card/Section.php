<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/contextual_addon.proto

namespace Google\Apps\Chat\V1\ContextualAddOnMarkup\Card;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A section contains a collection of widgets that are rendered
 * (vertically) in the order that they are specified. Across all platforms,
 * cards have a narrow fixed width, so
 * there's currently no need for layout properties (for example, float).
 *
 * Generated from protobuf message <code>google.chat.v1.ContextualAddOnMarkup.Card.Section</code>
 */
class Section extends \Google\Protobuf\Internal\Message
{
    /**
     * The header of the section. Formatted text is
     * supported. For more information
     * about formatting text, see
     * [Formatting text in Google Chat
     * apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     * and
     * [Formatting
     * text in Google Workspace
     * Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *
     * Generated from protobuf field <code>string header = 1;</code>
     */
    protected $header = '';
    /**
     * A section must contain at least one widget.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.WidgetMarkup widgets = 2;</code>
     */
    private $widgets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $header
     *           The header of the section. Formatted text is
     *           supported. For more information
     *           about formatting text, see
     *           [Formatting text in Google Chat
     *           apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     *           and
     *           [Formatting
     *           text in Google Workspace
     *           Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *     @type array<\Google\Apps\Chat\V1\WidgetMarkup>|\Google\Protobuf\Internal\RepeatedField $widgets
     *           A section must contain at least one widget.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chat\V1\ContextualAddon::initOnce();
        parent::__construct($data);
    }

    /**
     * The header of the section. Formatted text is
     * supported. For more information
     * about formatting text, see
     * [Formatting text in Google Chat
     * apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     * and
     * [Formatting
     * text in Google Workspace
     * Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *
     * Generated from protobuf field <code>string header = 1;</code>
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * The header of the section. Formatted text is
     * supported. For more information
     * about formatting text, see
     * [Formatting text in Google Chat
     * apps](https://developers.google.com/workspace/chat/format-messages#card-formatting)
     * and
     * [Formatting
     * text in Google Workspace
     * Add-ons](https://developers.google.com/apps-script/add-ons/concepts/widgets#text_formatting).
     *
     * Generated from protobuf field <code>string header = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->header = $var;

        return $this;
    }

    /**
     * A section must contain at least one widget.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.WidgetMarkup widgets = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWidgets()
    {
        return $this->widgets;
    }

    /**
     * A section must contain at least one widget.
     *
     * Generated from protobuf field <code>repeated .google.chat.v1.WidgetMarkup widgets = 2;</code>
     * @param array<\Google\Apps\Chat\V1\WidgetMarkup>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWidgets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Apps\Chat\V1\WidgetMarkup::class);
        $this->widgets = $arr;

        return $this;
    }

}


