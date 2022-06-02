<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_job.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The runtime detail of PipelineJob.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.PipelineJobDetail</code>
 */
class PipelineJobDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The context of the pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context pipeline_context = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $pipeline_context = null;
    /**
     * Output only. The context of the current pipeline run.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context pipeline_run_context = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $pipeline_run_context = null;
    /**
     * Output only. The runtime details of the tasks under the pipeline.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.PipelineTaskDetail task_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $task_details;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\Context $pipeline_context
     *           Output only. The context of the pipeline.
     *     @type \Google\Cloud\AIPlatform\V1\Context $pipeline_run_context
     *           Output only. The context of the current pipeline run.
     *     @type \Google\Cloud\AIPlatform\V1\PipelineTaskDetail[]|\Google\Protobuf\Internal\RepeatedField $task_details
     *           Output only. The runtime details of the tasks under the pipeline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The context of the pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context pipeline_context = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\Context|null
     */
    public function getPipelineContext()
    {
        return $this->pipeline_context;
    }

    public function hasPipelineContext()
    {
        return isset($this->pipeline_context);
    }

    public function clearPipelineContext()
    {
        unset($this->pipeline_context);
    }

    /**
     * Output only. The context of the pipeline.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context pipeline_context = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\Context $var
     * @return $this
     */
    public function setPipelineContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Context::class);
        $this->pipeline_context = $var;

        return $this;
    }

    /**
     * Output only. The context of the current pipeline run.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context pipeline_run_context = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\AIPlatform\V1\Context|null
     */
    public function getPipelineRunContext()
    {
        return $this->pipeline_run_context;
    }

    public function hasPipelineRunContext()
    {
        return isset($this->pipeline_run_context);
    }

    public function clearPipelineRunContext()
    {
        unset($this->pipeline_run_context);
    }

    /**
     * Output only. The context of the current pipeline run.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context pipeline_run_context = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\Context $var
     * @return $this
     */
    public function setPipelineRunContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Context::class);
        $this->pipeline_run_context = $var;

        return $this;
    }

    /**
     * Output only. The runtime details of the tasks under the pipeline.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.PipelineTaskDetail task_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaskDetails()
    {
        return $this->task_details;
    }

    /**
     * Output only. The runtime details of the tasks under the pipeline.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.PipelineTaskDetail task_details = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\AIPlatform\V1\PipelineTaskDetail[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaskDetails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AIPlatform\V1\PipelineTaskDetail::class);
        $this->task_details = $arr;

        return $this;
    }

}

