<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/outputs.proto

namespace Google\Cloud\Video\LiveStream\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Sprite sheet configuration.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.SpriteSheet</code>
 */
class SpriteSheet extends \Google\Protobuf\Internal\Message
{
    /**
     * Format type. The default is `jpeg`.
     * Supported formats:
     * - `jpeg`
     *
     * Generated from protobuf field <code>string format = 1;</code>
     */
    protected $format = '';
    /**
     * Required. File name prefix for the generated sprite sheets. If multiple
     * sprite sheets are added to the channel, each must have a unique file
     * prefix.
     * Each sprite sheet has an incremental 10-digit zero-padded suffix starting
     * from 0 before the extension, such as `sprite_sheet0000000123.jpeg`.
     *
     * Generated from protobuf field <code>string file_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $file_prefix = '';
    /**
     * Required. The width of the sprite in pixels. Must be an even integer.
     *
     * Generated from protobuf field <code>int32 sprite_width_pixels = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $sprite_width_pixels = 0;
    /**
     * Required. The height of the sprite in pixels. Must be an even integer.
     *
     * Generated from protobuf field <code>int32 sprite_height_pixels = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $sprite_height_pixels = 0;
    /**
     * The maximum number of sprites per row in a sprite sheet. Valid range is
     * [1, 10] and the default value is 1.
     *
     * Generated from protobuf field <code>int32 column_count = 5;</code>
     */
    protected $column_count = 0;
    /**
     * The maximum number of rows per sprite sheet. When the sprite sheet is full,
     * a new sprite sheet is created. Valid range is [1, 10] and the default value
     * is 1.
     *
     * Generated from protobuf field <code>int32 row_count = 6;</code>
     */
    protected $row_count = 0;
    /**
     * Create sprites at regular intervals. Valid range is [1 second, 1 hour] and
     * the default value is `10s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration interval = 7;</code>
     */
    protected $interval = null;
    /**
     * The quality of the generated sprite sheet. Enter a value between 1
     * and 100, where 1 is the lowest quality and 100 is the highest quality.
     * The default is 100. A high quality value corresponds to a low image data
     * compression ratio.
     *
     * Generated from protobuf field <code>int32 quality = 8;</code>
     */
    protected $quality = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $format
     *           Format type. The default is `jpeg`.
     *           Supported formats:
     *           - `jpeg`
     *     @type string $file_prefix
     *           Required. File name prefix for the generated sprite sheets. If multiple
     *           sprite sheets are added to the channel, each must have a unique file
     *           prefix.
     *           Each sprite sheet has an incremental 10-digit zero-padded suffix starting
     *           from 0 before the extension, such as `sprite_sheet0000000123.jpeg`.
     *     @type int $sprite_width_pixels
     *           Required. The width of the sprite in pixels. Must be an even integer.
     *     @type int $sprite_height_pixels
     *           Required. The height of the sprite in pixels. Must be an even integer.
     *     @type int $column_count
     *           The maximum number of sprites per row in a sprite sheet. Valid range is
     *           [1, 10] and the default value is 1.
     *     @type int $row_count
     *           The maximum number of rows per sprite sheet. When the sprite sheet is full,
     *           a new sprite sheet is created. Valid range is [1, 10] and the default value
     *           is 1.
     *     @type \Google\Protobuf\Duration $interval
     *           Create sprites at regular intervals. Valid range is [1 second, 1 hour] and
     *           the default value is `10s`.
     *     @type int $quality
     *           The quality of the generated sprite sheet. Enter a value between 1
     *           and 100, where 1 is the lowest quality and 100 is the highest quality.
     *           The default is 100. A high quality value corresponds to a low image data
     *           compression ratio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Outputs::initOnce();
        parent::__construct($data);
    }

    /**
     * Format type. The default is `jpeg`.
     * Supported formats:
     * - `jpeg`
     *
     * Generated from protobuf field <code>string format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Format type. The default is `jpeg`.
     * Supported formats:
     * - `jpeg`
     *
     * Generated from protobuf field <code>string format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;

        return $this;
    }

    /**
     * Required. File name prefix for the generated sprite sheets. If multiple
     * sprite sheets are added to the channel, each must have a unique file
     * prefix.
     * Each sprite sheet has an incremental 10-digit zero-padded suffix starting
     * from 0 before the extension, such as `sprite_sheet0000000123.jpeg`.
     *
     * Generated from protobuf field <code>string file_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilePrefix()
    {
        return $this->file_prefix;
    }

    /**
     * Required. File name prefix for the generated sprite sheets. If multiple
     * sprite sheets are added to the channel, each must have a unique file
     * prefix.
     * Each sprite sheet has an incremental 10-digit zero-padded suffix starting
     * from 0 before the extension, such as `sprite_sheet0000000123.jpeg`.
     *
     * Generated from protobuf field <code>string file_prefix = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilePrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_prefix = $var;

        return $this;
    }

    /**
     * Required. The width of the sprite in pixels. Must be an even integer.
     *
     * Generated from protobuf field <code>int32 sprite_width_pixels = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getSpriteWidthPixels()
    {
        return $this->sprite_width_pixels;
    }

    /**
     * Required. The width of the sprite in pixels. Must be an even integer.
     *
     * Generated from protobuf field <code>int32 sprite_width_pixels = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setSpriteWidthPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->sprite_width_pixels = $var;

        return $this;
    }

    /**
     * Required. The height of the sprite in pixels. Must be an even integer.
     *
     * Generated from protobuf field <code>int32 sprite_height_pixels = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getSpriteHeightPixels()
    {
        return $this->sprite_height_pixels;
    }

    /**
     * Required. The height of the sprite in pixels. Must be an even integer.
     *
     * Generated from protobuf field <code>int32 sprite_height_pixels = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setSpriteHeightPixels($var)
    {
        GPBUtil::checkInt32($var);
        $this->sprite_height_pixels = $var;

        return $this;
    }

    /**
     * The maximum number of sprites per row in a sprite sheet. Valid range is
     * [1, 10] and the default value is 1.
     *
     * Generated from protobuf field <code>int32 column_count = 5;</code>
     * @return int
     */
    public function getColumnCount()
    {
        return $this->column_count;
    }

    /**
     * The maximum number of sprites per row in a sprite sheet. Valid range is
     * [1, 10] and the default value is 1.
     *
     * Generated from protobuf field <code>int32 column_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setColumnCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->column_count = $var;

        return $this;
    }

    /**
     * The maximum number of rows per sprite sheet. When the sprite sheet is full,
     * a new sprite sheet is created. Valid range is [1, 10] and the default value
     * is 1.
     *
     * Generated from protobuf field <code>int32 row_count = 6;</code>
     * @return int
     */
    public function getRowCount()
    {
        return $this->row_count;
    }

    /**
     * The maximum number of rows per sprite sheet. When the sprite sheet is full,
     * a new sprite sheet is created. Valid range is [1, 10] and the default value
     * is 1.
     *
     * Generated from protobuf field <code>int32 row_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_count = $var;

        return $this;
    }

    /**
     * Create sprites at regular intervals. Valid range is [1 second, 1 hour] and
     * the default value is `10s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration interval = 7;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getInterval()
    {
        return $this->interval;
    }

    public function hasInterval()
    {
        return isset($this->interval);
    }

    public function clearInterval()
    {
        unset($this->interval);
    }

    /**
     * Create sprites at regular intervals. Valid range is [1 second, 1 hour] and
     * the default value is `10s`.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration interval = 7;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->interval = $var;

        return $this;
    }

    /**
     * The quality of the generated sprite sheet. Enter a value between 1
     * and 100, where 1 is the lowest quality and 100 is the highest quality.
     * The default is 100. A high quality value corresponds to a low image data
     * compression ratio.
     *
     * Generated from protobuf field <code>int32 quality = 8;</code>
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * The quality of the generated sprite sheet. Enter a value between 1
     * and 100, where 1 is the lowest quality and 100 is the highest quality.
     * The default is 100. A high quality value corresponds to a low image data
     * compression ratio.
     *
     * Generated from protobuf field <code>int32 quality = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setQuality($var)
    {
        GPBUtil::checkInt32($var);
        $this->quality = $var;

        return $this;
    }

}

