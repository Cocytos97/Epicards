<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/featurestore_online_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container for list of values.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.FeatureValueList</code>
 */
class FeatureValueList extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of feature values. All of them should be the same data type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureValue values = 1;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\FeatureValue[]|\Google\Protobuf\Internal\RepeatedField $values
     *           A list of feature values. All of them should be the same data type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\FeaturestoreOnlineService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of feature values. All of them should be the same data type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureValue values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * A list of feature values. All of them should be the same data type.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.FeatureValue values = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\FeatureValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\FeatureValue::class);
        $this->values = $arr;

        return $this;
    }

}

