<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Person detection annotation per video.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.PersonDetectionAnnotation</code>
 */
class PersonDetectionAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * The detected tracks of a person.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.Track tracks = 1;</code>
     */
    private $tracks;
    /**
     * Feature version.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    protected $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\VideoIntelligence\V1\Track>|\Google\Protobuf\Internal\RepeatedField $tracks
     *           The detected tracks of a person.
     *     @type string $version
     *           Feature version.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * The detected tracks of a person.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.Track tracks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * The detected tracks of a person.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.Track tracks = 1;</code>
     * @param array<\Google\Cloud\VideoIntelligence\V1\Track>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTracks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\Track::class);
        $this->tracks = $arr;

        return $this;
    }

    /**
     * Feature version.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Feature version.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}

