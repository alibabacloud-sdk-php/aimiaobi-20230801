<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest\stepForCustomSummaryStyleConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest\stepForNewsBroadcastContentConfig;
use AlibabaCloud\Tea\Model;

class GetHotTopicBroadcastRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $calcTotalToken;

    /**
     * @example 分类筛选
     *
     * @var string
     */
    public $category;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example 2024-10-11_13
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @example 5
     *
     * @var int
     */
    public $size;

    /**
     * @var stepForCustomSummaryStyleConfig
     */
    public $stepForCustomSummaryStyleConfig;

    /**
     * @var stepForNewsBroadcastContentConfig
     */
    public $stepForNewsBroadcastContentConfig;

    /**
     * @example ["主题1","主题2"]
     *
     * @var string[]
     */
    public $topics;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'calcTotalToken' => 'CalcTotalToken',
        'category' => 'Category',
        'current' => 'Current',
        'hotTopicVersion' => 'HotTopicVersion',
        'size' => 'Size',
        'stepForCustomSummaryStyleConfig' => 'StepForCustomSummaryStyleConfig',
        'stepForNewsBroadcastContentConfig' => 'StepForNewsBroadcastContentConfig',
        'topics' => 'Topics',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->calcTotalToken) {
            $res['CalcTotalToken'] = $this->calcTotalToken;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->hotTopicVersion) {
            $res['HotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $res['StepForCustomSummaryStyleConfig'] = null !== $this->stepForCustomSummaryStyleConfig ? $this->stepForCustomSummaryStyleConfig->toMap() : null;
        }
        if (null !== $this->stepForNewsBroadcastContentConfig) {
            $res['StepForNewsBroadcastContentConfig'] = null !== $this->stepForNewsBroadcastContentConfig ? $this->stepForNewsBroadcastContentConfig->toMap() : null;
        }
        if (null !== $this->topics) {
            $res['Topics'] = $this->topics;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotTopicBroadcastRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalcTotalToken'])) {
            $model->calcTotalToken = $map['CalcTotalToken'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['HotTopicVersion'])) {
            $model->hotTopicVersion = $map['HotTopicVersion'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StepForCustomSummaryStyleConfig'])) {
            $model->stepForCustomSummaryStyleConfig = stepForCustomSummaryStyleConfig::fromMap($map['StepForCustomSummaryStyleConfig']);
        }
        if (isset($map['StepForNewsBroadcastContentConfig'])) {
            $model->stepForNewsBroadcastContentConfig = stepForNewsBroadcastContentConfig::fromMap($map['StepForNewsBroadcastContentConfig']);
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = $map['Topics'];
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
