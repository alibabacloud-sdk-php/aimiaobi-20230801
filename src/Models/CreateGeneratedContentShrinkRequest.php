<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class CreateGeneratedContentShrinkRequest extends Model
{
    /**
     * @example xxx_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $content;

    /**
     * @example government
     *
     * @var string
     */
    public $contentDomain;

    /**
     * @var string
     */
    public $contentText;

    /**
     * @var string
     */
    public $keywordsShrink;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @example xxx
     *
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $title;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'agentKey'       => 'AgentKey',
        'content'        => 'Content',
        'contentDomain'  => 'ContentDomain',
        'contentText'    => 'ContentText',
        'keywordsShrink' => 'Keywords',
        'prompt'         => 'Prompt',
        'taskId'         => 'TaskId',
        'title'          => 'Title',
        'uuid'           => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentDomain) {
            $res['ContentDomain'] = $this->contentDomain;
        }
        if (null !== $this->contentText) {
            $res['ContentText'] = $this->contentText;
        }
        if (null !== $this->keywordsShrink) {
            $res['Keywords'] = $this->keywordsShrink;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGeneratedContentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentDomain'])) {
            $model->contentDomain = $map['ContentDomain'];
        }
        if (isset($map['ContentText'])) {
            $model->contentText = $map['ContentText'];
        }
        if (isset($map['Keywords'])) {
            $model->keywordsShrink = $map['Keywords'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}