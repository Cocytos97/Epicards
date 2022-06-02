<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/workflow_templates.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to create a workflow template.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.CreateWorkflowTemplateRequest</code>
 */
class CreateWorkflowTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the region or location, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates,create`, the resource name of the
     *   region has the following format:
     *   `projects/{project_id}/regions/{region}`
     * * For `projects.locations.workflowTemplates.create`, the resource name of
     *   the location has the following format:
     *   `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The Dataproc workflow template to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowTemplate template = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $template = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the region or location, as described
     *           in https://cloud.google.com/apis/design/resource_names.
     *           * For `projects.regions.workflowTemplates,create`, the resource name of the
     *             region has the following format:
     *             `projects/{project_id}/regions/{region}`
     *           * For `projects.locations.workflowTemplates.create`, the resource name of
     *             the location has the following format:
     *             `projects/{project_id}/locations/{location}`
     *     @type \Google\Cloud\Dataproc\V1beta2\WorkflowTemplate $template
     *           Required. The Dataproc workflow template to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\WorkflowTemplates::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the region or location, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates,create`, the resource name of the
     *   region has the following format:
     *   `projects/{project_id}/regions/{region}`
     * * For `projects.locations.workflowTemplates.create`, the resource name of
     *   the location has the following format:
     *   `projects/{project_id}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the region or location, as described
     * in https://cloud.google.com/apis/design/resource_names.
     * * For `projects.regions.workflowTemplates,create`, the resource name of the
     *   region has the following format:
     *   `projects/{project_id}/regions/{region}`
     * * For `projects.locations.workflowTemplates.create`, the resource name of
     *   the location has the following format:
     *   `projects/{project_id}/locations/{location}`
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
     * Required. The Dataproc workflow template to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowTemplate template = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\WorkflowTemplate|null
     */
    public function getTemplate()
    {
        return isset($this->template) ? $this->template : null;
    }

    public function hasTemplate()
    {
        return isset($this->template);
    }

    public function clearTemplate()
    {
        unset($this->template);
    }

    /**
     * Required. The Dataproc workflow template to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.WorkflowTemplate template = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\WorkflowTemplate $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\WorkflowTemplate::class);
        $this->template = $var;

        return $this;
    }

}

