<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/discoveryengine/v1/chunk.proto

namespace Google\Cloud\DiscoveryEngine\V1\Chunk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata of the current chunk. This field is only populated on
 * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
 * API.
 *
 * Generated from protobuf message <code>google.cloud.discoveryengine.v1.Chunk.ChunkMetadata</code>
 */
class ChunkMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The previous chunks of the current chunk. The number is controlled by
     * [SearchRequest.ContentSearchSpec.ChunkSpec.num_previous_chunks][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ChunkSpec.num_previous_chunks].
     * This field is only populated on
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Chunk previous_chunks = 1;</code>
     */
    private $previous_chunks;
    /**
     * The next chunks of the current chunk. The number is controlled by
     * [SearchRequest.ContentSearchSpec.ChunkSpec.num_next_chunks][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ChunkSpec.num_next_chunks].
     * This field is only populated on
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Chunk next_chunks = 2;</code>
     */
    private $next_chunks;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Chunk>|\Google\Protobuf\Internal\RepeatedField $previous_chunks
     *           The previous chunks of the current chunk. The number is controlled by
     *           [SearchRequest.ContentSearchSpec.ChunkSpec.num_previous_chunks][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ChunkSpec.num_previous_chunks].
     *           This field is only populated on
     *           [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     *           API.
     *     @type array<\Google\Cloud\DiscoveryEngine\V1\Chunk>|\Google\Protobuf\Internal\RepeatedField $next_chunks
     *           The next chunks of the current chunk. The number is controlled by
     *           [SearchRequest.ContentSearchSpec.ChunkSpec.num_next_chunks][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ChunkSpec.num_next_chunks].
     *           This field is only populated on
     *           [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     *           API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Discoveryengine\V1\Chunk::initOnce();
        parent::__construct($data);
    }

    /**
     * The previous chunks of the current chunk. The number is controlled by
     * [SearchRequest.ContentSearchSpec.ChunkSpec.num_previous_chunks][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ChunkSpec.num_previous_chunks].
     * This field is only populated on
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Chunk previous_chunks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPreviousChunks()
    {
        return $this->previous_chunks;
    }

    /**
     * The previous chunks of the current chunk. The number is controlled by
     * [SearchRequest.ContentSearchSpec.ChunkSpec.num_previous_chunks][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ChunkSpec.num_previous_chunks].
     * This field is only populated on
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Chunk previous_chunks = 1;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Chunk>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPreviousChunks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Chunk::class);
        $this->previous_chunks = $arr;

        return $this;
    }

    /**
     * The next chunks of the current chunk. The number is controlled by
     * [SearchRequest.ContentSearchSpec.ChunkSpec.num_next_chunks][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ChunkSpec.num_next_chunks].
     * This field is only populated on
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Chunk next_chunks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNextChunks()
    {
        return $this->next_chunks;
    }

    /**
     * The next chunks of the current chunk. The number is controlled by
     * [SearchRequest.ContentSearchSpec.ChunkSpec.num_next_chunks][google.cloud.discoveryengine.v1.SearchRequest.ContentSearchSpec.ChunkSpec.num_next_chunks].
     * This field is only populated on
     * [SearchService.Search][google.cloud.discoveryengine.v1.SearchService.Search]
     * API.
     *
     * Generated from protobuf field <code>repeated .google.cloud.discoveryengine.v1.Chunk next_chunks = 2;</code>
     * @param array<\Google\Cloud\DiscoveryEngine\V1\Chunk>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNextChunks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DiscoveryEngine\V1\Chunk::class);
        $this->next_chunks = $arr;

        return $this;
    }

}


