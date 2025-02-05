<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace GPBMetadata\Google\Cloud\Retail\V2;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
#google/cloud/retail/v2/common.protogoogle.cloud.retail.v2google/protobuf/timestamp.proto"/
Audience
genders (	

age_groups (	"3
	ColorInfo
color_families (	
colors (	"~
CustomAttribute
text (	
numbers (

searchable (H �
	indexable (H�B
_searchableB

_indexable"2
FulfillmentInfo
type (	
	place_ids (	"8
Image
uri (	B�A
height (
width ("x
Interval
minimum (H 
exclusive_minimum (H 
maximum (H
exclusive_maximum (HB
minB
max"�
	PriceInfo
currency_code (	
price (
original_price (
cost (8
price_effective_time (2.google.protobuf.Timestamp5
price_expire_time (2.google.protobuf.TimestampF
price_range (2,.google.cloud.retail.v2.PriceInfo.PriceRangeB�Aw

PriceRange/
price (2 .google.cloud.retail.v2.Interval8
original_price (2 .google.cloud.retail.v2.Interval"P
Rating
rating_count (
average_rating (
rating_histogram ("`
UserInfo
user_id (	

ip_address (	

user_agent (	
direct_user_request ("�
LocalInventory
place_id (	5

price_info (2!.google.cloud.retail.v2.PriceInfoJ

attributes (26.google.cloud.retail.v2.LocalInventory.AttributesEntry
fulfillment_types (	B�AZ
AttributesEntry
key (	6
value (2\'.google.cloud.retail.v2.CustomAttribute:8B�
com.google.cloud.retail.v2BCommonProtoPZ<google.golang.org/genproto/googleapis/cloud/retail/v2;retail�RETAIL�Google.Cloud.Retail.V2�Google\\Cloud\\Retail\\V2�Google::Cloud::Retail::V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

