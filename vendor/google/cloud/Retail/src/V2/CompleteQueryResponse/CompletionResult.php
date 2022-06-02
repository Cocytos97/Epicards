<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/completion_service.proto

namespace Google\Cloud\Retail\V2\CompleteQueryResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents completion results.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.CompleteQueryResponse.CompletionResult</code>
 */
class CompletionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     */
    private $suggestion = '';
    /**
     * Custom attributes for the suggestion term.
     * * For "user-data", the attributes are additional custom attributes
     * ingested through BigQuery.
     * * For "cloud-retail", the attributes are product attributes generated
     * by Cloud Retail.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.retail.v2.CustomAttribute> attributes = 2;</code>
     */
    private $attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $suggestion
     *           The suggestion for the query.
     *     @type array|\Google\Protobuf\Internal\MapField $attributes
     *           Custom attributes for the suggestion term.
     *           * For "user-data", the attributes are additional custom attributes
     *           ingested through BigQuery.
     *           * For "cloud-retail", the attributes are product attributes generated
     *           by Cloud Retail.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\CompletionService::initOnce();
        parent::__construct($data);
    }

    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     * @return string
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * The suggestion for the query.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSuggestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->suggestion = $var;

        return $this;
    }

    /**
     * Custom attributes for the suggestion term.
     * * For "user-data", the attributes are additional custom attributes
     * ingested through BigQuery.
     * * For "cloud-retail", the attributes are product attributes generated
     * by Cloud Retail.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.retail.v2.CustomAttribute> attributes = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Custom attributes for the suggestion term.
     * * For "user-data", the attributes are additional custom attributes
     * ingested through BigQuery.
     * * For "cloud-retail", the attributes are product attributes generated
     * by Cloud Retail.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.retail.v2.CustomAttribute> attributes = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Retail\V2\CustomAttribute::class);
        $this->attributes = $arr;

        return $this;
    }

}


