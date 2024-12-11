<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chat/v1/widgets.proto

namespace Google\Apps\Chat\V1\WidgetMarkup;

use UnexpectedValueException;

/**
 * The set of supported icons.
 *
 * Protobuf type <code>google.chat.v1.WidgetMarkup.Icon</code>
 */
class Icon
{
    /**
     * Generated from protobuf enum <code>ICON_UNSPECIFIED = 0;</code>
     */
    const ICON_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>AIRPLANE = 1;</code>
     */
    const AIRPLANE = 1;
    /**
     * Generated from protobuf enum <code>BOOKMARK = 26;</code>
     */
    const BOOKMARK = 26;
    /**
     * Generated from protobuf enum <code>BUS = 25;</code>
     */
    const BUS = 25;
    /**
     * Generated from protobuf enum <code>CAR = 9;</code>
     */
    const CAR = 9;
    /**
     * Generated from protobuf enum <code>CLOCK = 2;</code>
     */
    const CLOCK = 2;
    /**
     * Generated from protobuf enum <code>CONFIRMATION_NUMBER_ICON = 12;</code>
     */
    const CONFIRMATION_NUMBER_ICON = 12;
    /**
     * Generated from protobuf enum <code>DOLLAR = 14;</code>
     */
    const DOLLAR = 14;
    /**
     * Generated from protobuf enum <code>DESCRIPTION = 27;</code>
     */
    const DESCRIPTION = 27;
    /**
     * Generated from protobuf enum <code>EMAIL = 10;</code>
     */
    const EMAIL = 10;
    /**
     * Generated from protobuf enum <code>EVENT_PERFORMER = 20;</code>
     */
    const EVENT_PERFORMER = 20;
    /**
     * Generated from protobuf enum <code>EVENT_SEAT = 21;</code>
     */
    const EVENT_SEAT = 21;
    /**
     * Generated from protobuf enum <code>FLIGHT_ARRIVAL = 16;</code>
     */
    const FLIGHT_ARRIVAL = 16;
    /**
     * Generated from protobuf enum <code>FLIGHT_DEPARTURE = 15;</code>
     */
    const FLIGHT_DEPARTURE = 15;
    /**
     * Generated from protobuf enum <code>HOTEL = 6;</code>
     */
    const HOTEL = 6;
    /**
     * Generated from protobuf enum <code>HOTEL_ROOM_TYPE = 17;</code>
     */
    const HOTEL_ROOM_TYPE = 17;
    /**
     * Generated from protobuf enum <code>INVITE = 19;</code>
     */
    const INVITE = 19;
    /**
     * Generated from protobuf enum <code>MAP_PIN = 3;</code>
     */
    const MAP_PIN = 3;
    /**
     * Generated from protobuf enum <code>MEMBERSHIP = 24;</code>
     */
    const MEMBERSHIP = 24;
    /**
     * Generated from protobuf enum <code>MULTIPLE_PEOPLE = 18;</code>
     */
    const MULTIPLE_PEOPLE = 18;
    /**
     * Generated from protobuf enum <code>OFFER = 30;</code>
     */
    const OFFER = 30;
    /**
     * Generated from protobuf enum <code>PERSON = 11;</code>
     */
    const PERSON = 11;
    /**
     * Generated from protobuf enum <code>PHONE = 13;</code>
     */
    const PHONE = 13;
    /**
     * Generated from protobuf enum <code>RESTAURANT_ICON = 7;</code>
     */
    const RESTAURANT_ICON = 7;
    /**
     * Generated from protobuf enum <code>SHOPPING_CART = 8;</code>
     */
    const SHOPPING_CART = 8;
    /**
     * Generated from protobuf enum <code>STAR = 5;</code>
     */
    const STAR = 5;
    /**
     * Generated from protobuf enum <code>STORE = 22;</code>
     */
    const STORE = 22;
    /**
     * Generated from protobuf enum <code>TICKET = 4;</code>
     */
    const TICKET = 4;
    /**
     * Generated from protobuf enum <code>TRAIN = 23;</code>
     */
    const TRAIN = 23;
    /**
     * Generated from protobuf enum <code>VIDEO_CAMERA = 28;</code>
     */
    const VIDEO_CAMERA = 28;
    /**
     * Generated from protobuf enum <code>VIDEO_PLAY = 29;</code>
     */
    const VIDEO_PLAY = 29;

    private static $valueToName = [
        self::ICON_UNSPECIFIED => 'ICON_UNSPECIFIED',
        self::AIRPLANE => 'AIRPLANE',
        self::BOOKMARK => 'BOOKMARK',
        self::BUS => 'BUS',
        self::CAR => 'CAR',
        self::CLOCK => 'CLOCK',
        self::CONFIRMATION_NUMBER_ICON => 'CONFIRMATION_NUMBER_ICON',
        self::DOLLAR => 'DOLLAR',
        self::DESCRIPTION => 'DESCRIPTION',
        self::EMAIL => 'EMAIL',
        self::EVENT_PERFORMER => 'EVENT_PERFORMER',
        self::EVENT_SEAT => 'EVENT_SEAT',
        self::FLIGHT_ARRIVAL => 'FLIGHT_ARRIVAL',
        self::FLIGHT_DEPARTURE => 'FLIGHT_DEPARTURE',
        self::HOTEL => 'HOTEL',
        self::HOTEL_ROOM_TYPE => 'HOTEL_ROOM_TYPE',
        self::INVITE => 'INVITE',
        self::MAP_PIN => 'MAP_PIN',
        self::MEMBERSHIP => 'MEMBERSHIP',
        self::MULTIPLE_PEOPLE => 'MULTIPLE_PEOPLE',
        self::OFFER => 'OFFER',
        self::PERSON => 'PERSON',
        self::PHONE => 'PHONE',
        self::RESTAURANT_ICON => 'RESTAURANT_ICON',
        self::SHOPPING_CART => 'SHOPPING_CART',
        self::STAR => 'STAR',
        self::STORE => 'STORE',
        self::TICKET => 'TICKET',
        self::TRAIN => 'TRAIN',
        self::VIDEO_CAMERA => 'VIDEO_CAMERA',
        self::VIDEO_PLAY => 'VIDEO_PLAY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


