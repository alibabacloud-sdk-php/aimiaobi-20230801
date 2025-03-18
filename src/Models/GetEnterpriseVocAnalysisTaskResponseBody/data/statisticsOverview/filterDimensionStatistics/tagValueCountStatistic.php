<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview\filterDimensionStatistics;

use AlibabaCloud\Tea\Model;

class tagValueCountStatistic extends Model
{
    /**
     * @example xxx
     *
     * @var string
     */
    public $tagName;

    /**
     * @example multiTagValues
     *
     * @var string
     */
    public $tagTaskType;

    /**
     * @example 100
     *
     * @var int
     */
    public $valueCount;
    protected $_name = [
        'tagName' => 'TagName',
        'tagTaskType' => 'TagTaskType',
        'valueCount' => 'ValueCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagTaskType) {
            $res['TagTaskType'] = $this->tagTaskType;
        }
        if (null !== $this->valueCount) {
            $res['ValueCount'] = $this->valueCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagValueCountStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagTaskType'])) {
            $model->tagTaskType = $map['TagTaskType'];
        }
        if (isset($map['ValueCount'])) {
            $model->valueCount = $map['ValueCount'];
        }

        return $model;
    }
}
