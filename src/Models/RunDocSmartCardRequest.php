<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunDocSmartCardRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 84ufBYEeLMZOjRFo84HJ7ySL3Efr55
     *
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @description This parameter is required.
     *
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @example llm-2setzb9x4ewsd
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docId' => 'DocId',
        'modelName' => 'ModelName',
        'prompt' => 'Prompt',
        'sessionId' => 'SessionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunDocSmartCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
