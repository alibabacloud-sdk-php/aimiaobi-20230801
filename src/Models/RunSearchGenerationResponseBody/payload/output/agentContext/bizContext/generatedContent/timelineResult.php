<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\multimodalSearchResultList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\referenceList;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\textGenerateMultimodalMediaList;
use AlibabaCloud\Tea\Model;

class timelineResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @var generateTraceability
     */
    public $generateTraceability;

    /**
     * @var multimodalSearchResultList[]
     */
    public $multimodalSearchResultList;

    /**
     * @var referenceList[]
     */
    public $referenceList;

    /**
     * @example xx
     *
     * @var string
     */
    public $textGenerate;

    /**
     * @var textGenerateMultimodalMediaList[]
     */
    public $textGenerateMultimodalMediaList;
    protected $_name = [
        'generateFinished'                => 'GenerateFinished',
        'generateTraceability'            => 'GenerateTraceability',
        'multimodalSearchResultList'      => 'MultimodalSearchResultList',
        'referenceList'                   => 'ReferenceList',
        'textGenerate'                    => 'TextGenerate',
        'textGenerateMultimodalMediaList' => 'TextGenerateMultimodalMediaList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['GenerateFinished'] = $this->generateFinished;
        }
        if (null !== $this->generateTraceability) {
            $res['GenerateTraceability'] = null !== $this->generateTraceability ? $this->generateTraceability->toMap() : null;
        }
        if (null !== $this->multimodalSearchResultList) {
            $res['MultimodalSearchResultList'] = [];
            if (null !== $this->multimodalSearchResultList && \is_array($this->multimodalSearchResultList)) {
                $n = 0;
                foreach ($this->multimodalSearchResultList as $item) {
                    $res['MultimodalSearchResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->referenceList) {
            $res['ReferenceList'] = [];
            if (null !== $this->referenceList && \is_array($this->referenceList)) {
                $n = 0;
                foreach ($this->referenceList as $item) {
                    $res['ReferenceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textGenerate) {
            $res['TextGenerate'] = $this->textGenerate;
        }
        if (null !== $this->textGenerateMultimodalMediaList) {
            $res['TextGenerateMultimodalMediaList'] = [];
            if (null !== $this->textGenerateMultimodalMediaList && \is_array($this->textGenerateMultimodalMediaList)) {
                $n = 0;
                foreach ($this->textGenerateMultimodalMediaList as $item) {
                    $res['TextGenerateMultimodalMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timelineResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenerateFinished'])) {
            $model->generateFinished = $map['GenerateFinished'];
        }
        if (isset($map['GenerateTraceability'])) {
            $model->generateTraceability = generateTraceability::fromMap($map['GenerateTraceability']);
        }
        if (isset($map['MultimodalSearchResultList'])) {
            if (!empty($map['MultimodalSearchResultList'])) {
                $model->multimodalSearchResultList = [];
                $n                                 = 0;
                foreach ($map['MultimodalSearchResultList'] as $item) {
                    $model->multimodalSearchResultList[$n++] = null !== $item ? multimodalSearchResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReferenceList'])) {
            if (!empty($map['ReferenceList'])) {
                $model->referenceList = [];
                $n                    = 0;
                foreach ($map['ReferenceList'] as $item) {
                    $model->referenceList[$n++] = null !== $item ? referenceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextGenerate'])) {
            $model->textGenerate = $map['TextGenerate'];
        }
        if (isset($map['TextGenerateMultimodalMediaList'])) {
            if (!empty($map['TextGenerateMultimodalMediaList'])) {
                $model->textGenerateMultimodalMediaList = [];
                $n                                      = 0;
                foreach ($map['TextGenerateMultimodalMediaList'] as $item) {
                    $model->textGenerateMultimodalMediaList[$n++] = null !== $item ? textGenerateMultimodalMediaList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}