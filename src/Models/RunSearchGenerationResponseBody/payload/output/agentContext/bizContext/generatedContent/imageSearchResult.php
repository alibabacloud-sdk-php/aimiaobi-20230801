<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\imageSearchResult\searchResult;
use AlibabaCloud\Tea\Model;

class imageSearchResult extends Model
{
    /**
     * @var searchResult[]
     */
    public $searchResult;
    protected $_name = [
        'searchResult' => 'SearchResult',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchResult) {
            $res['SearchResult'] = [];
            if (null !== $this->searchResult && \is_array($this->searchResult)) {
                $n = 0;
                foreach ($this->searchResult as $item) {
                    $res['SearchResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageSearchResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchResult'])) {
            if (!empty($map['SearchResult'])) {
                $model->searchResult = [];
                $n = 0;
                foreach ($map['SearchResult'] as $item) {
                    $model->searchResult[$n++] = null !== $item ? searchResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
