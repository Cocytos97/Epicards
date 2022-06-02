<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace Google\Cloud\BigQuery\Storage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Estimated stream statistics for a given Stream.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1.StreamStats</code>
 */
class StreamStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents the progress of the current stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.StreamStats.Progress progress = 2;</code>
     */
    private $progress = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\BigQuery\Storage\V1\StreamStats\Progress $progress
     *           Represents the progress of the current stream.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents the progress of the current stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.StreamStats.Progress progress = 2;</code>
     * @return \Google\Cloud\BigQuery\Storage\V1\StreamStats\Progress|null
     */
    public function getProgress()
    {
        return isset($this->progress) ? $this->progress : null;
    }

    public function hasProgress()
    {
        return isset($this->progress);
    }

    public function clearProgress()
    {
        unset($this->progress);
    }

    /**
     * Represents the progress of the current stream.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1.StreamStats.Progress progress = 2;</code>
     * @param \Google\Cloud\BigQuery\Storage\V1\StreamStats\Progress $var
     * @return $this
     */
    public function setProgress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\BigQuery\Storage\V1\StreamStats\Progress::class);
        $this->progress = $var;

        return $this;
    }

}

