<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunStyleFeatureAnalysisShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contentsShrink;

    /**
     * @var string
     */
    public $materialIdsShrink;

    /**
     * @description This parameter is required.
     *
     * @example llm-2setzb9x4ewsd
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'contentsShrink'    => 'Contents',
        'materialIdsShrink' => 'MaterialIds',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentsShrink) {
            $res['Contents'] = $this->contentsShrink;
        }
        if (null !== $this->materialIdsShrink) {
            $res['MaterialIds'] = $this->materialIdsShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunStyleFeatureAnalysisShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contents'])) {
            $model->contentsShrink = $map['Contents'];
        }
        if (isset($map['MaterialIds'])) {
            $model->materialIdsShrink = $map['MaterialIds'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}