<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/livestream/v1/resources.proto

namespace Google\Cloud\Video\LiveStream\V1\Event;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Inserts a new ad opportunity.
 *
 * Generated from protobuf message <code>google.cloud.video.livestream.v1.Event.AdBreakTask</code>
 */
class AdBreakTask extends \Google\Protobuf\Internal\Message
{
    /**
     * Duration of an ad opportunity. Must be greater than 0.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     */
    private $duration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $duration
     *           Duration of an ad opportunity. Must be greater than 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Livestream\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Duration of an ad opportunity. Must be greater than 0.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function hasDuration()
    {
        return isset($this->duration);
    }

    public function clearDuration()
    {
        unset($this->duration);
    }

    /**
     * Duration of an ad opportunity. Must be greater than 0.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration duration = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->duration = $var;

        return $this;
    }

}


