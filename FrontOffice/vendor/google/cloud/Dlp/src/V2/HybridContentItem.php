<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An individual hybrid item to inspect. Will be stored temporarily during
 * processing.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.HybridContentItem</code>
 */
class HybridContentItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 1;</code>
     */
    protected $item = null;
    /**
     * Supplementary information that will be added to each finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.HybridFindingDetails finding_details = 2;</code>
     */
    protected $finding_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dlp\V2\ContentItem $item
     *           The item to inspect.
     *     @type \Google\Cloud\Dlp\V2\HybridFindingDetails $finding_details
     *           Supplementary information that will be added to each finding.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 1;</code>
     * @return \Google\Cloud\Dlp\V2\ContentItem|null
     */
    public function getItem()
    {
        return $this->item;
    }

    public function hasItem()
    {
        return isset($this->item);
    }

    public function clearItem()
    {
        unset($this->item);
    }

    /**
     * The item to inspect.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.ContentItem item = 1;</code>
     * @param \Google\Cloud\Dlp\V2\ContentItem $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\ContentItem::class);
        $this->item = $var;

        return $this;
    }

    /**
     * Supplementary information that will be added to each finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.HybridFindingDetails finding_details = 2;</code>
     * @return \Google\Cloud\Dlp\V2\HybridFindingDetails|null
     */
    public function getFindingDetails()
    {
        return $this->finding_details;
    }

    public function hasFindingDetails()
    {
        return isset($this->finding_details);
    }

    public function clearFindingDetails()
    {
        unset($this->finding_details);
    }

    /**
     * Supplementary information that will be added to each finding.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.HybridFindingDetails finding_details = 2;</code>
     * @param \Google\Cloud\Dlp\V2\HybridFindingDetails $var
     * @return $this
     */
    public function setFindingDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\HybridFindingDetails::class);
        $this->finding_details = $var;

        return $this;
    }

}

