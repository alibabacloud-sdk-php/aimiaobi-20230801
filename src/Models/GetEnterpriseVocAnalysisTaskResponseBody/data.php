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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\statisticsOverview;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetEnterpriseVocAnalysisTaskResponseBody\data\usage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @var statisticsOverview
     */
    public $statisticsOverview;

    /**
     * @example SUCCESSED
     *
     * @var string
     */
    public $status;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'statisticsOverview' => 'StatisticsOverview',
        'status' => 'Status',
        'usage' => 'Usage',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->statisticsOverview) {
            $res['StatisticsOverview'] = null !== $this->statisticsOverview ? $this->statisticsOverview->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toMap() : null;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['StatisticsOverview'])) {
            $model->statisticsOverview = statisticsOverview::fromMap($map['StatisticsOverview']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        return $model;
    }
}
