<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListOffers.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListOffersRequest</code>
 */
class ListOffersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the reseller account from which to list Offers.
     * Parent uses the format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 500 Offers.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A token for a page of results other than the first page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. The expression to filter results by name (name of
     * the Offer), sku.name (name of the SKU), or sku.product.name (name of the
     * Product).
     * Example 1: sku.product.name=products/p1 AND sku.name!=products/p1/skus/s1
     * Example 2: name=accounts/a1/offers/o1
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $filter = '';
    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the reseller account from which to list Offers.
     *           Parent uses the format: accounts/{account_id}.
     *     @type int $page_size
     *           Optional. Requested page size. Server might return fewer results than requested.
     *           If unspecified, returns at most 500 Offers.
     *           The maximum value is 1000; the server will coerce values above 1000.
     *     @type string $page_token
     *           Optional. A token for a page of results other than the first page.
     *     @type string $filter
     *           Optional. The expression to filter results by name (name of
     *           the Offer), sku.name (name of the SKU), or sku.product.name (name of the
     *           Product).
     *           Example 1: sku.product.name=products/p1 AND sku.name!=products/p1/skus/s1
     *           Example 2: name=accounts/a1/offers/o1
     *     @type string $language_code
     *           Optional. The BCP-47 language code. For example, "en-US". The
     *           response will localize in the corresponding language code, if specified.
     *           The default value is "en-US".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the reseller account from which to list Offers.
     * Parent uses the format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the reseller account from which to list Offers.
     * Parent uses the format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 500 Offers.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 500 Offers.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token for a page of results other than the first page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token for a page of results other than the first page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The expression to filter results by name (name of
     * the Offer), sku.name (name of the SKU), or sku.product.name (name of the
     * Product).
     * Example 1: sku.product.name=products/p1 AND sku.name!=products/p1/skus/s1
     * Example 2: name=accounts/a1/offers/o1
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. The expression to filter results by name (name of
     * the Offer), sku.name (name of the SKU), or sku.product.name (name of the
     * Product).
     * Example 1: sku.product.name=products/p1 AND sku.name!=products/p1/skus/s1
     * Example 2: name=accounts/a1/offers/o1
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}

