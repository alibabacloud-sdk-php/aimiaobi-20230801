<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitAsyncTaskResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var mixed
     */
    public $taskIntermediateResult;
    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'taskId'                 => 'TaskId',
        'taskIntermediateResult' => 'TaskIntermediateResult',
        'taskName'               => 'TaskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskIntermediateResult) {
            $res['TaskIntermediateResult'] = $this->taskIntermediateResult;
        }

        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskIntermediateResult'])) {
            $model->taskIntermediateResult = $map['TaskIntermediateResult'];
        }

        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
