<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitEnterpriseVocAnalysisTaskRequest;

use AlibabaCloud\Dara\Model;

class filterTags extends Model
{
    /**
     * @var string
     */
    public $tagDefinePrompt;

    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagType;

    /**
     * @var string
     */
    public $tagValueDefinePrompt;
    protected $_name = [
        'tagDefinePrompt' => 'TagDefinePrompt',
        'tagName' => 'TagName',
        'tagType' => 'TagType',
        'tagValueDefinePrompt' => 'TagValueDefinePrompt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagDefinePrompt) {
            $res['TagDefinePrompt'] = $this->tagDefinePrompt;
        }

        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }

        if (null !== $this->tagType) {
            $res['TagType'] = $this->tagType;
        }

        if (null !== $this->tagValueDefinePrompt) {
            $res['TagValueDefinePrompt'] = $this->tagValueDefinePrompt;
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
        if (isset($map['TagDefinePrompt'])) {
            $model->tagDefinePrompt = $map['TagDefinePrompt'];
        }

        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }

        if (isset($map['TagType'])) {
            $model->tagType = $map['TagType'];
        }

        if (isset($map['TagValueDefinePrompt'])) {
            $model->tagValueDefinePrompt = $map['TagValueDefinePrompt'];
        }

        return $model;
    }
}
