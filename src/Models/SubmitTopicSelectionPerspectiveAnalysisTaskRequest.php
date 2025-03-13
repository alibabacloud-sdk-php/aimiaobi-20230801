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

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitTopicSelectionPerspectiveAnalysisTaskRequest\documents;
use AlibabaCloud\Tea\Model;

class SubmitTopicSelectionPerspectiveAnalysisTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var documents[]
     */
    public $documents;

    /**
     * @example TimedViewPoints
     *
     * @var string[]
     */
    public $perspectiveTypes;

    /**
     * @example 待分析的主题名（documents与topic二者至少传一个）
     *
     * @var string
     */
    public $topic;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'documents' => 'Documents',
        'perspectiveTypes' => 'PerspectiveTypes',
        'topic' => 'Topic',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->documents) {
            $res['Documents'] = [];
            if (null !== $this->documents && \is_array($this->documents)) {
                $n = 0;
                foreach ($this->documents as $item) {
                    $res['Documents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->perspectiveTypes) {
            $res['PerspectiveTypes'] = $this->perspectiveTypes;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTopicSelectionPerspectiveAnalysisTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Documents'])) {
            if (!empty($map['Documents'])) {
                $model->documents = [];
                $n = 0;
                foreach ($map['Documents'] as $item) {
                    $model->documents[$n++] = null !== $item ? documents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PerspectiveTypes'])) {
            if (!empty($map['PerspectiveTypes'])) {
                $model->perspectiveTypes = $map['PerspectiveTypes'];
            }
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
