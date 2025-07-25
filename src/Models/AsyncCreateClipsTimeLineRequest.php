<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class AsyncCreateClipsTimeLineRequest extends Model
{
    /**
     * @var string
     */
    public $additionalContent;

    /**
     * @var string
     */
    public $customContent;

    /**
     * @var bool
     */
    public $noRefVideo;

    /**
     * @var string
     */
    public $processPrompt;

    /**
     * @description This parameter is required.
     *
     * @example 7AA2AE16-D873-5C5F-9708-15396C382EB1
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example llm-2setzb9x4ewsd
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'additionalContent' => 'AdditionalContent',
        'customContent' => 'CustomContent',
        'noRefVideo' => 'NoRefVideo',
        'processPrompt' => 'ProcessPrompt',
        'taskId' => 'TaskId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalContent) {
            $res['AdditionalContent'] = $this->additionalContent;
        }
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->noRefVideo) {
            $res['NoRefVideo'] = $this->noRefVideo;
        }
        if (null !== $this->processPrompt) {
            $res['ProcessPrompt'] = $this->processPrompt;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncCreateClipsTimeLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalContent'])) {
            $model->additionalContent = $map['AdditionalContent'];
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['NoRefVideo'])) {
            $model->noRefVideo = $map['NoRefVideo'];
        }
        if (isset($map['ProcessPrompt'])) {
            $model->processPrompt = $map['ProcessPrompt'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
