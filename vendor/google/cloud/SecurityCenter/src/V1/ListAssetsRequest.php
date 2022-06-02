<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for listing assets.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListAssetsRequest</code>
 */
class ListAssetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the organization assets should belong to. Its format is
     * "organizations/[organization_id], folders/[folder_id], or
     * projects/[project_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Expression that defines the filter to apply across assets.
     * The expression is a list of zero or more restrictions combined via logical
     * operators `AND` and `OR`.
     * Parentheses are supported, and `OR` has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a `-`
     * character in front of them to indicate negation. The fields map to those
     * defined in the Asset resource. Examples include:
     * * name
     * * security_center_properties.resource_name
     * * resource_properties.a_property
     * * security_marks.marks.marka
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     * The following are the allowed field and operator combinations:
     * * name: `=`
     * * update_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `update_time = "2019-06-10T16:07:18-07:00"`
     *     `update_time = 1560208038000`
     * * create_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `create_time = "2019-06-10T16:07:18-07:00"`
     *     `create_time = 1560208038000`
     * * iam_policy.policy_blob: `=`, `:`
     * * resource_properties: `=`, `:`, `>`, `<`, `>=`, `<=`
     * * security_marks.marks: `=`, `:`
     * * security_center_properties.resource_name: `=`, `:`
     * * security_center_properties.resource_display_name: `=`, `:`
     * * security_center_properties.resource_type: `=`, `:`
     * * security_center_properties.resource_parent: `=`, `:`
     * * security_center_properties.resource_parent_display_name: `=`, `:`
     * * security_center_properties.resource_project: `=`, `:`
     * * security_center_properties.resource_project_display_name: `=`, `:`
     * * security_center_properties.resource_owners: `=`, `:`
     * For example, `resource_properties.size = 100` is a valid filter string.
     * Use a partial match on the empty string to filter based on a property
     * existing: `resource_properties.my_property : ""`
     * Use a negated partial match on the empty string to filter based on a
     * property not existing: `-resource_properties.my_property : ""`
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Expression that defines what fields and order to use for sorting. The
     * string value should follow SQL syntax: comma separated list of fields. For
     * example: "name,resource_properties.a_property". The default sorting order
     * is ascending. To specify descending order for a field, a suffix " desc"
     * should be appended to the field name. For example: "name
     * desc,resource_properties.a_property". Redundant space characters in the
     * syntax are insignificant. "name desc,resource_properties.a_property" and "
     * name     desc  ,   resource_properties.a_property  " are equivalent.
     * The following fields are supported:
     * name
     * update_time
     * resource_properties
     * security_marks.marks
     * security_center_properties.resource_name
     * security_center_properties.resource_display_name
     * security_center_properties.resource_parent
     * security_center_properties.resource_parent_display_name
     * security_center_properties.resource_project
     * security_center_properties.resource_project_display_name
     * security_center_properties.resource_type
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     */
    private $order_by = '';
    /**
     * Time used as a reference point when filtering assets. The filter is limited
     * to assets existing at the supplied time and their values are those at that
     * specific time. Absence of this field will default to the API's version of
     * NOW.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     */
    private $read_time = null;
    /**
     * When compare_duration is set, the ListAssetsResult's "state_change"
     * attribute is updated to indicate whether the asset was added, removed, or
     * remained present during the compare_duration period of time that precedes
     * the read_time. This is the time between (read_time - compare_duration) and
     * read_time.
     * The state_change value is derived based on the presence of the asset at the
     * two points in time. Intermediate state changes between the two times don't
     * affect the result. For example, the results aren't affected if the asset is
     * removed and re-created again.
     * Possible "state_change" values when compare_duration is specified:
     * * "ADDED":   indicates that the asset was not present at the start of
     *                compare_duration, but present at read_time.
     * * "REMOVED": indicates that the asset was present at the start of
     *                compare_duration, but not present at read_time.
     * * "ACTIVE":  indicates that the asset was present at both the
     *                start and the end of the time period defined by
     *                compare_duration and read_time.
     * If compare_duration is not specified, then the only possible state_change
     * is "UNUSED",  which will be the state_change set for all assets present at
     * read_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration compare_duration = 5;</code>
     */
    private $compare_duration = null;
    /**
     * A field mask to specify the ListAssetsResult fields to be listed in the
     * response.
     * An empty field mask will list all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 7;</code>
     */
    private $field_mask = null;
    /**
     * The value returned by the last `ListAssetsResponse`; indicates
     * that this is a continuation of a prior `ListAssets` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 8;</code>
     */
    private $page_token = '';
    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 9;</code>
     */
    private $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the organization assets should belong to. Its format is
     *           "organizations/[organization_id], folders/[folder_id], or
     *           projects/[project_id]".
     *     @type string $filter
     *           Expression that defines the filter to apply across assets.
     *           The expression is a list of zero or more restrictions combined via logical
     *           operators `AND` and `OR`.
     *           Parentheses are supported, and `OR` has higher precedence than `AND`.
     *           Restrictions have the form `<field> <operator> <value>` and may have a `-`
     *           character in front of them to indicate negation. The fields map to those
     *           defined in the Asset resource. Examples include:
     *           * name
     *           * security_center_properties.resource_name
     *           * resource_properties.a_property
     *           * security_marks.marks.marka
     *           The supported operators are:
     *           * `=` for all value types.
     *           * `>`, `<`, `>=`, `<=` for integer values.
     *           * `:`, meaning substring matching, for strings.
     *           The supported value types are:
     *           * string literals in quotes.
     *           * integer literals without quotes.
     *           * boolean literals `true` and `false` without quotes.
     *           The following are the allowed field and operator combinations:
     *           * name: `=`
     *           * update_time: `=`, `>`, `<`, `>=`, `<=`
     *             Usage: This should be milliseconds since epoch or an RFC3339 string.
     *             Examples:
     *               `update_time = "2019-06-10T16:07:18-07:00"`
     *               `update_time = 1560208038000`
     *           * create_time: `=`, `>`, `<`, `>=`, `<=`
     *             Usage: This should be milliseconds since epoch or an RFC3339 string.
     *             Examples:
     *               `create_time = "2019-06-10T16:07:18-07:00"`
     *               `create_time = 1560208038000`
     *           * iam_policy.policy_blob: `=`, `:`
     *           * resource_properties: `=`, `:`, `>`, `<`, `>=`, `<=`
     *           * security_marks.marks: `=`, `:`
     *           * security_center_properties.resource_name: `=`, `:`
     *           * security_center_properties.resource_display_name: `=`, `:`
     *           * security_center_properties.resource_type: `=`, `:`
     *           * security_center_properties.resource_parent: `=`, `:`
     *           * security_center_properties.resource_parent_display_name: `=`, `:`
     *           * security_center_properties.resource_project: `=`, `:`
     *           * security_center_properties.resource_project_display_name: `=`, `:`
     *           * security_center_properties.resource_owners: `=`, `:`
     *           For example, `resource_properties.size = 100` is a valid filter string.
     *           Use a partial match on the empty string to filter based on a property
     *           existing: `resource_properties.my_property : ""`
     *           Use a negated partial match on the empty string to filter based on a
     *           property not existing: `-resource_properties.my_property : ""`
     *     @type string $order_by
     *           Expression that defines what fields and order to use for sorting. The
     *           string value should follow SQL syntax: comma separated list of fields. For
     *           example: "name,resource_properties.a_property". The default sorting order
     *           is ascending. To specify descending order for a field, a suffix " desc"
     *           should be appended to the field name. For example: "name
     *           desc,resource_properties.a_property". Redundant space characters in the
     *           syntax are insignificant. "name desc,resource_properties.a_property" and "
     *           name     desc  ,   resource_properties.a_property  " are equivalent.
     *           The following fields are supported:
     *           name
     *           update_time
     *           resource_properties
     *           security_marks.marks
     *           security_center_properties.resource_name
     *           security_center_properties.resource_display_name
     *           security_center_properties.resource_parent
     *           security_center_properties.resource_parent_display_name
     *           security_center_properties.resource_project
     *           security_center_properties.resource_project_display_name
     *           security_center_properties.resource_type
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Time used as a reference point when filtering assets. The filter is limited
     *           to assets existing at the supplied time and their values are those at that
     *           specific time. Absence of this field will default to the API's version of
     *           NOW.
     *     @type \Google\Protobuf\Duration $compare_duration
     *           When compare_duration is set, the ListAssetsResult's "state_change"
     *           attribute is updated to indicate whether the asset was added, removed, or
     *           remained present during the compare_duration period of time that precedes
     *           the read_time. This is the time between (read_time - compare_duration) and
     *           read_time.
     *           The state_change value is derived based on the presence of the asset at the
     *           two points in time. Intermediate state changes between the two times don't
     *           affect the result. For example, the results aren't affected if the asset is
     *           removed and re-created again.
     *           Possible "state_change" values when compare_duration is specified:
     *           * "ADDED":   indicates that the asset was not present at the start of
     *                          compare_duration, but present at read_time.
     *           * "REMOVED": indicates that the asset was present at the start of
     *                          compare_duration, but not present at read_time.
     *           * "ACTIVE":  indicates that the asset was present at both the
     *                          start and the end of the time period defined by
     *                          compare_duration and read_time.
     *           If compare_duration is not specified, then the only possible state_change
     *           is "UNUSED",  which will be the state_change set for all assets present at
     *           read_time.
     *     @type \Google\Protobuf\FieldMask $field_mask
     *           A field mask to specify the ListAssetsResult fields to be listed in the
     *           response.
     *           An empty field mask will list all fields.
     *     @type string $page_token
     *           The value returned by the last `ListAssetsResponse`; indicates
     *           that this is a continuation of a prior `ListAssets` call, and
     *           that the system should return the next page of data.
     *     @type int $page_size
     *           The maximum number of results to return in a single response. Default is
     *           10, minimum is 1, maximum is 1000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the organization assets should belong to. Its format is
     * "organizations/[organization_id], folders/[folder_id], or
     * projects/[project_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the organization assets should belong to. Its format is
     * "organizations/[organization_id], folders/[folder_id], or
     * projects/[project_id]".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Expression that defines the filter to apply across assets.
     * The expression is a list of zero or more restrictions combined via logical
     * operators `AND` and `OR`.
     * Parentheses are supported, and `OR` has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a `-`
     * character in front of them to indicate negation. The fields map to those
     * defined in the Asset resource. Examples include:
     * * name
     * * security_center_properties.resource_name
     * * resource_properties.a_property
     * * security_marks.marks.marka
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     * The following are the allowed field and operator combinations:
     * * name: `=`
     * * update_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `update_time = "2019-06-10T16:07:18-07:00"`
     *     `update_time = 1560208038000`
     * * create_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `create_time = "2019-06-10T16:07:18-07:00"`
     *     `create_time = 1560208038000`
     * * iam_policy.policy_blob: `=`, `:`
     * * resource_properties: `=`, `:`, `>`, `<`, `>=`, `<=`
     * * security_marks.marks: `=`, `:`
     * * security_center_properties.resource_name: `=`, `:`
     * * security_center_properties.resource_display_name: `=`, `:`
     * * security_center_properties.resource_type: `=`, `:`
     * * security_center_properties.resource_parent: `=`, `:`
     * * security_center_properties.resource_parent_display_name: `=`, `:`
     * * security_center_properties.resource_project: `=`, `:`
     * * security_center_properties.resource_project_display_name: `=`, `:`
     * * security_center_properties.resource_owners: `=`, `:`
     * For example, `resource_properties.size = 100` is a valid filter string.
     * Use a partial match on the empty string to filter based on a property
     * existing: `resource_properties.my_property : ""`
     * Use a negated partial match on the empty string to filter based on a
     * property not existing: `-resource_properties.my_property : ""`
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Expression that defines the filter to apply across assets.
     * The expression is a list of zero or more restrictions combined via logical
     * operators `AND` and `OR`.
     * Parentheses are supported, and `OR` has higher precedence than `AND`.
     * Restrictions have the form `<field> <operator> <value>` and may have a `-`
     * character in front of them to indicate negation. The fields map to those
     * defined in the Asset resource. Examples include:
     * * name
     * * security_center_properties.resource_name
     * * resource_properties.a_property
     * * security_marks.marks.marka
     * The supported operators are:
     * * `=` for all value types.
     * * `>`, `<`, `>=`, `<=` for integer values.
     * * `:`, meaning substring matching, for strings.
     * The supported value types are:
     * * string literals in quotes.
     * * integer literals without quotes.
     * * boolean literals `true` and `false` without quotes.
     * The following are the allowed field and operator combinations:
     * * name: `=`
     * * update_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `update_time = "2019-06-10T16:07:18-07:00"`
     *     `update_time = 1560208038000`
     * * create_time: `=`, `>`, `<`, `>=`, `<=`
     *   Usage: This should be milliseconds since epoch or an RFC3339 string.
     *   Examples:
     *     `create_time = "2019-06-10T16:07:18-07:00"`
     *     `create_time = 1560208038000`
     * * iam_policy.policy_blob: `=`, `:`
     * * resource_properties: `=`, `:`, `>`, `<`, `>=`, `<=`
     * * security_marks.marks: `=`, `:`
     * * security_center_properties.resource_name: `=`, `:`
     * * security_center_properties.resource_display_name: `=`, `:`
     * * security_center_properties.resource_type: `=`, `:`
     * * security_center_properties.resource_parent: `=`, `:`
     * * security_center_properties.resource_parent_display_name: `=`, `:`
     * * security_center_properties.resource_project: `=`, `:`
     * * security_center_properties.resource_project_display_name: `=`, `:`
     * * security_center_properties.resource_owners: `=`, `:`
     * For example, `resource_properties.size = 100` is a valid filter string.
     * Use a partial match on the empty string to filter based on a property
     * existing: `resource_properties.my_property : ""`
     * Use a negated partial match on the empty string to filter based on a
     * property not existing: `-resource_properties.my_property : ""`
     *
     * Generated from protobuf field <code>string filter = 2;</code>
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
     * Expression that defines what fields and order to use for sorting. The
     * string value should follow SQL syntax: comma separated list of fields. For
     * example: "name,resource_properties.a_property". The default sorting order
     * is ascending. To specify descending order for a field, a suffix " desc"
     * should be appended to the field name. For example: "name
     * desc,resource_properties.a_property". Redundant space characters in the
     * syntax are insignificant. "name desc,resource_properties.a_property" and "
     * name     desc  ,   resource_properties.a_property  " are equivalent.
     * The following fields are supported:
     * name
     * update_time
     * resource_properties
     * security_marks.marks
     * security_center_properties.resource_name
     * security_center_properties.resource_display_name
     * security_center_properties.resource_parent
     * security_center_properties.resource_parent_display_name
     * security_center_properties.resource_project
     * security_center_properties.resource_project_display_name
     * security_center_properties.resource_type
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Expression that defines what fields and order to use for sorting. The
     * string value should follow SQL syntax: comma separated list of fields. For
     * example: "name,resource_properties.a_property". The default sorting order
     * is ascending. To specify descending order for a field, a suffix " desc"
     * should be appended to the field name. For example: "name
     * desc,resource_properties.a_property". Redundant space characters in the
     * syntax are insignificant. "name desc,resource_properties.a_property" and "
     * name     desc  ,   resource_properties.a_property  " are equivalent.
     * The following fields are supported:
     * name
     * update_time
     * resource_properties
     * security_marks.marks
     * security_center_properties.resource_name
     * security_center_properties.resource_display_name
     * security_center_properties.resource_parent
     * security_center_properties.resource_parent_display_name
     * security_center_properties.resource_project
     * security_center_properties.resource_project_display_name
     * security_center_properties.resource_type
     *
     * Generated from protobuf field <code>string order_by = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

    /**
     * Time used as a reference point when filtering assets. The filter is limited
     * to assets existing at the supplied time and their values are those at that
     * specific time. Absence of this field will default to the API's version of
     * NOW.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return $this->read_time;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * Time used as a reference point when filtering assets. The filter is limited
     * to assets existing at the supplied time and their values are those at that
     * specific time. Absence of this field will default to the API's version of
     * NOW.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * When compare_duration is set, the ListAssetsResult's "state_change"
     * attribute is updated to indicate whether the asset was added, removed, or
     * remained present during the compare_duration period of time that precedes
     * the read_time. This is the time between (read_time - compare_duration) and
     * read_time.
     * The state_change value is derived based on the presence of the asset at the
     * two points in time. Intermediate state changes between the two times don't
     * affect the result. For example, the results aren't affected if the asset is
     * removed and re-created again.
     * Possible "state_change" values when compare_duration is specified:
     * * "ADDED":   indicates that the asset was not present at the start of
     *                compare_duration, but present at read_time.
     * * "REMOVED": indicates that the asset was present at the start of
     *                compare_duration, but not present at read_time.
     * * "ACTIVE":  indicates that the asset was present at both the
     *                start and the end of the time period defined by
     *                compare_duration and read_time.
     * If compare_duration is not specified, then the only possible state_change
     * is "UNUSED",  which will be the state_change set for all assets present at
     * read_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration compare_duration = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getCompareDuration()
    {
        return $this->compare_duration;
    }

    public function hasCompareDuration()
    {
        return isset($this->compare_duration);
    }

    public function clearCompareDuration()
    {
        unset($this->compare_duration);
    }

    /**
     * When compare_duration is set, the ListAssetsResult's "state_change"
     * attribute is updated to indicate whether the asset was added, removed, or
     * remained present during the compare_duration period of time that precedes
     * the read_time. This is the time between (read_time - compare_duration) and
     * read_time.
     * The state_change value is derived based on the presence of the asset at the
     * two points in time. Intermediate state changes between the two times don't
     * affect the result. For example, the results aren't affected if the asset is
     * removed and re-created again.
     * Possible "state_change" values when compare_duration is specified:
     * * "ADDED":   indicates that the asset was not present at the start of
     *                compare_duration, but present at read_time.
     * * "REMOVED": indicates that the asset was present at the start of
     *                compare_duration, but not present at read_time.
     * * "ACTIVE":  indicates that the asset was present at both the
     *                start and the end of the time period defined by
     *                compare_duration and read_time.
     * If compare_duration is not specified, then the only possible state_change
     * is "UNUSED",  which will be the state_change set for all assets present at
     * read_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration compare_duration = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCompareDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->compare_duration = $var;

        return $this;
    }

    /**
     * A field mask to specify the ListAssetsResult fields to be listed in the
     * response.
     * An empty field mask will list all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 7;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    public function hasFieldMask()
    {
        return isset($this->field_mask);
    }

    public function clearFieldMask()
    {
        unset($this->field_mask);
    }

    /**
     * A field mask to specify the ListAssetsResult fields to be listed in the
     * response.
     * An empty field mask will list all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 7;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

    /**
     * The value returned by the last `ListAssetsResponse`; indicates
     * that this is a continuation of a prior `ListAssets` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 8;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListAssetsResponse`; indicates
     * that this is a continuation of a prior `ListAssets` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 8;</code>
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
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 9;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of results to return in a single response. Default is
     * 10, minimum is 1, maximum is 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

