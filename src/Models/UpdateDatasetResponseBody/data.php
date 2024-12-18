<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetResponseBody\data\newsArticleResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-11-12 21:46:24
     *
     * @var string
     */
    public $createTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $createUser;

    /**
     * @example xxx
     *
     * @var string
     */
    public $datasetDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $datasetId;

    /**
     * @example xxx
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example CustomSemanticSearch
     *
     * @var string
     */
    public $datasetType;

    /**
     * @var newsArticleResults[]
     */
    public $newsArticleResults;

    /**
     * @example 1
     *
     * @var int
     */
    public $searchDatasetEnable;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'createUser'          => 'CreateUser',
        'datasetDescription'  => 'DatasetDescription',
        'datasetId'           => 'DatasetId',
        'datasetName'         => 'DatasetName',
        'datasetType'         => 'DatasetType',
        'newsArticleResults'  => 'NewsArticleResults',
        'searchDatasetEnable' => 'SearchDatasetEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->datasetDescription) {
            $res['DatasetDescription'] = $this->datasetDescription;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->datasetType) {
            $res['DatasetType'] = $this->datasetType;
        }
        if (null !== $this->newsArticleResults) {
            $res['NewsArticleResults'] = [];
            if (null !== $this->newsArticleResults && \is_array($this->newsArticleResults)) {
                $n = 0;
                foreach ($this->newsArticleResults as $item) {
                    $res['NewsArticleResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchDatasetEnable) {
            $res['SearchDatasetEnable'] = $this->searchDatasetEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DatasetDescription'])) {
            $model->datasetDescription = $map['DatasetDescription'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['DatasetType'])) {
            $model->datasetType = $map['DatasetType'];
        }
        if (isset($map['NewsArticleResults'])) {
            if (!empty($map['NewsArticleResults'])) {
                $model->newsArticleResults = [];
                $n                         = 0;
                foreach ($map['NewsArticleResults'] as $item) {
                    $model->newsArticleResults[$n++] = null !== $item ? newsArticleResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SearchDatasetEnable'])) {
            $model->searchDatasetEnable = $map['SearchDatasetEnable'];
        }

        return $model;
    }
}
