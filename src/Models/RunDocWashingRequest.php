<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunDocWashingRequest extends Model
{
    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $referenceContent;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $topic;

    /**
     * @example 500
     *
     * @var int
     */
    public $wordNumber;

    /**
     * @description This parameter is required.
     *
     * @example llm-2setzb9x4ewsd
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $writingTypeName;

    /**
     * @var string
     */
    public $writingTypeRefDoc;
    protected $_name = [
        'modelId' => 'ModelId',
        'prompt' => 'Prompt',
        'referenceContent' => 'ReferenceContent',
        'sessionId' => 'SessionId',
        'topic' => 'Topic',
        'wordNumber' => 'WordNumber',
        'workspaceId' => 'WorkspaceId',
        'writingTypeName' => 'WritingTypeName',
        'writingTypeRefDoc' => 'WritingTypeRefDoc',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->referenceContent) {
            $res['ReferenceContent'] = $this->referenceContent;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->wordNumber) {
            $res['WordNumber'] = $this->wordNumber;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->writingTypeName) {
            $res['WritingTypeName'] = $this->writingTypeName;
        }
        if (null !== $this->writingTypeRefDoc) {
            $res['WritingTypeRefDoc'] = $this->writingTypeRefDoc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunDocWashingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['ReferenceContent'])) {
            $model->referenceContent = $map['ReferenceContent'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['WordNumber'])) {
            $model->wordNumber = $map['WordNumber'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WritingTypeName'])) {
            $model->writingTypeName = $map['WritingTypeName'];
        }
        if (isset($map['WritingTypeRefDoc'])) {
            $model->writingTypeRefDoc = $map['WritingTypeRefDoc'];
        }

        return $model;
    }
}
